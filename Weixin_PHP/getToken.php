<?php
//����appid��appsecret
define("APPID", "wxd3edcf424494c425");
define("APPSECRET", "c12b1e677b6afa05fa5ed329a38e4399");
/**
 * ��ȡ΢����֤��token
 */
function getToken(){
    
    //�������ݿ�
    $con = mysql_connect("localhost", "root", "root");
    if($con == false) {
        return "";
    }
    mysql_select_db("weixin", $con);
    mysql_set_charset("uft8", $con);
    
    //��ȡ���ݿ��еļ�¼
    $sql = "select * from wx_config";
    $result = mysql_query($sql, $con);
    //��ȡһ����¼
    $row = mysql_fetch_assoc($result);
     //�ж����ݿ����Ƿ����΢�ŵ����ã������Ƿ����
    if(empty($row) || (time()-$row["wx_time"] >= $row["wx_expires"])) {
        //û�����ã����߹��ڣ�������ȡtoken
        //���������ַ��
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".APPID."&secret=".APPSECRET;

        //���������΢�ŷ���������curl��ʽ
        //��ʼ��
        $wxCurl = curl_init();
        //����ѡ��
        curl_setopt($wxCurl, CURLOPT_URL, $url);//�����url��ַ
        curl_setopt($wxCurl, CURLOPT_SSL_VERIFYPEER, false);//https����ʽ
        curl_setopt($wxCurl, CURLOPT_RETURNTRANSFER, 1);//����Ľ�����ַ�������

        //��������
        $output = curl_exec($wxCurl);

        //�ͷ�curl���
        curl_close($wxCurl);

        if($output == null) {
            return false;
        }

        //����ȡ������ת��Ϊ����
        $token = json_decode($output, true);

        //������ݿ�
        if(mysql_query("delete from wx_config", $con)) {
            //��token�洢�����ݿ��У�Ҳ���Դ洢�ڻ����У�
            $sql = "insert into wx_config values('".$token['access_token']."',".$token["expires_in"].",".time().")";

            //���뵽���ݿ���
            mysql_query($sql, $con);
            
        }
        //����token
        return $token["access_token"];
        
    }else {
        return $row["wx_token"];
    }
    
}
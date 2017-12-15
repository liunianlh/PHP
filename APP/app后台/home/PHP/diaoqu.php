<?php
header("Content-Type:text/html;charset=utf-8");
	include '../class/mysqlDB.class.php';
	$link = mysqlDB::getInstance("app");   
           $sql="select * from video";
           $list=$link->select($sql);

//	$list=$link->select($sql);
//	foreach ($list as $key => $value) {
//		$u_id=$value["u_id"];
//		$id=$value["id"];
//		$class=$value["type"];
////		用户信息
//		$sql="select * from user where id={$u_id}";
//		$user=$data->selectone($sql);
//		$list[$key]["user"]=$user;
////		点赞数
//		$sql="select count(*) as count from islike where m_id={$id} and is_like=1";
//		$like=$data->count($sql);
//		$list[$key]["like"]=$like;
////		被踩数
//		$sql="select count(*) as count from islike where m_id={$id} and is_like=2";
//		$dislike=$data->count($sql);
//		$list[$key]["dislike"]=$dislike;
////		评论数
//		$sql="select count(*) as count from comment where is_audit=1 and m_id={$id}";
//		$comment=$data->count($sql);
//		$list[$key]["comment"]=$comment;
////		类型
//		$sql="select name as count from class where id={$class}";
//		$type=$data->count($sql);
//		$list[$key]["type"]=$type;
//	}
	echo json_encode($list);
?>
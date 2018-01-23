<?php
/* Smarty version 3.1.30, created on 2018-01-14 15:32:02
  from "D:\phpStudy\WWW\php\Movie\movie\Application\Home\View\Dingdan\Dingdan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5b07720c6a17_94461573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16e1e33b3418300e20a94418684d6f1e0347d1e3' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\Movie\\movie\\Application\\Home\\View\\Dingdan\\Dingdan.html',
      1 => 1515730622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5b07720c6a17_94461573 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>确认订单</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="Public/css/dingdan.css"/>
		<link rel="stylesheet" type="text/css" href="Public/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="Public/bootstrap/css/bootstrap.min.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="Public/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<style>
			body{
				background: #E3E3E3;
			}
			body>div{
				padding: 5%;
				background: #fff;
				margin-bottom: 2%;
				display: inline-block;
				width: 100%;
			}			
		</style>
	</head>
	<body>
		
		<!--头部订单详情-->
		<div class="top">
			<div class="top_left">
				<h3><?php echo $_smarty_tpl->tpl_vars['list']->value["name"];?>
</h3> <span><span>1</span>张</span>
				<p><?php echo $_smarty_tpl->tpl_vars['list']->value["money"]["date"];?>
 <?php echo $_smarty_tpl->tpl_vars['list']->value["money"]["time"];?>
 (<?php echo $_smarty_tpl->tpl_vars['list']->value["language"];?>
 2D)</p>
				<p><?php echo $_smarty_tpl->tpl_vars['list']->value["money"]["t_id"];?>
</p>
				<p><?php echo $_smarty_tpl->tpl_vars['list']->value["money"]["h_id"];?>
 <?php echo $_smarty_tpl->tpl_vars['people_row']->value;?>
排 <?php echo $_smarty_tpl->tpl_vars['people_line']->value;?>
座</p>
			</div>
			<div class="top_right">
				<img src="Public/img/biao.png"/><span id="m"></span><span class="bd">:</span><span id="s"></span>
			</div>
		</div>
		
		<!--票价总计-->
		<div class="piaojia">
			<span>票价总计</span>
			<div class="">
				含服务费3元/张
				<span><?php echo $_smarty_tpl->tpl_vars['list']->value["money"]["money"];?>
元</span>
			</div>
		</div>
		
		<!--通知帐号-->
		<div class="tongzhi">
			<div class="">
				<h4>微信号</h4>
				<p>微信号会用于下单,并且发送取票码</p>
			</div>
			<div class="">
				微信名
			</div>
		</div>
		
		<!--购票须知-->
		<div class="xuzhi">
			<div class="">
				<h4>购票须知</h4>
			</div>
			<div class="">
				<p>1.由于设备</p>
				<p>2.由于设备</p>
				<p>3.由于设备</p>
				<p>4.这个不是商业网站，游客恰巧进入的请关闭，不重视者，出现事故概不负责</p>
			</div>
		</div>
		
		<!--立即付款-->
		<div class="fuqian">
			<div></div>
			<!--退改签须知-->
			<div class="fuqian_xuzhi">
				<div class="fuqian_mingxi_top">
					退改签须知
					<span id="quxiao1">取消</span>
				</div>
				<div class="tui">
					<h4>退票规则</h4>
					<p>1. 仅标有“退票”标识的影院支持退票，其中个别特殊场次根据影院要求可能不支持退票，使用电影兑换券的订单不支持退票。具体以下单页面说明为准。若购票时同时开通了影城卡，影城卡不可退。</p>
					<p>2. 同一用户每个自然月退票/改签机会普通用户为1次，青铜会员为2次，白银会员为2次，黄金会员为3次，黑钻会员为5次，（改签和退票共享次数合计）。（注：同一淘宝账号视为同一用户。“我的会员等级”详见“淘票票客户端”7.2及以上版本）。</p>
					<p>3. 电影开场前一定时间内且用户未取票的情况下可支持退票，退票将可能产生额外服务费，具体退票规则及收费标准以下单页面说明为准。原订单实际支付金额扣除退票服务费后，剩余金额将在退票成功后7个工作日内原路退回至购票时使用的支付宝账户。</p>
					<p>4. 目前仅支持整笔订单退票，不支持单个座位退票。</p>
					<h4>改签规则</h4>
					<p>1. 仅标有“退票”标识的影院支持退票，其中个别特殊场次根据影院要求可能不支持退票，使用电影兑换券的订单不支持退票。具体以下单页面说明为准。若购票时同时开通了影城卡，影城卡不可退。</p>
					<p>2. 同一用户每个自然月退票/改签机会普通用户为1次，青铜会员为2次，白银会员为2次，黄金会员为3次，黑钻会员为5次，（改签和退票共享次数合计）。（注：同一淘宝账号视为同一用户。“我的会员等级”详见“淘票票客户端”7.2及以上版本）。</p>
					<p>3. 电影开场前一定时间内且用户未取票的情况下可支持退票，退票将可能产生额外服务费，具体退票规则及收费标准以下单页面说明为准。原订单实际支付金额扣除退票服务费后，剩余金额将在退票成功后7个工作日内原路退回至购票时使用的支付宝账户。</p>
					<p>4. 目前仅支持整笔订单退票，不支持单个座位退票。</p>
				</div>
			</div>
			<!--结算明细-->
			<div class="fuqian_mingxi">
				<div class="fuqian_mingxi_top">
					细算明细
					<span id="quxiao2">取消</span>
				</div>
				<div class="fuqian_mingxi_botttom">
					<h5>电影票<span>含服务费3元/张</span></h5>
					<p>特惠票</p>
				<div>
					<span>促</span><?php echo $_smarty_tpl->tpl_vars['list']->value["money"]["money"]+3;?>
元x1
				</div>
				</div>
			</div>
			
		</div>
		<div class="funqian_bottom">
			<div class="fuqian_top">
				<div class="fuqian_top_left">
					退改签须知
					<img src="Public/img/sanjiaoxia.png"/>
				</div>
				<div class="fuqian_top_right"  id="fuqian">
					应付&nbsp;<span><span><?php echo $_smarty_tpl->tpl_vars['list']->value["money"]["money"]+3;?>
</span>元</span>
					<img src="Public/img/sanjiaoxia.png"/>
				</div>
			</div>
			<div class="queren">
				立即付款
			</div>
		</div>
		<p style="height: 100px;"></>
		
		<?php echo '<script'; ?>
>
			//退改签滚动条
			$(".tui").scroll();
			//<!--退改签须知-->
			$(".fuqian_top_left").click(function(){
				$(".fuqian").show();
				$(".fuqian_xuzhi").show();
				$(".fuqian_top_left img").attr("src","img/sanjiaotop.png");
			});
			$("#quxiao1").click(function(){
				$(".fuqian").hide();
				$(".fuqian_xuzhi").hide();
				$(".fuqian_top_left img").attr("src","img/sanjiaoxia.png");
			});
			//<!--结算明细-->
			$("#fuqian").click(function(){
				$(".fuqian").show();
				$(".fuqian_mingxi").show();
				$("#fuqian img").attr("src","img/sanjiaotop.png");
			});
			$("#quxiao2").click(function(){
				$(".fuqian").hide();
				$(".fuqian_mingxi").hide();
				$("#fuqian img").attr("src","img/sanjiaoxia.png");
			});
			
			//时间倒计时
			var m = 14; //传个分钟数到这里
			var s = 59;

			function showtime() {
				document.getElementById('m').innerHTML = m;
				document.getElementById('s').innerHTML = s;
				s = s - 1;
				if(s == 0) {
					m = m - 1;
					s = 60
				}
				if(m == '-1'　&& s == 60) {
					alert("订单时间内未付款，请重新下订单");
					window.location = '1'; //倒计时结束跳转到 www.ewceo.com
				}
			}
			clearInterval(settime);
			var settime = setInterval(function() {
				showtime();
			}, 1000);
		<?php echo '</script'; ?>
>
		
	</body>
</html>
<?php }
}

{*引入父文件*} {extends file='public.tpl'} {block name="header" }
<title></title>
<meta charset="utf-8" />
<link rel="shortcut icon" href="c/images/qita/t.ico" />
<link rel="stylesheet" href="public/css/header.css" />
<link rel="stylesheet" href="public/css/index.css" />
<link rel="stylesheet" href="public/css/footer.css" />
<script type="text/javascript" src="public/js/jquery-1.12.3.min.js"></script>
{/block} {block name="content"}
<div class="zong">
	<div class="header">
		<div class="header-top">
			<img src="public/images/qita/tengxunyouxi.png" />
		</div>
		<div class="header-bottom">
			<div class="header-bottom-content">
				<ul class="clearbox">
					<li>
						<img src="public/images/qita/logo.png" />
					</li>
					<li>
						<a href="">
							官方首页
							<span>HOME</span>
						</a>
					</li>
					<li>
						<a href="">
							游戏资料
							<span>DATA</span>
						</a>
					</li>
					<li>
						<a href="">
							攻略中心
							<span>RAIDERS</span>
						</a>
					</li>
					<li>
						<a href="">
							赛事中心
							<span>MATCH</span>
						</a>
					</li>
					<li>
						<a href="">
							商城/合作
							<span>STORE</span>
						</a>
					</li>
					<li>
						<a href="">
							社区互动
							<span>COMMUNITY</span>
						</a>
					</li>
					<li>
						<a href="">
							玩家支持
							<span>PLAYER</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="public/images/qita/denglu2.png" /> 欢迎登录
							<span>登录后查看游戏战绩</span>
						</a>
					</li>
				</ul>
				<div class="header-bottom-content-bottom clearbox">
					<div class="header-bottom-left">
						<p>周免英雄({$start}-{$end})</p>
						<ul>
							{foreach from=$zhoumian key=a item=b } {if $a==0 }
							<li>
								<a href="http://localhost/Home/index.php?c=Info&a=index&id={$b.id}" class="zhoumian"><img class="block" style="display: none;" src="{$b.photo}" /><img class="none" src="{$b.image}" /></a>
							</li>
							{else}
							<li>
								<a href="http://localhost/Home/index.php?c=Info&a=index&id={$b.id}" class="zhoumian"><img class="block" src="{$b.photo}" /><img class="none" style="display: none;" src="{$b.image}" /></a>
							</li>
							{/if} {/foreach}
						</ul>
						<a href="">更多英雄</a>
					</div>
					<div class="header-bottom-right">
						<a href="">
							<img src="" />
						</a>
						<div>
							亲爱的召唤师,欢迎
							<a href="">登录</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="content-div">
			<div class="content-one">
				<i></i>
				<a href="">王者荣耀首页</a>
				<span>></span>
				<label>英雄介绍</label>
			</div>
			<div class="content-two">
				<h3>英雄介绍</h3>
				<ul class="herolist-nav">
					<li>
						<a href="http://localhost/Home/index.php?c=Index&a=index">英雄</a>
					</li>
					<li>
						<a href="http://localhost/Home/index.php?c=Daoju&a=index">局内道具</a>
					</li>
					<li class="dangqian">
						<a href="#">召唤师技能</a>
					</li>
				</ul>
			</div>
			<div class="content-three">

				<div class="content-three-bottom clearbox">
					<ul style="width: 465px;margin: 0px;display: inline-block;">{foreach from=$data key=a item=b} {if $a==0 }
						<li>
							<a id="diyige" href="javascript:;" class="xiangqing" xiangqingtu="{$b.big_image}" name="{$b.name}" dengji="{$b.unlock_level}" cd="{$b.decribe}"><img class="biankuang" src="{$b.image}">{$b.name}</a>
						</li>{else}
						<li>
							<a href="javascript:;" class="xiangqing" xiangqingtu="{$b.big_image}" name="{$b.name}" dengji="{$b.unlock_level}" cd="{$b.decribe}"><img class="biankuang" src="{$b.image}">{$b.name}</a>
						</li>{/if} {/foreach}
					</ul>
					<div style="float: right;">
						<div style="width: 610px;"><img id="datu" style="width: 550px;height: 342px;margin-left:20px;" src="//game.gtimg.cn/images/yxzj/img201606/summoner/80104-big.jpg" />
							<h4 id="name" style="margin-left:20px;color: #00A383;font-size: 16px;"></h4>
							<p style="margin-left:20px;margin-top: 10px;color: #9A9A9A;font-size: 14px;">LV.<span id="dengji"></span>解锁</p>
						</div>
						<div id="shuxing" style="color:#333;margin-left:20px;margin-top: 20px;font-size: 14px;"></div>
                                                
					</div>
				</div>
			</div>
		</div>
	</div>
	{/block} {block name="js"}
	<script src="public/js/zhsjineng.js"></script>
	{/block}
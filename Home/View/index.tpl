{*引入父文件*} {extends file='public.tpl'} 
{block name="header" }
<title></title>
<meta charset="utf-8" />
<link rel="shortcut icon" href="c/images/qita/t.ico" />
<link rel="stylesheet" href="public/css/header.css" />
<link rel="stylesheet" href="public/css/index.css" />
<link rel="stylesheet" href="public/css/footer.css" />
<script type="text/javascript" src="public/js/jquery-1.12.3.min.js"></script>
{/block} 
{block name="content"}
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
							{foreach from=$zhoumian key=a item=b} 
                                                            {if $a==0}
							<li>
								<a href="http://localhost/Home/index.php?c=Info&a=index&id={$b.id}" class="zhoumian"><img class="block" style="display: none;" src="{$b.photo}" /><img class="none" src="{$b.image}" /></a>
							</li>
							{else}
							<li>
								<a href="http://localhost/Home/index.php?c=Info&a=index&id={$b.id}" class="zhoumian"><img class="block" src="{$b.photo}" /><img class="none" style="display: none;" src="{$b.image}" /></a>
							</li>
							{/if} 
                                                        {/foreach}
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
					<li class="dangqian">
						<a href="#">英雄</a>
					</li>
					<li>
						<a href="http://localhost/Home/index.php?c=Daoju&a=index" ">局内道具</a>
							</li>
							<li>
								<a href="http://localhost/Home/index.php?c=Zhsjineng&a=index ">召唤师技能</a>
							</li>
						</ul>
					</div>
					<div class="content-three ">
						<div class="content-three-top ">
							<div class="clearfix herolist-types clearbox ">
								<ul class="types-left ">
									<li>综合</li>
									<li>定位</li>
								</ul>
								<ul class="clearfix types-ms ">
									<li data-ptype="10">
										<span class="ms-radio "><i class="i "></i></span>
										<label>本周免费</label>
									</li>
									<li data-ptype="11">
										<span class="ms-radio "><i class="i "></i></span>
										<label>新手推荐</label>
									</li>
								</ul>
								<ul class="clearfix types-ms ">
									<li class="current " data-type="0">
										<span class="ms-radio "><i class="i "></i></span>
										<label>全部</label>
									</li>
									<li data-type="3">
										<span class="ms-radio "><i class="i "></i></span>
										<label>坦克</label>
									</li>
									<li data-type="1">
										<span class="ms-radio "><i class="i "></i></span>
										<label>战士</label>
									</li>
									<li data-type="4">
										<span class="ms-radio "><i class="i "></i></span>
										<label>刺客</label>
									</li>
									<li data-type="2">
										<span class="ms-radio "><i class="i "></i></span>
										<label>法师</label>
									</li>
									<li data-type="5">
										<span class="ms-radio "><i class="i "></i></span>
										<label>射手</label>
									</li>
									<li data-type="6">
										<span class="ms-radio "><i class="i "></i></span>
										<label>辅助</label>
									</li>
								</ul>
								<div class="herosearch ">
									<input type="text " class="herosearch-input " placeholder="请输入你想要搜索的英雄名 ">
									<a href=" " class="herosearch-icon "></a>
								</div>
							</div>
						</div>
						<div class="content-three-bottom ">
							<ul>
                                                            {foreach from=$data key=a item=b}
                                                                
                                                            <li class="yingxiong " leixing="{$leixing[$b.vocation_id]}" zhoumian="{$b.free_week}" xinshou="{$b.new_recommend}" >
									<a href="http://localhost/Home/index.php?c=Info&a=index&id={$b.id}"><img src="{$b.photo}">{$b.name}</a>
								</li>
								{/foreach}
							</ul>
						</div>
					</div>
				</div>
	</div>
                                                   
{/block}
{block name="js"}
    <script src="public/js/index.js"></script>
{/block}
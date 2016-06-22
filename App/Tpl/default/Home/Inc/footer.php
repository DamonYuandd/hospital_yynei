<footer>
	<div class="container">
		<div class="clearfix">
			<div class="footerLogo">
				<a href="{:U('Index/index')}"><img src="__HOME__images/logo1.png" alt=""></a>
				<p>预约服务热线：{$system.telephone}</p>
				
			</div>
			<address>
				门诊时间（无节假日）：<br>早上  8:00-12:00   下午  2:00-5:00<br><br>
				工作室地址：<br>{$system.address}<br><br>
				友情链接：<br>
				<a href="http://www.beirocare.com/"><img src="__HOME__images/links1.png" alt=""></a>
			</address>
			<map><img src="__HOME__images/map.png" alt=""></map>
		</div>
		<div class="footerLink">
			<dl>
				<dt><strong>首席专家叶义言</strong></dt>
				<volist name="link1" id="vo">
					<dd><a href="{$vo.url}" title="{$vo.title}">{$vo.title}</a></dd>
				</volist>
			</dl>
			<dl>
				<dt><strong>特色诊疗</strong></dt>
				<volist name="link2" id="vo">
					<dd><a href="{$vo.url}" title="{$vo.title}">{$vo.title}</a></dd>
				</volist>
			</dl>
			<dl>
				<dt><strong>儿童矮小</strong></dt>
				<volist name="link3" id="vo">
					<dd><a href="{$vo.url}" title="{$vo.title}">{$vo.title}</a></dd>
				</volist>
			</dl>
			<dl>
				<dt><strong>儿童肥胖</strong></dt>
				<volist name="link4" id="vo">
					<dd><a href="{$vo.url}" title="{$vo.title}">{$vo.title}</a></dd>
				</volist>
			</dl>
			<dl>
				<dt><strong>性早熟</strong></dt>
				<volist name="link5" id="vo">
					<dd><a href="{$vo.url}" title="{$vo.title}">{$vo.title}</a></dd>
				</volist>
			</dl>
			<dl>
				<dt><strong>新闻中心</strong></dt>
				<volist name="link6" id="vo">
					<dd><a href="{$vo.url}" title="{$vo.title}">{$vo.title}</a></dd>
				</volist>
			</dl>
			<dl>
				<dt><strong>联系我们</strong></dt>
				<volist name="link6" id="vo">
					<dd><a href="{$vo.url}" title="{$vo.title}">{$vo.title}</a></dd>
				</volist>
			</dl>
		</div>
	</div>
	<div style="text-align: center;padding: 50px 0;color:#666666;">
		网站备案号：湘ICP备16008197号-1
	</div>
</footer>

<ul class="asidePop">
	<li>
		<a href="{:U('Diagnosis/index')}">
			<span class="icon w6 icon019"></span>
			<p class="txt">在线初诊</p>
			<span class="bg"></span>
		</a>
		
	</li>
	<li>
		<a href="{:U('Appointment/index')}">
		<span class="icon w6 icon020"></span>
		<p class="txt">预约就诊</p>
		<span class="bg"></span>
		</a>
	</li>
	<li>
		<a>
		<span class="icon w6 icon021"></span>
		<p class="txt">专家咨询</p>
		<span class="bg"></span>
		</a>
		<div class="pop">
			<div class="qqBox">
				<ul>
                <!--
					<a target=blank href=tencent://message/?uin=1658599362&Site=矮小症&Menu=yes title="矮小症"></a>
					<a target=blank href=tencent://message/?uin=82575896&Site=肥胖症&Menu=yes title="肥胖症"></a>
					<a target=blank href=tencent://message/?uin=2251915651&Site=性早熟&Menu=yes title="性早熟"></a>
                   -->
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2251915651&site=qq&menu=yes"></a>
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=82575896&site=qq&menu=yes"></a>
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1658599362&site=qq&menu=yes"></a>
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2632206773&site=qq&menu=yes"></a>

				</ul>
			</div>
		</div>
	</li>
	<li>
		<a href="http://weibo.com/570655994?refer_flag=1001030102_&is_hot=1">
		<span class="icon w6 icon022"></span>
		<p class="txt">微信</p>
		<span class="bg"></span>
		</a>
		<div class="pop">
			<div class="codeBox">
				<a href="http://weibo.com/570655994?refer_flag=1001030102_&is_hot=1"><img src="__HOME__images/code.jpg" alt="{$seo['weibox']}" width="150" height="150"></a>
				<p class="name">微信扫一扫，惊喜少不了</p>
			</div>
		</div>
	</li>
	<li>
		<a href="http://weibo.com/570655994?refer_flag=1001030102_&is_hot=1" target="_blank">
		<span class="icon w6 icon023"></span>
		<p class="txt">微博</p>
		<span class="bg"></span>
		</a>
	</li>
</ul>
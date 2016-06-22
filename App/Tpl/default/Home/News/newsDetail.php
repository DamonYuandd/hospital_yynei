<!doctype html>
<html>
<head>
<layout name="Home:Inc:script" cache="0" />
<link href="__HOME__css/normalize.css" rel="stylesheet" type="text/css">
<link href="__HOME__css/css.css" rel="stylesheet" type="text/css">
<script src="__HOME__js/html5.js"></script>
<script src="__HOME__js/libs/jquery-1.11.3.min.js"></script>

</head>
<body>

<layout name="Home:Inc:header" cache="0" />

<div class="bannwrWarp h2">
	<a style="background: url(__HOME__images/banner007.jpg) no-repeat center top;"></a>
</div>

<layout name="Home:Inc:nav" cache="0" />

<div class="container w4">

	<div class="posNav ">
		<div class="fl">
			<a title="叶义言儿科">叶义言儿科</a>
			<span class="gt">&gt;</span>
			<a title="行业新闻">行业新闻</a>
		</div>
		<layout name="Home:Inc:fr" cache="0" />
	</div>

	<div class="newsWarp">
		<layout name="Home:Inc:newsLeft" cache="0" />
		<div class="newsRight">
			<article id="articleContent">
				<notempty name="obj['video']">
					<div class="newsVideoBg">
						<div class="videoPos">{:videoPlayer($obj['video'],534,342)}</div>
					</div>
				</notempty>
				<header>
					<h1>{$obj.title}</h1>
					<p>来源：{$obj.author|default="叶义言儿科"}  发布时间：{$obj.create_time|date="Y/m/d",###}      点击：{$obj.click_count}次</p>
				</header>
				<div class="content">
					{$obj.content|htmlspecialchars_decode}
				</div>
			</article>
			<div class="clearfix">
				<notempty name="preObj">
					<p class="fl font14">上一页：<a href="{:U('News/show',array('id' => $preObj['id']))}" title="{$preObj['title']}">{$preObj['title']}</a></p>
				</notempty>
				<notempty name="nextObj">
					<p class="fr font14">下一页：<a href="{:U('News/show',array('id' => $nextObj['id']))}" title="{$nextObj['title']}">{$nextObj['title']}</a></p>
				</notempty>
			</div>
		</div>
	</div>


</div>


<layout name="Home:Inc:footer" cache="0" />


<script>
$(function(){
	//TAB
	$('.tabMenu li').filter('.menu').click(function(){
		var warp = $(this).parents('.tabWarp'),
			index = $(this).index();

		//清除高光
		$(this).parent().find('li').removeClass('active');

		//隐藏内容
		warp.find('.tabContent .con').hide();

		//当前添加高光
		$(this).addClass('active');

		//显示指写内容
		warp.find('.tabContent .con').eq(index).show();



	});
})
</script>
</body>
</html>
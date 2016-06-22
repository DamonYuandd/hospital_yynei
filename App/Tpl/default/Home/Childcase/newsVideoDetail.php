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
				<div class="newsVideoBg">
					<div class="videoPos"></div>
				</div>
				<header>
					<h1>10岁男孩体重达57公斤得脂肪肝 肥胖原因大揭秘</h1>
					<p>来源：叶义言儿科  发布时间：2016/3/11      点击：18次</p>
				</header>
				<div class="content">
					<p>父母无时不刻在担忧孩子的生长发育状况。他们衡量生长发育的重要标准便是孩子的身高。当他们看到自己孩子的个子比同伴高出一些或者偏差不大，就很放心。反之，则惶恐不安，以为孩子的前途黯淡无光了。那么怎样科学看待孩子的高矮？怎本期我国儿童生长学权威、中国儿童骨龄评分法创制人、湘雅医院退休儿科专家、感动中国提名奖获得者、叶义言儿科首席专家叶义言教授为大家讲解怎样看孩子的高矮。</p>
				</div>
			</article>
			<div class="clearfix">
				<p class="fl font14">上一页：<a href="" title="家有“夜哭郎">家有“夜哭郎”</a></p>
				<p class="fr font14">下一页：<a href="" title="家有“夜哭郎">家有“夜哭郎”</a></p>
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
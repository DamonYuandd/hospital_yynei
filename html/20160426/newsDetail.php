<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta name="format-detection" content="telephone=no">
<title>叶义言儿科</title>
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/css.css" rel="stylesheet" type="text/css">
<script src="js/html5.js"></script>
<script src="js/libs/jquery-1.11.3.min.js"></script>

</head>
<body>


<?php include("header.php");?>
<div class="bannwrWarp h2">
	<a style="background: url(images/banner007.jpg) no-repeat center top;"></a>
</div>

<?php include("nav.php");?>

<div class="container w4">

	<div class="posNav ">
		<div class="fl">
			<a title="叶义言儿科">叶义言儿科</a>
			<span class="gt">&gt;</span>
			<a title="行业新闻">行业新闻</a>
		</div>
		<ul class="fr">
			<span class="icon w3 m1 icon008"></span>
			在线预约，享受7折优惠&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span class="icon w3 m1 icon007"></span>
			立即预约
		</ul>
	</div>

	<div class="newsWarp">
		<?php include("newsLeft.php");?>
		<div class="newsRight">
			<article id="articleContent">
				<header>
					<h1>10岁男孩体重达57公斤得脂肪肝 肥胖原因大揭秘</h1>
					<p>来源：叶义言儿科  发布时间：2016/3/11      点击：18次</p>
				</header>
				<div class="content">
					<p>10岁小朋友，身高1.38米，体重57公斤。在父母的陪同下到医院检查，检查结果为脂肪肝中期。那么，到底是什么原因让小男孩胖成这样呢?</p>
					<p><img src="images/pic010.jpg" alt=""></p>
					<p>一家三口都是“肉食动物”</p>
					<p>儿子中午在学校a营养午餐，两餐都在家里吃。</p>
					<p>早餐：拌面、煎饺、荷包蛋，妈妈喜欢做那种外面包着面粉的猪排，3个人都很爱，一个早晨要煎五六块。</p>
					<p>晚餐：各种肉，大家都爱吃红烧的肉，大块的，但不爱吃鱼虾。3个人胃口大，饭用盆子装，菜用大盆子装。有时候爸爸想吃鸡腿，妈妈要说儿子在长身体，让给儿子。这样，爸爸每次买烧鸡烧鸭都会双份。</p>
					<p>夜宵：爸妈有吃夜宵的习惯，儿子睡觉前也会要求来一点，爸爸喜欢吃速冻水饺，妈妈每周从超市搬回六七袋，3个人胃口好的时候，一餐吃两袋。</p>
					<p>小编不得不说，“这样吃不胖才怪呢。”小男孩的爸妈本来就属于肥胖体质(爸爸身高1.75米，体重138公斤;妈妈身高1.60米，体重102公斤)，小男孩本来就有肥胖基因，吃得和普通人一样也会胖，何况吃得比普通孩子还要多很多。</p>
				</div>
			</article>
			<div class="clearfix">
				<p class="fl font14">上一页：<a href="" title="家有“夜哭郎">家有“夜哭郎”</a></p>
				<p class="fr font14">下一页：<a href="" title="家有“夜哭郎">家有“夜哭郎”</a></p>
			</div>
		</div>
	</div>


</div>













<?php include("footer.php");?>


knowledge
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
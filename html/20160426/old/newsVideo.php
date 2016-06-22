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
			<a title="行业新闻">媒体采访</a>
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
			<div class="newsVideosearch">
				<form class="form">
					<input type="text" id="" name="" class="inputTxt">
					<input type="submit" id="" name="" class="inputBtn">
				</form>
			</div>
			<ul class="newsVideoList">
				<figure>
					<a href="newsVideoDetail.php" title="怎么样看孩子的高矮">
						<img src="images/pic011.jpg" alt="">
						<figcaption>怎样看孩子的高矮</figcaption>
						<time>2015-12-07</time>
					</a>
				</figure>
				<figure>
					<a href="newsVideoDetail.php" title="怎么样看孩子的高矮">
						<img src="images/pic011.jpg" alt="">
						<figcaption>怎样看孩子的高矮</figcaption>
						<time>2015-12-07</time>
					</a>
				</figure>
				<figure>
					<a href="newsVideoDetail.php" title="怎么样看孩子的高矮">
						<img src="images/pic011.jpg" alt="">
						<figcaption>怎样看孩子的高矮</figcaption>
						<time>2015-12-07</time>
					</a>
				</figure>
				<figure>
					<a href="newsVideoDetail.php" title="怎么样看孩子的高矮">
						<img src="images/pic011.jpg" alt="">
						<figcaption>怎样看孩子的高矮</figcaption>
						<time>2015-12-07</time>
					</a>
				</figure>
				<figure>
					<a href="newsVideoDetail.php" title="怎么样看孩子的高矮">
						<img src="images/pic011.jpg" alt="">
						<figcaption>怎样看孩子的高矮</figcaption>
						<time>2015-12-07</time>
					</a>
				</figure>
				<figure>
					<a href="newsVideoDetail.php" title="怎么样看孩子的高矮">
						<img src="images/pic011.jpg" alt="">
						<figcaption>怎样看孩子的高矮</figcaption>
						<time>2015-12-07</time>
					</a>
				</figure>
			</ul>

			<div class="pageNav">
				<a class="prev">上一页</a>
				<a href="" >1</a>
				<a href="" >2</a>
				<a href="" >3</a>
				<a href="" >4</a>
				<span class="active">5</span>
				<a href="" >6</a>
				<a href="" >7</a>
				<a href="" >8</a>
				<a href="" >9</a>
				<a class="next">下一页</a>
			</div>
		</div>
	</div>


</div>













<?php include("footer.php");?>


<script src="js/libs/jquery-1.11.3.min.js"></script>
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
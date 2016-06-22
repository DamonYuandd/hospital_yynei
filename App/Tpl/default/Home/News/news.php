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
			<ul class="newsList">
				<volist name="dataList" id="vo">
					<figure>
						<a href="{:U('News/show',array('id'=>$vo['id']))}" title="{$vo.title}">
							<p class="pic"><img src="{:imgPath($vo['image'])}" alt="{$vo.title}" width="124" height="124"></p>
							<div class="txt">
								<figcaption>{$vo.title|str_cut=0,40}</figcaption>
								<dl>
									<dd><span>●</span>{$vo.summary|str_cut=0,100}</dd>
									
								</dl>
								<time>{$vo.create_time|date="Y-m-d",###}</time>
							</div>
						</a>
					</figure>
				</volist>
			</ul>

			<div class="pageNav">
				{$pageBar}
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
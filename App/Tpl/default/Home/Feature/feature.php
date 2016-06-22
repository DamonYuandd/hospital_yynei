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
	<a style="background: url(__HOME__images/banner006.jpg) no-repeat center top;"></a>
</div>

<layout name="Home:Inc:nav" cache="0" />

<section class="featureSection1 sectionHeaderStyle2">
	<header class="header1">首席专家叶义言<i></i></header>
	<div class="container w4">
		<img src="__HOME__images/pic006.jpg" alt="">
		<p class="txt1">叶义言教授，80年代留学英国，国际儿童生长学开创人泰勒教授的唯一中国弟子，享受国务院专家特殊津贴、原湘雅医院儿科教授。曾公派留学英国伦敦大学儿童健康研究院儿童生长发育科和英国儿童医院内分泌科、应邀作为客座教授和研究员在香港大学玛丽医院进行生长研究多年，至今儿科临床40余年、儿童生长发育内分泌遗传代谢专科临床30余年，已为成千上万儿童的生长发育问题进行综合诊疗、效果良好，是群众欢迎的好医生。</p>
	</div>
	<div class="imgListWarp">
		<ul class="list container w4">
			<li><img src="__HOME__images/featureSection001.png" alt=""></li>
			<li><img src="__HOME__images/featureSection002.png" alt=""></li>
			<li><img src="__HOME__images/featureSection003.png" alt=""></li>
			<li><img src="__HOME__images/featureSection004.png" alt=""></li>
			<li><img src="__HOME__images/featureSection005.png" alt=""></li>
		</ul>
	</div>
	<p class="txt1 font16">叶义言教授从事儿科临床、教学、科研40余年，从事儿童生长发育和内分泌20<br>余年，科研、教学成果和论著颇多，还是一位颇有名气的科普作家。</p>
	<div class="timeLine">
		<i class="line"></i>
		<a class="arrowPrev"></a>
		<a class="arrowNext"></a>
		<div class="container w4 pr">
			<ul class="list">
				<volist name="datalist" id="vo" key="key">
					<li <eq name="key" value="1"> class="active"</eq> >
						<time>{$vo.title}</time>
						<span></span>
						<p class="pic"><img src="__PUBLIC__/images/news/m_{$vo.image}" alt=""></p>
						<em class="arrow"></em>
						<div class="txt">
							<strong>{$vo.title}</strong>{$vo.summary}
						</div>
					</li>
				</volist>
			</ul>
		</div>
	</div>
</section>



<section class="featureSection1 indexSection1 sectionHeaderStyle2">
	<header class="header2">精确诊查  综合治疗<i></i></header>

	<div class="txt1 font16"><br>叶义言儿科  呵护儿童健康成长<br>倡导精准诊查，综合治疗，以避免延误诊疗、滥用药品造成次生损害。</div>
	
	<div class="listWarp container w1">
		<dl>
			<dd class="num"><span>1</span></dd>
		  <dt class="title">精准骨龄</dt>
			<dd class="pic">
				<span class="maskPic"></span>
				<img src="__HOME__images/pic001.jpg" alt="精准骨龄">			</dd>
<dd class="txt">
				精准骨龄是反应儿童成熟程度的可靠客观指标，是儿童成长和儿科临床的基本评价
			</dd>
		</dl>
		<dl>
			<dd class="num"><span>2</span></dd>
		  <dt class="title">精准诊查</dt>
			<dd class="pic">
				<span class="maskPic"></span>
				<img src="__HOME__images/maskPic002.jpg" alt="精准诊查">			</dd>
<dd class="txt">
				通过精准的检查和诊断，做到循证辨病、对病施治。
			</dd>
		</dl>
		<dl>
			<dd class="num"><span>3</span></dd>
		  <dt class="title">综合治疗</dt>
			<dd class="pic">
				<span class="maskPic"></span>
				<img src="__HOME__images/maskPic003.jpg" alt="综合治疗">			</dd>
<dd class="txt">
				药物疗法和生长促进疗法，医疗和预防，接诊和科普，根据个人情况综合运用。
			</dd>
		</dl>
		<dl>
			<dd class="num"><span>4</span></dd>
		  <dt class="title">跟踪服务</dt>
			<dd class="pic">
				<span class="maskPic"></span>
				<img src="__HOME__images/maskPic004.jpg" alt="跟踪服务">			</dd>
<dd class="txt">
				儿童生长及其疾病的过程，须要跟踪监测和服务，互联网等信息化技术可提供便利条件。
			</dd>
		</dl>
		<dl>
			<dd class="num"><span>5</span></dd>
		  <dt class="title">在线初诊</dt>
			<dd class="pic">
				<span class="maskPic"></span>
				<img src="__HOME__images/maskPic005.jpg" alt="在线初诊">			</dd>
<dd class="txt">
				在线初诊可就孩子有关问题给家长以合理引导、有序就医，避免受折腾和乱花钱。
			</dd>
		</dl>
	</div>
</section>


<section class="featureSection1 sectionHeaderStyle2">
	<header class="header3">工作室掠影<i></i></header>
	<div class="container w4">
		<ul class="officePhotos">
			<figure>
				<img src="__HOME__images/pic008.jpg" alt="工作室门口">
				<figcaption>工作室门口</figcaption>
			</figure>
			<figure>
				<img src="__HOME__images/pic100.jpg" alt="工作室门口">
				<figcaption>接待处</figcaption>
			</figure>
			<figure>
				<img src="__HOME__images/pic101.jpg" alt="工作室门口">
				<figcaption>走廊</figcaption>
			</figure>
			<figure>
				<img src="__HOME__images/pic102.jpg" alt="工作室门口">
				<figcaption>治疗室</figcaption>
			</figure>
			<figure>
				<img src="__HOME__images/pic103.jpg" alt="工作室门口">
				<figcaption>骨龄检测室</figcaption>
			</figure>
			<figure>
				<img src="__HOME__images/pic104.jpg" alt="工作室门口">
				<figcaption>药房</figcaption>
			</figure>
			<figure>
				<img src="__HOME__images/pic105.jpg" alt="工作室门口">
				<figcaption>B超检测室</figcaption>
			</figure>
			<figure class="col2">
				<img src="__HOME__images/pic107.jpg" alt="工作室门口">
				<figcaption>儿童病房</figcaption>
			</figure>
			<figure class="col2">
				<img src="__HOME__images/pic108.jpg" alt="工作室门口">
				<figcaption>叶教授专家诊室</figcaption>
			</figure>
			<figure>
				<img src="__HOME__images/pic106.jpg" alt="工作室门口">
				<figcaption>诊室一和二</figcaption>
			</figure>
		</ul>
	</div>
	
</section>


<section class="featureSection2 sectionHeaderStyle2" >
	<a name="a"></a>
	<header class="header4">联系我们<i></i></header>
	<div class="container w4 info">
		<div class="warp">
			<div class="time item">
				<p class="left">
					<span class="icon w2 icon003"></span>
					门诊时间				</p>
				无节假日<br>
				 早上    08:00-12:00<br>
				 下午      2:00 - 5:00			</div>
	  <div class="tel item">
				<p class="left">
					<span class="icon w2 icon004"></span>
					预约服务热线				</p>
			{$system.telephone}			</div>
	  <div class="address item">
				<p class="left">
					<span class="icon w2 icon005"></span>
					工作室地址				</p>
			{$system.address}			</div>
	  </div>

		<div class="mapWarp">
			<div id="map" class="map"><img src="__HOME__images/maps.jpg"></div>
			<div class="busListWarp">
				<div class="menuBox">
					公交线路
					<ul>
						<li class="active">省妇幼保健院站</li>
						<li>湖南日报站</li>
					</ul>
				</div>
				<div class="busList">
					<ul class="con">
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="num">
									<span>2</span>路
								</td>
								<td class="txt">北辰三角洲</td>
								<td class="arrow"><img src="__HOME__images/icon/icon006.png"alt="方向"></td>
								<td class="txt">桔园</td>
							</tr>
						</table>
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="num">
									<span>358</span>路
								</td>
								<td class="txt">世界之窗 </td>
								<td class="arrow"><img src="__HOME__images/icon/icon006.png"alt="方向"></td>
								<td class="txt">中南大学壹号院</td>
							</tr>
						</table>
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="num">
									<span>2</span>路
								</td>
								<td class="txt">汽车东站</td>
								<td class="arrow"><img src="__HOME__images/icon/icon006.png"alt="方向"></td>
								<td class="txt">汽车西站</td>
							</tr>
						</table>
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="num">
									<span>358</span>路
								</td>
								<td class="txt">保利.香槟国际</td>
								<td class="arrow"><img src="__HOME__images/icon/icon006.png"alt="方向"></td>
								<td class="txt"> 新开铺</td>
							</tr>
						</table>
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="num">
									<span>2</span>路
								</td>
								<td class="txt">汽车西站</td>
								<td class="arrow"><img src="__HOME__images/icon/icon006.png"alt="方向"></td>
								<td class="txt">泉塘小区</td>
							</tr>
						</table>
					</ul>
					<ul class="con" style="display: none;">
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="num">
									<span>9</span>路
								</td>
								<td class="txt">金霞苑总站</td>
								<td class="arrow"><img src="__HOME__images/icon/icon006.png"alt="方向"></td>
								<td class="txt">长沙火车站</td>
							</tr>
						</table>
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="num">
									<span>109</span>路
								</td>
								<td class="txt">陈家湖  </td>
								<td class="arrow"><img src="__HOME__images/icon/icon006.png"alt="方向"></td>
								<td class="txt">望岳小区</td>
							</tr>
						</table>
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="num">
									<span>115</span>路
								</td>
								<td class="txt">四方坪</td>
								<td class="arrow"><img src="__HOME__images/icon/icon006.png"alt="方向"></td>
								<td class="txt">高家冲</td>
							</tr>
						</table>
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="num">
									<span>116</span>路
								</td>
								<td class="txt">秀峰公园（山语城）</td>
								<td class="arrow"><img src="__HOME__images/icon/icon006.png"alt="方向"></td>
								<td class="txt"> 万芙路</td>
							</tr>
						</table>
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="num">
									<span>128</span>路
								</td>
								<td class="txt">周南中学</td>
								<td class="arrow"><img src="__HOME__images/icon/icon006.png"alt="方向"></td>
								<td class="txt">先锋厅</td>
							</tr>
						</table>
					</ul>
				</div>
			</div>
		</div>
	</div>

</section>



<layout name="Home:Inc:footer" cache="0" />
<script>
$(function(){



	$('.timeLine .list li').click(function(){
		$('.timeLine .list li').removeClass('active');
		$(this).addClass('active');
	});

	var width = $('.timeLine .list li').length * 178;
	$('.timeLine .list').css('width', width);

	$('.arrowPrev').mouseover(function(){
		$('.timeLine .list').css('margin-left', 0);
	});
	$('.arrowNext').mouseover(function(){
		$('.timeLine .list').css('margin-left', -1068);
	});


	$('.busListWarp .menuBox li').click(function(){
		var index = $(this).index();

		$('.busListWarp .menuBox li').removeClass('active');
		$(this).addClass('active');

		$('.busListWarp .busList .con').hide();

		$('.busListWarp .busList .con').eq(index).show();

	});

})
</script>
</body>
</html>
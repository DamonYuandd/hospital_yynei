<!doctype html>
<html>
<head>
<layout name="Home:Inc:script" cache="0" />
<link href="__HOME__css/normalize.css" rel="stylesheet" type="text/css">
<link href="__HOME__css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="__HOME__css/css.css" rel="stylesheet" type="text/css">
<script src="__HOME__js/html5.js"></script>
<script src="__HOME__js/libs/jquery-1.11.3.min.js"></script>

</head>
<body>

<layout name="Home:Inc:header" cache="0" />

<div class="bannwrWarp h2">
	<a style="background: url(__HOME__images/banner008.jpg) no-repeat center top;"></a>
</div>
<layout name="Home:Inc:nav" cache="0" />


<div class="caseWarp">
	<h1 class="header"></h1>
	<div class="caseCon left">
		<div class="box">
			<h4 class="title">长高23.8cm不是梦</h4>
			<div class="txt">
				陆民从小生长发育落后，外生殖器未开始发育。曾在多地反复就医无果。2005年来叶教授就诊，身高151.3cm，骨龄11.8岁。经全面检查，确诊为一种骨发育不全疾病，基因突变所致。治疗9个月后陆民长高了8.7厘米，继续治疗9个月发育转为正常便停药，在随后的3年多里持续长高至175.1cm，外生殖器发育达到成人型。最近随访，已结婚生育，有职业工作。
				<p>
				<strong class="red font14">叶义言解读：</strong><br>
				对于陆民的治疗，是完全没有用过生长激素的，因为小民不是因为生长激素缺乏引起的矮小。因此，家长一定不要盲目给孩子使用增高药，造成矮小的原因有很多，一定要查
				</p>
			</div>
		</div>
	</div>
	<div class="caseCon right">
		<div class="box">
			<h4 class="title">等着蹿一蹿，痛苦一辈子</h4>
			<div class="txt">
				小丽，14岁，骨龄已成熟，身高154.5cm。父高171cm，母高162cm，遗传高度161.5cm。一直以来，家长抱着孩子“以后会长”的观望态度，去年10月17日，小丽再次来做生长发育检查后发现，她已经错过了治疗最佳时期，再无长高可能。
				<br><br><br>
				<p>
				<strong class="red font14">叶义言解读：</strong><br>
				父母高，子女不一定高，因为孩子最终身高，7分在先天，3分在后天，后天不给力，高度打三折。因此，要定期监测、抓紧生长时期，不能盲目等后长，等来的常常是后悔。
				</p>
			</div>
		</div>
	</div>
</div>

<div class="ta-c"><img src="__HOME__images/childCase001.jpg" alt=""></div>

<div class="childCaseNewsWarp">
	<div class="warp">
		<ul class="menu">
			<a href="javascript:;" title="矮小" class="active loadNewsList" data-type="1">矮小</a>
			<a href="javascript:;" title="肥胖" class="loadNewsList" data-type="2">肥胖</a>
			<a href="javascript:;" title="性早熟" class="loadNewsList" data-type="3">性早熟</a>
			<a href="javascript:;" title="抵抗力差" class="loadNewsList" data-type="4">抵抗力差</a>
		</ul>
		<div id="childCaseNewsList">
			<div class="spinner" id="spinner1">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
		<div class="childCaseContent">
			<div class="spinner" id="spinner2">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
			<div class="leftWarp" style="width: 100%;">
				<a href="{:U('Childcase/newsVideoDetail',array('id' => $firstArt['id']))}" title="{$firstArt.title}">
					<img src="{:imgPath($firstArt['image'])}" alt="" class="img" style="width: 100%;">
					<span class="bg"></span>
					<h4 class="title">{$firstArt['title']|str_cut=0,30}</h4>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="container w4">
	<a href="{:U('Knowledge/knowledgeDetail',array('id'=>137))}">
		<div class="misunderstanding">
			<p>
				多数家长存在认识误区，孩子身高矮小时，总是抱着“等一等”的态度，可是就因为这种态度，耽误了孩子增高的最佳时期，等到情况严重了，再带孩子治疗时，为时已晚。"早检查、早帮助"，别让孩子痛一辈子.
				<br><br>
				课程特点
				<br><br>
				针对孩子个体情况，运用耗能和补能的量化关系，采取运动、营养、心理等综合措施训练。课后进行综合测评，全面分析孩子的生长状态和身体素质。
			</p>
		</div>
	</a>
</div>

<layout name="Home:Inc:footer" cache="0" />
<layout name="Home:Inc:childCase" cache="0" />
</body>
</html>
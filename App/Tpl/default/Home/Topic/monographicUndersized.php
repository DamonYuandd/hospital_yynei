<!doctype html>
<html>
<head>
<layout name="Home:Inc:script" cache="0" />
<link href="__HOME__css/normalize.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="__HOME__css/skippr/jquery.skippr.css">
<link href="__HOME__css/css.css" rel="stylesheet" type="text/css">
<link href="__HOME__css/monographic.css" rel="stylesheet" type="text/css">
<script src="__HOME__js/html5.js"></script>
<script src="__HOME__js/libs/jquery-1.11.3.min.js"></script>

</head>
<body>

<layout name="Home:Inc:header" cache="0" />
<div class="undersized001"><a name="pop1"></a></div>
<div class="undersized002"><a name="pop2" href="{:U('Diagnosis/index')}" style="display: block;
    width: 300px;
    height: 80px;
    float: left;
    padding: 380px 0 0 700px;"></a></div>
<div class="undersized003"><a name="pop3"></a></div>
<div class="undersized004"></div>
<div class="undersized005" id="pop6"><a name="pop4" href="{:U('Knowledge/knowledgeDetail',array('id' => 137))}" style="    display: block;
    float: left;
    width: 900px;
    height: 320px;
    margin: 300px 0 0 380px;"></a></div>
<a href="{:U('/Feature/index')}#a">
<div class="undersized006"></div>
</a>
<div class="undersized007"></div>
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
<div class="precocious007">
	<div class="container">
	<ul class="otherMonographicList1 ">
		<volist name="ads" id="vo">
			<li><a href="{$vo.url}" title="{$vo.title}"><img src="{:imgPath($vo['image'],'advert')}" alt="{$vo.title}"></a></li>
		</volist>
	</ul>
	</div>
</div>

<div class="monographicAside">
	<ul class="nav">
		<a href="#pop1" title="什么是矮小"></a>
		<a href="#pop2" title="五大误区"></a>
		<a href="#pop3" title="影响因素"></a>
		<a href="#pop4" title="专业治疗"></a>
		<a href="{:U('Index/index')}" title="返回首页"></a>
		<a href="#" title="" class="top"></a>
	</ul>
</div>
<layout name="Home:Inc:footer" cache="0" />

<layout name="Home:Inc:childCase" cache="0" />
</body>
</html>
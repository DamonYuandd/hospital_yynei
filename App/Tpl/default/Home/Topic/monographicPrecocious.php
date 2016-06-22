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


<div class="precocious001"></div>
<div class="precocious002"><a name="pop1" href="{:U('Knowledge/knowledgeDetail',array('id' => 135))}" style="width:100%;height:100%;display:block"></a></div>
<div class="precocious003"><a name="pop2"></a></div>
<div class="precocious004"><a name="pop3"></a></div>
<div class="precocious005"><a name="pop4" href="{:U('Feature/index')}#a" style="width:100%;height:100%;display:block"></a></div>
<div class="precocious006" id="pop8">
	<a href="{:U('Knowledge/knowledgeDetail',array('id' => 137))}" style="width:100%;height:100%;display:block"></a>
</div>
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
<div class="monographicAside precociousBg">
	<ul class="nav">
		<a href="#pop1" title="什么是性早熟"></a>
		<a href="#pop2" title="形成原因"></a>
		<a href="#pop3" title="有何危害"></a>
		<a href="#pop4" title="如何预防"></a>
		<a href="{:U('Index/index')}" title="返回首页"></a>
		<a href="#" title="" class="top"></a>
	</ul>
</div>
<layout name="Home:Inc:footer" cache="0" />
<layout name="Home:Inc:childCase" cache="0" />
</body>
</html>
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

<div class="boneage001"></div>
<layout name="Home:Inc:nav" cache="0" />
<a href="{:U('Diagnosis/index')}">
<div class="boneage002"></div>
</a>
<div class="boneage003"></div>
<div class="boneage004"></div>
<div class="boneage005"></div>

<div class="boneage006">
	<div class="container w4">
		<a href="{:U('Knowledge/knowledgeDetail',array('id' => 137))}">
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
</div>


<div class="boneage007">
	<div class="container">
	<a href="{:U('Diagnosis/index')}" style="display: block;height: 60px;width: 200px;padding: 30px 0 0 500px; float: left;">&nbsp;&nbsp;&nbsp;</a>
	<ul class="boneageList">
		<volist name="ads" id="vo">
			<li><a href="{$vo.url}" title="{$vo.title}"><img src="{:imgPath($vo['image'],'advert')}" alt="{$vo.title}"></a></li>
		</volist>
	</ul>
	</div>
</div>

<!-- <div class="monographicAside">
	<ul class="nav">
		<a href="" title=""></a>
		<a href="" title=""></a>
		<a href="" title=""></a>
		<a href="" title=""></a>
		<a href="index.php" title="返回首页"></a>
		<a href="#" title="" class="top"></a>
	</ul>
</div> -->
<layout name="Home:Inc:footer" cache="0" />
</body>
</html>
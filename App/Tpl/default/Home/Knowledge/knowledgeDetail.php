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
	<a style="background: url(__HOME__images/banner009.jpg) no-repeat center top;"></a>
</div>
<layout name="Home:Inc:nav" cache="0" />


<div class="container w4">
	<layout name="Home:Knowledge:knowledgeHeader" cache="0" />

	<div class="posNav">
		<div class="fl">
			<a title="叶义言儿科" href="{:U('Index/index')}">叶义言儿科</a>
			<span class="gt">&gt;</span>
			<a title="育儿宝典" href="{:U('Knowledge/index')}">育儿宝典</a>
			<span class="gt">&gt;</span>
			<a title="{$obj['cate']}" href="{:U('Knowledge/index',array('cid'=>$cid))}">{$obj['cate']}</a>
		</div>
		<layout name="Home:Inc:fr" cache="0" />
	</div>

	<div class="knowledgeBottom">
		<div class="listWarp">
			<article id="articleContent" class="parentionDetail">
				<header>
					<h1>{$obj.title}</h1>
					<p>
						<span>{$obj.create_time|date="Y/m/d",###}</span>
						<span>{$obj.author|default="叶义言儿科工作室"}</span>
						<span><if condition="$obj['tag'] neq ''">文本Tab标签：<?php echo str_replace(',','/',$obj['tag']);?></if></span>
						<span>
							<em class="icon w1 m4 icon018"></em>
							阅读（{$obj.click_count}）
						</span>
						<layout name="Home:Inc:share" cache="0" />
						
					</p>
				</header>
				<div class="content">
					<notempty name="obj['video']">
						{:videoPlayer($obj['video'],730,500)}
					</notempty>
					{$obj.content|htmlspecialchars_decode}
				</div>
			</article>
		</div>
		<layout name="Home:Knowledge:knowledgeAside" cache="0" />
		
	</div>
</div>
<layout name="Home:Knowledge:knowledgeBottom" cache="0" />
<layout name="Home:Inc:footer" cache="0" />
</body>
</html>
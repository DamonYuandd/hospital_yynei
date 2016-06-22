<!doctype html>
<html>
<head>
<layout name="Home:Inc:script" cache="0" />
<link href="__HOME__css/normalize.css" rel="stylesheet" type="text/css">
<link href="__HOME__css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="__HOME__css/css.css" rel="stylesheet" type="text/css">
<script src="__HOME__js/html5.js"></script>
<script src="__HOME__js/libs/jquery-1.11.3.min.js"></script>
<style type="text/css">
.knowledgeList figcaption .icon017{
	    background: url(__HOME__images/icon/icon1000.png) no-repeat;
	    font-size: 12px;
	    color: white; 
	    font-weight: bold;    
	    font-weight: 400;
    	padding: 0 0 0px 4px;
}
</style>
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
			<a title="{$cate}" href="{:U('Knowledge/index',array('cid'=>$cid))}">{$cate}</a>
		</div>
		<layout name="Home:Inc:fr" cache="0" />
	</div>

	<div class="knowledgeBottom">
		<div class="listWarp">
			<ul class="knowledgeList">
				<volist name="dataList" id="vo">
					<figure>
						<a href="{:U('Knowledge/knowledgeDetail',array('id'=>$vo['id']))}" title="{$vo.title}">
							<figcaption>
								<span class="iconRact"></span>
								{$vo.title|str_cut=0,30}
								<notempty name="vo['sub_category']">
									<span class="icon017">{:echoSubTitle($vo['sub_category'])}</span>
								</notempty>
							</figcaption>
							<div class="txtBox">
								<notempty name="vo['image']">
									<div class="pic">
										<img src="{:imgPath($vo['image'])}" alt="{$vo.title}" class="img">
									</div>
								</notempty>
								<div class="txt" <empty name="vo['image']">style="margin:0px;"</empty>>
									{$vo.summary|str_cut=0,100}
								</div>
							</div>
							<div class="clearfix">
								<time class="fl">{$vo.create_time|date="Y-m-d",###}</time>
								<span class="fr">阅读量({$vo.click_count})</span>
							</div>
						</a>
						<i class="boxShadow"></i>
					</figure>
				</volist>
			</ul>
			<div class="pageNav">
				{$pageBar}
			</div>
		</div>
		<layout name="Home:Knowledge:knowledgeAside" cache="0" />
		
	</div>
</div>
<layout name="Home:Knowledge:knowledgeBottom" cache="0" />

<layout name="Home:Inc:footer" cache="0" />


</body>
</html>
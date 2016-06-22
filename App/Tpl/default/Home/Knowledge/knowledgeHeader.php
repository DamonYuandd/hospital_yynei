<div class="knowledgeHeader">
	<ul class="category">
		<li><a href="{:U('Knowledge/index',array('cid' => 1519))}" title="矮小" <eq name="cid" value="1519">class="active"</eq>>矮小</a></li>
		<li><a href="{:U('Knowledge/index',array('cid' => 1520))}" title="肥胖" <eq name="cid" value="1520">class="active"</eq>>肥胖</a></li>
		<li><a href="{:U('Knowledge/index',array('cid' => 1521))}" title="性早熟" <eq name="cid" value="1521">class="active"</eq>>性早熟</a></li>
		<li class="last"><a href="{:U('Knowledge/index',array('cid' => 1522))}" title="体抗力差" <eq name="cid" value="1522">class="active"</eq>>抵抗力差</a></li>
	</ul>
	<div class="formWarp">
		<div class="searchForm pr">
			<form  action="" method="get">
				<input type="text" id="" name="key" class="inputTxt" placeholder="请输入关键词或问题">
				<input type="submit" id="" name="" value="搜索" class="searchSubmit">
			</form>
		</div>
		<p class="keyword">
			<volist name="tags" id="vo">
				<a href="{:U('Knowledge/index/cid/'.$cid.'/key/'.$vo['title'])}" title="{$vo.title}">{$vo.title}</a>
			</volist>
		</p>
	</div>
	<div class="right">
		<img src="__HOME__images/pic012.png" alt="" class="img">
		<p class="num"><span>{$system.person}</span>人</p>
		<p>已通过叶义言儿科解决孩子生长问题</p>
	</div>
</div>
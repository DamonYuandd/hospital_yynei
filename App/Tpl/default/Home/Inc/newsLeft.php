<div class="newsLeft">
	<ul class="category">
		<volist name="cate" id="vo">
			<a href="{:U('News/index',array('cid'=>$vo['id']))}" title="{$vo.title}" <if condition="($vo['id'] eq $_GET['cid']) OR ($vo['id'] eq $obj['category_id']) "> class="active" </if> >{$vo.title|str_cut=0,20}</a>
		</volist>
	</ul>

	<h4 class="font16">精选</h4>
	<ul class="choiceNews">
		<volist name="siftList" id="vo" offset="0" length="2">
			<figure>
				<a href="{:U('News/show',array('id' => $vo['id']))}" title="{$vo.title}">
					<figcaption>{$vo.title|str_cut=0,20}</figcaption>
					<img src="{:imgPath($vo['image'])}" alt="" width="100%">
				</a>
			</figure>
		</volist>
	</ul>
</div>
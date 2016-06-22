<ul>
	<volist name="data" id="vo">
		<figure>
			<a href="{:U('Knowledge/knowledgeDetail',array('id'=>$vo['id']))}" title="{$vo.title}">
				<img src="{:imgPath($vo['image'])}" alt="{$vo.title}" class="img">
				<figcaption>{$vo.title|str_cut=0,12}</figcaption>
			</a>
		</figure>
	</volist>
</ul>
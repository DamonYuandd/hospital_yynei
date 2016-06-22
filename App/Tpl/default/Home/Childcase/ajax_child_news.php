<div class="spinner">
	<div class="bounce1"></div>
	<div class="bounce2"></div>
	<div class="bounce3"></div>
</div>
<section class="listWarp">
	<header>{$tips}</header>
	<ul class="list">
		<volist name="data" id="vo">
			<li>
				<span>{$vo.click_count} 次</span>
				<a href="{:U('/Childcase/newsVideoDetail',array('id'=>$vo['id']))}" title="{$vo.title}" data-id="{$vo.id}" class="newsDetail">{$vo.title|str_cut=0,16}</a>
			</li>
		</volist>
	</ul>
</section>
<div class="pageNavWarp">
	<input type="hidden" id="nowPage" value="{$nowPage}" />
	<input type="hidden" id="total" value="{$total}" />
	<a href="javascript:;" class="loadNewsList prev" data-type="" data-page="-1">上一页</a>
	<ul class="pageWarp">
		<volist name="pageShow" id="vo">
			<a href="javascript:;" class="loadNewsList" data-type="" data-page="{$vo}">{$vo+1}</a>
		</volist>
	</ul>
	<a href="javascript:;" class="loadNewsList next" data-type="" data-page="+1">下一页</a>
</div>
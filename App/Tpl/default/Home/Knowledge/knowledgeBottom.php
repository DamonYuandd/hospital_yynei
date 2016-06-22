<div class="topicWarp">
	<div class="container w4">
		<div class="knowledgeBottom">
			<div class="listWarp">
				<section class="asideSection">
					<header>
						<h4 class="fl">妈妈关心话题</h4>
						<div class="fr"><a href="javascript:void(0)" id="changeGroup">换一组</a></div>
					</header>
					<div class="topicList" id="momList">
						
						
					</div>
				</section>
			</div>
			<div class="asideWarp">
				<section class="asideSection">
					<header>
						<h4 class="fl">欢迎关注</h4>
						<div class="fr"></div>
					</header>
					<div class="clearfix">
						<img src="__HOME__images/pic016.jpg" alt="" class="fl">
						<p class="m0">
							&nbsp;&nbsp;&nbsp;&nbsp;扫一扫，添加叶义言<br>
							&nbsp;&nbsp;&nbsp;&nbsp;官方微信号，<br>
							&nbsp;&nbsp;&nbsp;&nbsp;看叶教授聊成长观点
						</p>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<script>
$(function(){
	var url = '{:U('Index/momTelk')}';
	var data = {"type":1};
	momList();
	$('#changeGroup').click(function(){
		momList();
	})
	function momList(){
		$('#spinner1').show();
		$("#momList").load(url, data, function(response, status, xhr){
			if(status == 'success'){
				$("#momList").html('');
				$("#momList").html(response);
				$('#spinner1').hide();
			}else {
				//alert('通讯有误！！');
				$('#spinner1').hide();
	
			}
	
		});
	}
})
</script>
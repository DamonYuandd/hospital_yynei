<?
$id = $_GET['id'];
?>
<nav id="nav" class="container w1">
	<ul>
		<li index=0>
			<a href="index.php?id=1" title="叶义言儿科" class="<?php if ($id=="1") { echo "active"; }?>">
				<h4>叶义言儿科</h4>
				<span>Pediatrics</span>
			</a>
		</li>
		<li index=1>
			<a href="feature.php?id=2" title="特色诊疗" class="<?php if ($id=="2") { echo "active"; }?>">
				<h4>特色诊疗</h4>
				<span>Feature</span>
			</a>
		</li>
		<li index=2>
			<a href="child_case.php?id=3" title="成长之星" class="<?php if ($id=="3") { echo "active"; }?>">
				<h4>成长之星</h4>
				<span>Child Case</span>
			</a>
		</li>
		<li index=3>
			<a href="knowledge.php?id=4" title="育儿宝典" class="<?php if ($id=="4") { echo "active"; }?>">
				<h4>育儿宝典</h4>
				<span>Knowledge</span>
			</a>
		</li>
		<li index=4>
			<a href="online.php?id=5" title="在线初诊" class="<?php if ($id=="5") { echo "active"; }?>">
				<h4>在线初诊</h4>
				<span>Diagnosis</span>
			</a>
		</li>
		<li index=5>
			<a href="reservation.php?id=6" title="预约就诊" class="<?php if ($id=="6") { echo "active"; }?>">
				<h4>预约就诊</h4>
				<span>Appointment</span>
			</a>
		</li>
		<li index=6>
			<a href="feature.php?id=2&#a">
				<h4>来访路线</h4>
				<span>Route</span>
			</a>
		</li>
		<li class="bg">
			<a class="active"></a>
		</li>
	</ul>
</nav>
<script>
$(function(){
	var navMenu = 152;
	
	var initIndex = $('#nav li a.active').parent().attr('index');
	var initLeft = initIndex * navMenu;
	$('#nav li.bg').css('left', initLeft);
	console.log(initIndex);

	$('#nav li').mouseover(function(){
		var index = $(this).index();
		var left = navMenu * index;
		$('#nav li.bg').css('left', left);

		$('#nav li a').removeClass('active');
		$(this).find('a').addClass('active');
	});

	$('#nav').mouseleave(function(){
		$('#nav li.bg').css('left', initLeft);
		$('#nav li a').removeClass('active');
		$(this).find('a').eq(initIndex).addClass('active');
	});
})
</script>
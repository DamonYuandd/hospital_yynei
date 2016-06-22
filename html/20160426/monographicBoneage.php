<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta name="format-detection" content="telephone=no">
<title>叶义言儿科</title>
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/skippr/jquery.skippr.css">
<link href="css/css.css" rel="stylesheet" type="text/css">
<link href="css/monographic.css" rel="stylesheet" type="text/css">
<script src="js/html5.js"></script>
<script src="js/libs/jquery-1.11.3.min.js"></script>

</head>
<body>


<?php include("header.php");?>
<div class="boneage001"></div>
<?php include("nav.php");?>
<div class="boneage002"></div>
<div class="boneage003"></div>
<div class="boneage004"></div>
<div class="boneage005"></div>

<div class="boneage006">
	<div class="container w4">
		<div class="misunderstanding">
			<p>
				多数家长存在认识误区，孩子身高矮小时，总是抱着“等一等”的态度，可是就因为这种态度，耽误了孩子增高的最佳时期，等到情况严重了，再带孩子治疗时，为时已晚。"早检查、早帮助"，别让孩子痛一辈子.
				<br><br>
				课程的点
				<br><br>
				针对孩子个体情况，运用耗能和补能的量化关系，采取运动、营养、心理等综合措施训练。课后进行综合测评，全面分析孩子的生长状态和身体素质。
			</p>
		</div>
	</div>
</div>


<div class="boneage007">
	<div class="container">
	<ul class="boneageList">
		<li><a href="monographicUndersized.php" title=""><img src="images/monographic/boneageList001.jpg" alt=""></a></li>
		<li><a href="monographicObesity.php" title=""><img src="images/monographic/boneageList002.jpg" alt=""></a></li>
		<li><a href="monographicPrecocious.php" title=""><img src="images/monographic/boneageList003.jpg" alt=""></a></li>
		<li><a href="monographicBoneage.php" title=""><img src="images/monographic/boneageList004.jpg" alt=""></a></li>
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
<?php include("footer.php");?>







<script>
$(function(){



	$(document).on('click', '.loadNewsList', function(){


		var type = $(this).attr('data-type'),   //获取类型
			page = $(this).attr('data-page');   //获取分页

			//判断是否get到分页，如果没有，即点击的是大类，则进行状态切换。否则就是分类，不进行状态切换
			if(!page){
				$('.childCaseNewsWarp .menu a').removeClass('active');
				$(this).addClass('active');
			}

			loadNewsListFn(type, page);

	})

	$(document).on('click', '.newsDetail', function(){


		var id = $(this).attr('data-id');

		$('#spinner2').show();

		$.ajax( {  
		    url:'',// 跳转到 action  
		    data:{  
		             id : id
		    },  
		    type:'post',  
		    cache:false,  
		    dataType:'json',  
		    success:function(data) {  
		         
		     },  
		     error : function() {  
		          
		     }  
		});



	})




	loadNewsListFn();



})

function loadNewsListFn(typeNum, pageNum){


	var type = typeNum || 1,                //获取类型
		url = 'ajax_child_news.php',        //指向页面
		page = pageNum || 0,                //获取分类
		data = {type:type};                 //data


	//加载提示	
	$('#spinner1').show();

	$("#childCaseNewsList").load(url, data, function(response, status, xhr){

		if(status == 'success'){

			$("#childCaseNewsList").html('');
			$("#childCaseNewsList").html(response);
			$('#spinner1').hide();

		}else {

			alert('通讯有误！！');
			$('#spinner1').hide();

		}

	});
}
</script>
</body>
</html>
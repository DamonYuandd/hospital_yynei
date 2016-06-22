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
<div class="undersized001"><a name="pop1"></a></div>
<div class="undersized002"><a name="pop2"></a></div>
<div class="undersized003"><a name="pop3"></a></div>
<div class="undersized004"></div>
<div class="undersized005"><a name="pop4"></a></div>
<div class="undersized006"></div>
<div class="undersized007"></div>
<div class="childCaseNewsWarp">
	<div class="warp">
		<ul class="menu">
			<a href="javascript:;" title="矮小" class="active loadNewsList" data-type="1">矮小</a>
			<a href="javascript:;" title="肥胖" class="loadNewsList" data-type="2">肥胖</a>
			<a href="javascript:;" title="性早熟" class="loadNewsList" data-type="3">性早熟</a>
			<a href="javascript:;" title="抵抗力差" class="loadNewsList" data-type="4">抵抗力差</a>
		</ul>
		<div id="childCaseNewsList">
			<div class="spinner" id="spinner1">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
		<div class="childCaseContent">
			<div class="spinner" id="spinner2">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
			<div class="leftWarp">
				<a href="" title="">
					<img src="images/pic017.jpg" alt="" class="img">
					<span class="bg"></span>
					<h4 class="title">标题</h4>
				</a>
			</div>
			<div class="rightWarp">
				<img src="images/pic018.jpg" alt="" class="img">
			</div>
		</div>
	</div>
</div>
<div class="precocious007">
	<div class="container">
	<ul class="otherMonographicList1 ">
		<li><a href="monographicUndersized.php" title=""><img src="images/monographic/otherMonographicListPic001.jpg" alt=""></a></li>
		<li><a href="monographicPrecocious.php" title=""><img src="images/monographic/otherMonographicListPic002.jpg" alt=""></a></li>
		<li><a href="monographicObesity.php" title=""><img src="images/monographic/otherMonographicListPic003.jpg" alt=""></a></li>
		<li><a href="monographicBoneage.php" title=""><img src="images/monographic/otherMonographicListPic004.jpg" alt=""></a></li>
	</ul>
	</div>
</div>

<div class="monographicAside">
	<ul class="nav">
		<a href="#pop1" title="什么是矮小"></a>
		<a href="#pop2" title="五大误区"></a>
		<a href="#pop3" title="影响因素"></a>
		<a href="#pop4" title="专业治疗"></a>
		<a href="index.php" title="返回首页"></a>
		<a href="#" title="" class="top"></a>
	</ul>
</div>

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
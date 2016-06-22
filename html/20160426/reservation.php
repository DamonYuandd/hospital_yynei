<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta name="format-detection" content="telephone=no">
<title>叶义言儿科</title>
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="css/css.css" rel="stylesheet" type="text/css">
<style type="text/css">
#ui-datepicker-div {
	width: 318px;
}

#ui-datepicker-div.ui-datepicker table { margin: 0; }

</style>
<script src="js/html5.js"></script>
<script src="js/libs/jquery-1.11.3.min.js"></script>

</head>
<body>


<?php include("header.php");?>
<div class="bannwrWarp h2">
	<a style="background: url(images/banner011.jpg) no-repeat center top;"></a>
</div>

<?php include("nav.php");?>

<section class="process">
	<header class="ta-c"><h1>预约流程</h1></header>
	<div class="container w4">
		<div class="processIcon">
			<p>
				<span class="icon w4 icon009"></span>
				网上预约
			</p>
			<i class="arrow"></i>
			<p>
				<span class="icon w4 icon010"></span>
				电话回访
			</p>
			<i class="arrow"></i>
			<p>
				<span class="icon w4 icon011"></span>
				短信确认
			</p>
			<i class="arrow"></i>
			<p>
				<span class="icon w4 icon012"></span>
				前往就诊
			</p>
		</div>
	</div>
</section>




<div class="container w4">

	<form onSubmit="return formCheck();">
	<section class="selsectTimeWarp">
		<header>
			<span class="icon w5 m2 icon014"></span>
			选择就诊时间
		</header>
		<div class="clearfix">
			<div class="calendarWarp">
				<p class="txt">选择预约时间</p>
				<div id="datepicker"></div>
				<input type="hidden" id="datepickerValue" name="">
			</div>
			<div class="reservationTableWarp">
				<table width="100%" border="0" cellspacing="1" cellpadding="1">
				  <tr>
				    <th class="first">
				    	当前周<br>
				    	<span>(3.09-3.15）</span>
				    </th>
				    <th>星期一</th>
				    <th>星期二</th>
				    <th>星期三</th>
				    <th>星期四</th>
				    <th>星期五</th>
				    <th>星期六</th>
				    <th>星期日</th>
				  </tr>
				  <tr>
				    <td>上午</td>
				    <td><div>预约</div></td>
				    <td><div>预约</div></td>
				    <td><div>预约</div></td>
				    <td><div>预约</div></td>
				    <td><div>预约</div></td>
				    <td><div>预约</div></td>
				    <td><div class="off">已约满</div></td>
				  </tr>
				  <tr>
				    <td>下午</td>
				    <td><div>预约</div></td>
				    <td><div>预约</div></td>
				    <td><div>预约</div></td>
				    <td><div>预约</div></td>
				    <td><div>预约</div></td>
				    <td><div>预约</div></td>
				    <td><div>预约</div></td>
				  </tr>

				</table>
			</div>
		</div>
	</section>


	<div class="formWarp formBorder">
		<section class="sectionHeaderStyle3 fomrWidth1">
			<header>
				<span class="icon w2 m3 icon015"></span>
				孩子基本信息
			</header>
			<div class="form">
				<div class="row">
					<div class="col-6">
						<div class="inputWarp">
							<label class="label">Name 姓名：<span>*</span></label>
							<div class="inputItem">
								<div class="inputBox">
									<input type="text" id="name" name="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="inputWarp">
							<label class="label">Gender 性别：<span>*</span></label>
							<div class="inputItem">
								<div class="inputBox">
									<div class="row">
										<div class="col-6">
											<label class="gender active" for="gender1">
												男
												<input type="radio" id="gender1" name="gender" value="1" checked>
											</label>
										</div>
										<div class="col-6">
											<label class="gender" for="gender2">
												女
												<input type="radio" id="gender2" name="gender" value="2">
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="inputWarp">
							<label class="label">Date 出生日期：<span>*</span></label>
							<div class="inputItem">
								<div class="inputBox">
									<input type="text" id="date_1" name="" readonly>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="inputWarp">
							<label class="label">Height 身高：<span>*</span></label>
							<div class="inputItem">
								<div class="inputBox">
									<input type="text" id="height" name="">
									<span class=unit>CM</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="inputWarp">
							<label class="label">Weight 体重：<span>*</span></label>
							<div class="inputItem">
								<div class="inputBox">
									<input type="text" id="width" name="">
									<span class=unit>KG</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="inputWarp">
							<label class="label">ID 孩子身份证号：<span>*</span></label>
							<div class="inputItem">
								<div class="inputBox">
									<input type="text" id="id" name="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="inputWarp">
							<label class="label">Problem 目前主要问题：<span>*</span></label>
							<div class="inputItem">
								<div class="textareaBox">
									<textarea style="height: 85px;" id="problem" name="" placeholder="什么时间出现了什么问题或症状"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sectionHeaderStyle3 fomrWidth1">
			<header>
				<span class="icon w2 m3 icon016"></span>
				您的联系方式
			</header>
			<div class="form">
				<div class="row">
					<div class="col-4">
						<div class="inputWarp">
							<label class="label">Name 您的姓名：<span>*</span></label>
							<div class="inputItem">
								<div class="inputBox">
									<input type="text" id="yourname" name="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="inputWarp">
							<label class="label">Relation 您与孩子的关系：<span>*</span></label>
							<div class="inputItem">
								<div class="inputBox">
									<input type="text" id="yourrelation" name="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="inputWarp">
							<label class="label">Site 您所在的省市区<span>*</span></label>
							<div class="inputItem">
								<div class="inputBox">
									<input type="text" id="yourcity" name="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="inputWarp">
							<label class="label">Phone Number 手机号码：<span>*</span></label>
							<div class="inputItem">
								<div class="inputBox">
									<input type="text" id="phone" name="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="inputWarp">
							<label class="label">输入验证码：<span>*</span></label>
							<div class="inputItem">
								<div class="inputBox">
									<input type="text" id="code" name="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<input type="submit" id="" name="" value="确定预约" class="inputSubmit">
				</div>
				<div class="row">
					<div class="spinner">
						<div class="bounce1"></div>
						<div class="bounce2"></div>
						<div class="bounce3"></div>
					</div>
				</div>
			</div>
		</section>
	</div>
	
	</form>


	<p class="mainColor ta-c">
		<br><br>
		<strong class="font20">预约提醒</strong>
		就诊前请孩子提前一天开始禁饮食直至检查结束
		<br><br><br>
	</p>
</div>

<div class="ReservationSuccess">
	<br>
	<h1 class="mainColor">预约成功</h1>
	<p>您好！您已经成功预约到叶义言儿科（长沙）专家工作室本周一（2016年3月18日）上午的就诊时间。<br>稍后将会有短信信息通知到您提供的联系方式中。</p>
	<p class="mainColor">就诊提醒：就诊前请孩子提前一天开始禁饮食直至检查结束！</p>
	<p class="btn">
		<a href="" title="预约遇到问题">预约遇到问题</a>
		<a href="" title="交通服务帮助">交通服务帮助</a>
	</p>
</div>















<?php include("footer.php");?>


knowledge
<script src="js/libs/jquery-ui-datepicker.js"></script>
<script>
$(function(){

	//选择性别
	$('.gender').click(function(){
		$('.gender').removeClass('active');
		$(this).addClass('active');
	});
	$("#date_1").datepicker({
		showOtherMonths: true,
		selectOtherMonths: false
	});

	$("#datepicker").datepicker({
		showOtherMonths: true,
		selectOtherMonths: false,
		onSelect: function(selectedDate) {//选择日期后执行的操作  
            $('#datepickerValue').val(selectedDate);
        }
	});
	
})

function formCheck(){
	var name = $('#name'),
		gender = $("input[name='gender']:checked"),
		date_1 = $('#date_1'),
		height = $('#height'),
		width = $('#width'),
		id = $('#id'),
		problem = $('#problem'),
		yourname = $('#yourname'),
		yourrelation = $('#yourrelation'),
		yourcity = $('#yourcity'),
		phone = $('#phone'),
		code = $('#code');


	if(name.val() == ''){
		alert('姓名不能为空！！');
		name.focus();
		return false;
	}

	if(date_1.val() == ''){
		alert('日期不能为空！！');
		date_1.focus();
		return false;
	}

	if(height.val() == ''){
		alert('身高不能为空！！');
		height.focus();
		return false;
	}

	if(width.val() == ''){
		alert('体重不能为空！！');
		width.focus();
		return false;
	}

	if(id.val() == ''){
		alert('孩子身份证号不能为空！！');
		id.focus();
		return false;
	}

	if(problem.val() == ''){
		alert('目前主要问题不能为空！！');
		problem.focus();
		return false;
	}

	if(yourname.val() == ''){
		alert('您的姓名不能为空！！');
		yourname.focus();
		return false;
	}

	if(yourrelation.val() == ''){
		alert('您与孩子的关系不能为空！！');
		yourrelation.focus();
		return false;
	}

	if(yourcity.val() == ''){
		alert('您所在的省市区不能为空！！');
		yourcity.focus();
		return false;
	}

	if(phone.val() == ''){
		alert('手机号码不能为空！！');
		phone.focus();
		return false;
	}

	if(code.val() == ''){
		alert('输入验证码不能为空！！');
		code.focus();
		return false;
	}

	$('.spinner').show();

	$.ajax( {  
	    url:'url',// 跳转到 action  
	    data:{  
	            name : name.val(),
				gender : gender.val(),
				date_1 : date_1.val(),
				height : height.val(),
				width : width.val(),
				id : id.val(),
				problem : problem.val(),
				yourname : yourname.val(),
				yourrelation : yourrelation.val(),
				yourcity : yourcity.val(),
				phone : phone.val(),
				code : code.val()
	    },  
	    type:'post',  
	    cache:false,  
	    dataType:'json',  
	    success:function(data) {  
	    	//写入数据成功，返回1，否侧返回0
	        if(data == 1){
	        	$('.ReservationSuccess').show();

	        }else {
	        	alert('数据通讯有误，请重新提交表单！！');
	        }
	        $('.spinner').hide();
	        return false;
	     },  
	     error : function() {  
			$('.spinner').hide();
			alert("数据通讯有误，请重新提交表单！！");  
			return false;
	     }  
	});



}
</script>
</body>
</html>
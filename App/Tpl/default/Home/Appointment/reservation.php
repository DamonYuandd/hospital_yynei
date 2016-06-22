<!doctype html>
<html>
<head>
<layout name="Home:Inc:script" cache="0" />
<link href="__HOME__css/normalize.css" rel="stylesheet" type="text/css">
<link href="__HOME__css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="__HOME__css/css.css" rel="stylesheet" type="text/css">
<style type="text/css">
#ui-datepicker-div {
	width: 318px;
}
#reservationTableWarp table tbody tr td div.sel{
	background: #fba31e;
        color: #fff; 
}
#ui-datepicker-div.ui-datepicker table { margin: 0; }

</style>
<script src="__HOME__js/html5.js"></script>
<script src="__HOME__js/libs/jquery-1.11.3.min.js"></script>

</head>
<body>

<layout name="Home:Inc:header" cache="0" />
<div class="bannwrWarp h2">
	<a style="background: url(__HOME__images/banner011.jpg) no-repeat center top;"></a>
</div>
<layout name="Home:Inc:nav" cache="0" />


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
		<div class="clearfix pr">
			<div class="calendarWarp">
				<p class="txt">选择预约时间</p>
				<div id="datepicker"></div>
				<input type="hidden" id="datepickerValue" name="">
			</div>
			<div class="reservationTableWarp" id="reservationTableWarp">
				
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
							<label class="label">ID 孩子身份证号：</label>
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
							<label class="label">Site 您所在的省市区</label>
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
									<input type="text" id="phone" name="" />
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="inputWarp">
							<label class="label">&nbsp;</label>
							<div class="inputItem">
								<div class="inputBox">
									<input type="button"  value="发送验证码" id="send_code" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="inputWarp">
							<label class="label">输入验证码：<span>*</span></label>
							<div class="inputItem">
								<div class="inputBox">
									<input type="text" id="insert_code" name="insert_code" />
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
	<p id="tips">您好！您已经成功预约到叶义言儿科（长沙）专家工作室本周一（2016年3月18日）上午的就诊时间。<br>稍后将会有短信信息通知到您提供的联系方式中。</p>
	<p class="mainColor">就诊提醒：就诊前请孩子提前一天开始禁饮食直至检查结束！</p>
	<p class="btn">
		<a href="{:U('/News/show',array('id'=>180))}" title="预约遇到问题">预约遇到问题</a>
		<a href="{:U('/Feature/index')}#a" title="交通服务帮助">交通服务帮助</a>
	</p>
</div>

<layout name="Home:Inc:footer" cache="0" />
<script src="__HOME__js/libs/jquery-ui-datepicker.js"></script>
<script>
var wait=60;
function time(o) {
        if (wait == 0) {
            o.removeAttribute("disabled");           
            o.value="免费获取验证码";
            wait = 60;
        } else {
            o.setAttribute("disabled", true);
            o.value="重新发送(" + wait + ")";
            wait--;
            setTimeout(function() {
                time(o)
            },
            1000)
        }
   }

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
	$("#phone").bind("keyup",function(){
		var phone = $('#phone');
		var myreg = /^(((13[0-9]{1})|(14[0-9]{1})|(17[0]{1})|(15[0-3]{1})|(15[5-9]{1})|(18[0-9]{1}))+\d{8})$/;
		var phoneNum = phone.val();
		if(phoneNum.length !=11){
			 	$("#send_code").css({"background-color":""});
			}else if(!myreg.test(phoneNum)){
				 $("#send_code").css({"background-color":""});
		 }else{
			 $("#send_code").css({"background-color":"#ffbd59"});
		 }
	});

	var url = '{:U('Appointment/dateChange')}';
	var data = {"date":"<?php echo date('Y-m-d',time());?>"};
	$("#reservationTableWarp").load(url, data, function(response, status, xhr){
		if(status == 'success'){
			$("#reservationTableWarp").html('loading.....');
			$("#reservationTableWarp").html(response);
			//$('#spinner1').hide();
		}else {
		}
	});

	$("#datepicker").datepicker({
		showOtherMonths: true,
		selectOtherMonths: false,
		onSelect: function(selectedDate) {
			$("#reservationTableWarp").html('loading.....');
            $('#datepickerValue').val(selectedDate);
			data = {"date":selectedDate};
            $("#reservationTableWarp").load(url, data, function(response, status, xhr){
        		if(status == 'success'){
        			$("#reservationTableWarp").html(response);
        			//$('#spinner1').hide();
        		}else {
        		}
        	});
        },
       
	});
	$('#reservationTableWarp table tbody tr td div.canreservation').live("click",function(){
		$('.sel').removeClass('sel');
		$(this).addClass('sel');
	});

	
	$('#send_code').click(function(){
	
		var phone = $('#phone');
		if(phone.val() == ''){
			alert('手机号码不能为空！！');
			phone.focus();
			return false;
		}else{
			var myreg = /^(((13[0-9]{1})|(14[0-9]{1})|(17[0]{1})|(15[0-3]{1})|(15[5-9]{1})|(18[0-9]{1}))+\d{8})$/;
			var phoneNum = phone.val();
			if(phoneNum.length !=11){
		        alert('请输入有效的手机号码！！');
				phone.focus();
				return false;
		     }else if(!myreg.test(phoneNum)){
		    	alert('请输入有效的手机号码！！');
				phone.focus();
				return false;
		     }
		}
		
		time(this);
		$.ajax( {  
		    url:'{:U('Appointment/sendCode')}',// 跳转到 action  
		    data:{  
				phone : phone.val(),
		    },  
		    type:'post',  
		    cache:false,  
		    dataType:'json',
		    async:false,
		    success:function(data) {  
		    	//写入数据成功，返回1，否侧返回0
		        if(data.status == 1){
			       alert('发送成功');
		        }else {
		           alert(data.info);
		        }
		        $('.spinner').hide();
		        $("#send_code").css({"background-color":""});
		        return false;
		     },  
		     error : function() {  
				$('.spinner').hide();
				alert("数据通讯有误，请重新提交表单！！");
				$("#send_code").css({"background-color":""});
				return false;
		     }  
		});
	})
	
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
		insert_code = $('#insert_code');


	if($('.sel').length != 1){
		alert('请选择一个日期');
		return false;
	}else{
		var date_sel = $('.sel').attr('date');
		var aop = $('.sel').attr('aop');
	}

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
	if(!/^\d+$/.test(height.val())){
		alert('身高必须为数字！！');
		height.focus();
		return false;
	} 

	if(width.val() == ''){
		alert('体重不能为空！！');
		width.focus();
		return false;
	}
	if(!/^\d+$/.test(width.val())){
		alert('体重必须为数字！！');
		width.focus();
		return false;
	} 

	/*if(id.val() == ''){
		alert('孩子身份证号不能为空！！');
		id.focus();
		return false;
	}*/

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

	/*if(yourcity.val() == ''){
		alert('您所在的省市区不能为空！！');
		yourcity.focus();
		return false;
	}*/

	if(phone.val() == ''){
		alert('手机号码不能为空！！');
		phone.focus();
		return false;
	}else{
		var myreg = /^(((13[0-9]{1})|(14[0-9]{1})|(17[0]{1})|(15[0-3]{1})|(15[5-9]{1})|(18[0-9]{1}))+\d{8})$/;
		var phoneNum = phone.val();
		if(phoneNum.length !=11){
	        alert('请输入有效的手机号码！！');
			phone.focus();
			return false;
	     }else if(!myreg.test(phoneNum)){
	    	alert('请输入有效的手机号码！！');
			phone.focus();
			return false;
	     }
	}

	if(insert_code.val() == ''){
		alert('输入验证码不能为空！！');
		insert_code.focus();
		return false;
	}

	$('.spinner').show();

	$.ajax( {  
	    url:'{:U('Appointment/doAppointment')}',// 跳转到 action  
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
				insert_code : insert_code.val(),
				date_sel:date_sel,
				aop:aop
								
	    },  
	    type:'post',  
	    cache:false,  
	    dataType:'json',
	    async:false,
	    success:function(data) {  
	    	//写入数据成功，返回1，否侧返回0
	        if(data.status == 1){
		        $('#tips').text(data.info);
	        	$('.ReservationSuccess').show();
	        }else {
	        	alert(data.info);
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
	return false;
}

</script>
</body>
</html>
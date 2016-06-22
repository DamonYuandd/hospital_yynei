<!doctype html>
<html>
<head>
<layout name="Home:Inc:script" cache="0" />
<link href="__HOME__css/normalize.css" rel="stylesheet" type="text/css">
<link href="__HOME__css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="__HOME__css/css.css" rel="stylesheet" type="text/css">
<style type="text/css">
#ui-datepicker-div {
	width: 217px;
}

#ui-datepicker-div.ui-datepicker table { margin: 0; }

</style>
<script src="__HOME__js/html5.js"></script>
<script src="__HOME__js/libs/jquery-1.11.3.min.js"></script>

</head>
<body id="onlineBody">

<layout name="Home:Inc:header" cache="0" />

<div class="bannwrWarp h2">
	<a style="background: url(__HOME__images/banner010.jpg) no-repeat center top;"></a>
</div>
<layout name="Home:Inc:nav" cache="0" />

<form onSubmit="return formCheck();">
<div class="formWarp">
	<h4 class="ta-c font20 m0">
		<br><br>
		在线初诊
		<br><br>
	</h4>
	<section class="sectionHeaderStyle3 fomrWidth2">
		<header>孩子目前的生长发育情况</header>
		<div class="form">
			<div class="row">
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Name 姓名：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="name" name="name">
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
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
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Date 出生日期：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="date_1" name="date_1" readonly>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Height 身高：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="height" name="height">
								<span class=unit>CM</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Weight 体重：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="weight" name="weight">
								<span class=unit>KG</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Height 近一年长多高 </label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="next_Height" name="next_Height">
								<span class=unit>CM</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Age 开始发育年龄：</label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="start_age" name="start_age">
								<span class=unit>岁</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-8">
					<div class="inputWarp">
						<label class="label">Problem 目前主要问题：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="problem" name="problem">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="sectionHeaderStyle3 fomrWidth1">
		<header>孩子以往的身体健康情况</header>
		<div class="form">
			<div class="row">
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Tire 第几胎：</label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="tire" name="tire">
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Produce 第几产：</label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="produce" name="produce" >
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Position 胎位：</label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="position" name="position" >
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Safe  是否平产：</label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="safe" name="safe">
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Birth weight 出生时体重：</label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="birth_weight" name="birth_weight">
								<span class=unit>KG</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Birth length 出生时身长：</label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="birth_length" name="birth_length">
								<span class=unit>CM</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Disease 母孕期有无重大疾病：</label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="disease" name="disease">
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Chronic  孩子有无慢性疾病：</label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="chronic" name="chronic">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="sectionHeaderStyle3 fomrWidth1">
		<header>孩子父母的身体情况</header>
		<div class="form">
			<div class="row">
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Height 父亲身高：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="f_height" name="f_height">
								<span class=unit>CM</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Height 母亲身高:<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="m_height" name="m_height" >
								<span class=unit>CM</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Obesity  父母是否肥胖：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<div class="row">
									<div class="col-3">
										<label class="gender active" for="obesity1">
											都胖
											<input type="radio" id="obesity1" name="obesity" value="1" checked>
										</label>
									</div>
									<div class="col-3">
										<label class="gender" for="obesity2">
											母胖
											<input type="radio" id="obesity2" name="obesity" value="2">
										</label>
									</div>
									<div class="col-3">
										<label class="gender" for="obesity3">
											父胖
											<input type="radio" id="obesity3" name="obesity" value="3">
										</label>
									</div>
									<div class="col-3">
										<label class="gender" for="obesity4">
											都不胖
											<input type="radio" id="obesity4" name="obesity" value="4">
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Hereditary 家族有无遗传病史：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<div class="row">
									<div class="col-6">
										<label class="gender active" for="hereditary1">
											无
											<input type="radio" id="hereditary1" name="hereditary" value="1" checked>
										</label>
									</div>
									<div class="col-6">
										<label class="gender" for="hereditary2">
											有
											<input type="radio" id="hereditary2" name="hereditary" value="2">
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4" style="display: none;" id="hereditary_text">
					<div class="inputWarp">
						<label class="label">请输入遗传疾病名称<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="hereditary_text_text" name="hereditary_text">
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">手机号码:<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="phone" name="phone" >
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">儿童岁数:<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="c_years" name="c_years" >
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<input type="submit" id="" name="" value="初步诊断" class="inputSubmit">
			</div>
		</div>
	</section>
</div>

</form>

<div class="ReservationSuccess" style="overflow: auto;">
	<br>
	<h1 class="mainColor">初诊成功</h1>
	<div>
		<span id="record_name">姓名：xxx</span>
		<span id="b_day">出生年月日：xxx</span>
		<span id="record_height">身高：xxx</span>
		<span id="record_weight">体重：xxx</span>
	</div>
	<img src="" id="recordImg" />
</div>


<layout name="Home:Inc:footer" cache="0" />

<script src="__HOME__js/libs/jquery-ui-datepicker.js"></script>
<script>
$(function(){

	//选择性别
	$('.gender').click(function(){
		$(this).parents('.row').find('.gender').removeClass('active');
		$(this).addClass('active');
	});

	$("#date_1").datepicker({
		showOtherMonths: true,
		selectOtherMonths: false
	});
	$("label.gender").click(function(){
		 if($(this).attr('for') == 'hereditary2' && $(this).hasClass("active")){
			 $("#hereditary_text").show();
		  }else{
			  $("#hereditary_text").hide();
		  }
	});
	
})
function formCheck(){
	var name = $('#name'),
		gender = $("input[name='gender']:checked"),
		date_1 = $('#date_1'),
		height = $('#height'),
		weight = $('#weight'),
		next_Height = $('#next_Height'),
		start_age = $('#start_age'),
		problem = $('#problem'),
		tire = $('#tire'),
		produce = $('#produce'),
		position = $('#position'),
		safe = $('#safe'),
		birth_weight = $('#birth_weight'),
		birth_length = $('#birth_length'),
		disease = $('#disease'),
		chronic = $('#chronic'),
		f_height = $('#f_height'),
		m_height = $('#m_height'),
		obesity = $("input[name='obesity']:checked"),
		hereditary = $("input[name='hereditary']:checked"),
		hereditary_text = $("#hereditary_text_text"),
		phone = $('#phone'),
		c_years = $('#c_years');
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
	if(height.val() > 200){
		alert('身高请填合适范围！！');
		height.focus();
		return false;
	}
	
	if(weight.val() == ''){
		alert('体重不能为空！！');
		weight.focus();
		return false;
	}
	if(!/^\d+$/.test(weight.val())){
		alert('体重必须为数字！！');
		weight.focus();
		return false;
	} 
	if(weight.val() > 200){
		alert('体重请填合适范围！！');
		weight.focus();
		return false;
	}

	if(next_Height.val() != ''){
		if(!/^\d+$/.test(next_Height.val())){
			alert('近一年长多高必须为数字！！');
			next_Height.focus();
			return false;
		} 
		if(next_Height.val() > 200){
			alert('近一年长多高请填合适范围！！');
			next_Height.focus();
			return false;
		}
	}

	if(start_age.val() != ''){
		if(!/^\d+$/.test(start_age.val())){
			alert('开始发育年龄必须为数字！！');
			start_age.focus();
			return false;
		} 
		if(start_age.val() > 50){
			alert('开始发育年龄请填合适范围！！');
			start_age.focus();
			return false;
		}
	}
	if(problem.val() == ''){
		alert('目前主要问题不能为空！！');
		problem.focus();
		return false;
	}
	/*if(tire.val() == ''){
		alert('第几胎不能为空！！');
		tire.focus();
		return false;
	}
	if(!/^\d+$/.test(tire.val())){
		alert('第几胎必须为数字！！');
		tire.focus();
		return false;
	} */
	/*if(produce.val() == ''){
		alert('第几产不能为空！！');
		produce.focus();
		return false;
	}
	if(!/^\d+$/.test(produce.val())){
		alert('第几产必须为数字！！');
		produce.focus();
		return false;
	} 
	if(position.val() == ''){
		alert('胎位不能为空！！');
		position.focus();
		return false;
	}
	if(safe.val() == ''){
		alert('是否平产不能为空！！');
		safe.focus();
		return false;
	}
	if(birth_weight.val() == ''){
		alert('出生时体重不能为空！！');
		birth_weight.focus();
		return false;
	}
	if(!/^\d+$/.test(birth_weight.val())){
		alert('出生时体重必须为数字！！');
		birth_weight.focus();
		return false;
	} 
	if(birth_weight.val() > 200){
		alert('出生时体重请填合适范围！！');
		birth_weight.focus();
		return false;
	}
	if(birth_length.val() == ''){
		alert('出生时身长不能为空！！');
		birth_length.focus();
		return false;
	}
	if(!/^\d+$/.test(birth_length.val())){
		alert('出生时身长必须为数字！！');
		birth_length.focus();
		return false;
	} 
	if(birth_length.val() > 200){
		alert('出生时身长请填合适范围！！');
		birth_length.focus();
		return false;
	}
	if(disease.val() == ''){
		alert('母孕期有无重大疾病不能为空！！');
		disease.focus();
		return false;
	}
	if(chronic.val() == ''){
		alert('孩子有无慢性疾病不能为空！！');
		chronic.focus();
		return false;
	}*/
	if(f_height.val() == ''){
		alert('父亲身高不能为空！！');
		f_height.focus();
		return false;
	}
	if(!/^\d+$/.test(f_height.val())){
		alert('父亲身高长必须为数字！！');
		f_height.focus();
		return false;
	} 
	if(f_height.val() > 200){
		alert('父亲身高请填合适范围！！');
		f_height.focus();
		return false;
	}
	if(m_height.val() == ''){
		alert('母亲身高不能为空！！');
		m_height.focus();
		return false;
	}
	if(!/^\d+$/.test(m_height.val())){
		alert('母亲身高长必须为数字！！');
		m_height.focus();
		return false;
	} 
	if(m_height.val() > 200){
		alert('母亲身高请填合适范围！！');
		m_height.focus();
		return false;
	}
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
	if(c_years.val() == ''){
		alert('儿童岁数不能为空！！');
		c_years.focus();
		return false;
	}
	if(!/^\d+$/.test(c_years.val())){
		alert('儿童岁数必须为数字！！');
		c_years.focus();
		return false;
	} 
	if(c_years.val() > 20){
		alert('儿童岁数请填写正确！！');
		c_years.focus();
		return false;
	}

	
	$('.spinner').show();
	
	$.ajax({  
	    url:'{:U('Diagnosis/form')}',
	    data:{  
	            name : name.val(),
				gender : gender.val(),
				date_1 : date_1.val(),
				height : height.val(),
				weight : weight.val(),
				next_Height : next_Height.val(),
				start_age : start_age.val(),
				problem : problem.val(),
				tire : tire.val(),
				produce : produce.val(),
				position : position.val(),
				safe : safe.val(),
				birth_weight : birth_weight.val(),
				birth_length : birth_length.val(),
				disease : disease.val(),
				chronic : chronic.val(),
				f_height : f_height.val(),
				m_height : m_height.val(),
				obesity:obesity.val(),
				hereditary:hereditary.val(),
				hereditary_text:hereditary_text.val(),
				phone:phone.val(),
				c_years:c_years.val()
				
	    },  
	    type:'post',
	    dataType:'json',
	    async:false,  
	    success:function(data) {
	        if(data.status == 1){
	        	$('#recordImg').attr({'src':data.data.link});
	        	$('#record_name').text('姓名：'+name.val());
	        	$('#b_day').text('出生年月日：'+date_1.val()+'  ');
	        	$('#record_height').text('身高：'+height.val()+'cm  ');
	        	$('#record_weight').text('重量：'+weight.val()+'kg  ');

	        	window.location.href= data.data.redirect;
	        	//$('.ReservationSuccess').show();
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
	return false;
}

</script>
</body>
</html>
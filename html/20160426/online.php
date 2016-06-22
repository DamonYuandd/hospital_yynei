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
	width: 217px;
}

#ui-datepicker-div.ui-datepicker table { margin: 0; }

</style>
<script src="js/html5.js"></script>
<script src="js/libs/jquery-1.11.3.min.js"></script>

</head>
<body id="onlineBody">


<?php include("header.php");?>
<div class="bannwrWarp h2">
	<a style="background: url(images/banner010.jpg) no-repeat center top;"></a>
</div>

<?php include("nav.php");?>




<form action="onlineDetail.php">

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
								<input type="text" id="name" name="">
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
								<input type="text" id="date_1" name="" readonly>
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
								<input type="text" id="height" name="">
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
								<input type="text" id="width" name="">
								<span class=unit>KG</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Height 近一年长多高<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="id" name="">
								<span class=unit>CM</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Age 开始发育年龄：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="width" name="">
								<span class=unit>KG</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-8">
					<div class="inputWarp">
						<label class="label">Problem 目前主要问题：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="id" name="">
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
						<label class="label">Tire 第几胎：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="name" name="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Produce 第几产：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="" name="" readonly>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Position 胎位：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="" name="" readonly>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Safe  是否平产：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="height" name="">
								<span class=unit>CM</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Birth weight 出生时体重：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="width" name="">
								<span class=unit>KG</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Birth length 出生时身长：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="id" name="">
								<span class=unit>CM</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Disease 母孕期有无重大疾病：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="width" name="">
								<span class=unit>KG</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="inputWarp">
						<label class="label">Chronic  孩子有无慢性疾病：<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="id" name="">
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
								<input type="text" id="name" name="">
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
								<input type="text" id="" name="" readonly>
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
											<input type="radio" id="obesity3" name="obesity" value="1" checked>
										</label>
									</div>
									<div class="col-3">
										<label class="gender" for="obesity4">
											都不胖
											<input type="radio" id="obesity4" name="obesity" value="2">
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
				<div class="col-4" style="display: none;">
					<div class="inputWarp">
						<label class="label">请输入遗传疾病名称<span>*</span></label>
						<div class="inputItem">
							<div class="inputBox">
								<input type="text" id="id" name="">
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
		$(this).parents('.row').find('.gender').removeClass('active');
		$(this).addClass('active');
	});

	$("#date_1").datepicker({
		showOtherMonths: true,
		selectOtherMonths: false
	});
	
})

</script>
</body>
</html>
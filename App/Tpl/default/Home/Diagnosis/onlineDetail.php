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
.leven p{font-size:32px;}
</style>
<script src="__HOME__js/html5.js"></script>
<script src="__HOME__js/libs/jquery-1.11.3.min.js"></script>

</head>
<body id="onlineBody" style="background: #f7f5e8;">


<div class="bc-wh"><layout name="Home:Inc:header" cache="0" /></div>
<div class="bannwrWarp h2">
	<a style="background: url(__HOME__images/banner010.jpg) no-repeat center top;"></a>
</div>

<div class="bc-wh">
<layout name="Home:Inc:nav" cache="0" /></div>


<div class="container" id="onlineDetail">
	<section class="sectionHeaderStyle3">
		<header>叶义言儿科专家工作室<br>儿童生长发育情况初步判断</header>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="info" style="border-bottom: 1px solid #a0a0a0;">
		  <tr>
		    <td width="161"><img src="__HOME__images/column001.png" alt="" class="dis-b"></td>
		    <td>姓名：{$name}</td>
		    <td>性别：{$sex}</td>
		    <td>年龄：{$age}岁</td>
		    <td>&nbsp;</td>
		  </tr>
		</table>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
		    <td conspan="2" height="30"></td>
		  </tr>
		  <tr>
		    <td width="515">

		    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tr>
				    <td><div class="font20 mainColor ta-c">儿童生长路线图</div></td>
				  </tr>
				  <tr>
				    <td><img src="{:U('Index/buildImg',array('key' => $key))}" alt="" class="dis-b"></td>
				  </tr>
				  <tr>
				    <td><div class="font20 ta-c"></div></td>
				  </tr>
				</table>


		    </td>
		    <td valign="top">
		    	<!--基本情况-->
		    	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="mainColor font16 dataTable">
				  <tr>
				    <th colspan="4"><img src="__HOME__images/column002.png" alt="" class="dis-b"></th>
				    <th>&nbsp;</th>
				    <th>&nbsp;</th>
				  </tr>
				  <tr class="bc-wh">
				    <td width="50"><img src="__HOME__images/icon/icon026.png" alt="" class="dis-b"></td>
				    <td width="55">身高</td>
				    <td width="106">{$obj.height} cm</td>
				    <td width="113">身高水平</td>
				    <td width="95">{$baseH.percent}</td>
				    <td width="95"><div>{$baseH.info}</div></td>
				  </tr>
				  <tr class="bc-wh">
				    <td width="50"><img src="__HOME__images/icon/icon027.png" alt="" class="dis-b"></td>
				    <td width="55">体重</td>
				    <td width="106">{$obj.weight} kg</td>
				    <td width="113">体重水平</td>
				    <td width="95">{$baseW.percent}</td>
				    <td width="95"><div>{$baseW.info}</div></td>
				  </tr>
				  <tr class="bc-wh">
				    <td width="50"><img src="__HOME__images/icon/icon028.png" alt="" class="dis-b"></td>
				    <td width="55">BMI</td>
				    <td width="106">{$bmi.bmi}</td>
				    <td width="113">体块水平</td>
				    <td width="95">{$bmi.percent}</td>
				    <td width="95"><div>{$bmi.tips}</div></td>
				  </tr>
				</table>
				<p>&nbsp;</p>
				<!--成年身高预测-->
		    	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="mainColor font16 dataTable">
				  <tr>
				    <th><img src="__HOME__images/column003.png" alt="" class="dis-b"></th>
				    <th>&nbsp;</th>
				  </tr>
				  <tr class="bc-wh">
				    <td>按当前生长发育状态预测成年身高</td>
				    <td class="ta-r">{$predicteH} cm</td>
				  </tr>
				  <tr class="bc-wh">
				    <td>按父母遗传情况预测成年身高中间值</td>
				    <td class="ta-r">{$heredityH['H']} cm</td>
				  </tr>
				  <tr class="bc-wh">
				    <td>按父母遗传情况预测成年身高区间</td>
				    <td class="ta-r">{$heredityH['range']} cm</td>
				  </tr>
				</table>
				<p>&nbsp;</p>
				<!--成长风险-->
		    	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="mainColor font16 dataTable">
				  <tr>
				    <th colspan="4"><img src="__HOME__images/column004.png" alt="" class="dis-b"></th>
				  </tr>
				  <tr class="bc-wh">
				    <td width="25%" valign="top">
				    	<div class="leven">
				    		<p style="background: #fce390;">{$hR}级</p>
				    		矮小风险
				    	</div>
				    </td>
				    <td width="25%" valign="top">
				    	<div class="leven">
				    		<p style="background: #fdafbf;">{$wR}级</p>
				    		肥胖风险
				    	</div>
				    </td>
				    <td width="25%" valign="top">
				    	<div class="leven">
				    		<p style="background: #a1ddfd;">{$dtof}级</p>
				    		早熟风险
				    	</div>
				    </td>
				    <td width="25%" valign="top">
				    	<div class="leven">
				    		<p style="background: #a5edb0;">{$mxb}级</p>
				    		疾病风险
				    	</div>
				    </td>
				  </tr>
				</table>
				<p>&nbsp;</p>
				<p class="mainColor font16">注：
风险从低到高分10级，4级或以上，应去看儿童生长发育专科。</p>


		    </td>
		  </tr>
		</table>
	</section>
</div>

<div style="background: #fce2b6;margin: 30px 0 0 0; height: 110px;">
	<div class="container">
		<table width="100%" height="110" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td class="font20 mainColor" style="font-size: 22px;">对初诊结果有异议或想要了解更多孩子生长问题，欢迎免费咨询专家！</td>
		    <td><img src="__HOME__images/btn001.png" alt="" class="dis-b"></td>
		  </tr>
		</table>
	</div>
</div>
 <layout name="Home:Inc:footer" cache="0" />
</body>
</html>
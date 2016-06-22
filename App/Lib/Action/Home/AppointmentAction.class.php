<?php
/**
 *
 * 关于我们控制器
 * @author uclnn
 *
 */
class AppointmentAction extends HomeAction {

	function _initialize() {
		parent::_initialize ();
	}

	
	function index(){
		$st = $_SESSION['send_sm']['start_time'];
		$et = date('Y-m-d H:i:s',time());
		$second=floor((strtotime($et)-strtotime($st))%86400%60);
		if($second < 60){ //依然倒数中
			$this->assign('stTime',$second);
		}
		$this->display($this->web_theme.':Appointment:reservation');
	}
	
	function dateChange(){
		 
		
		
		$startDay = $_POST['date'];
		//获取周一，周末
		$week = getWeekSE($startDay);
		$nowDay = date('Y-m-d',time());
		if(strtotime($nowDay) > strtotime($startDay)) {	//预约时间比现在早
			//return false;
		}
		//计算日期
		
		//$stDay =  strtotime($startDay);
		//$endDay = strtotime($startDay)+6*24*3600;
		$stDay = strtotime($week['st']);
		$endDay = strtotime($week['et']);
		
		for($i=0;$i<7;$i++){
			$strtime = $stDay + $i*24*3600;
			$dateFomat = date('Y-m-d',$strtime);
			$weeks[$i]['date'] =  $strtime;
			$weeks[$i]['dateDay'] = $dateFomat;
			$weeks[$i]['week'] = get_week($dateFomat);
			if(strtotime($nowDay) > strtotime($startDay)) {	//预约时间比现在早
				//$weeks[$i]['am'] = 99;
				//$weeks[$i]['pm'] = 99;
			}else{
				//判断是否预约满
				//上午
				$amWhere = "am_or_pm = 1 and date_format(reservation_date,'%Y-%m-%d') = '".$dateFomat."'";
				$amNum = M('Reservation')->where($amWhere)->count();
				$weeks[$i]['am'] = $amNum;
				
				//下午
				$pmWhere = "am_or_pm = 2 and date_format(reservation_date,'%Y-%m-%d') = '".$dateFomat."'";
				$pmNum = M('Reservation')->where($pmWhere)->count();
				$weeks[$i]['pm'] = $pmNum;
			}
		}
		
		//判断是否过期
		foreach ($weeks as $k => $v){
			if(strtotime($v['dateDay']) <= strtotime($nowDay)){
				$weeks[$k]['isOt'] = 1;
			}else{
				$weeks[$k]['isOt'] = 0;
			}
			$w = date("w",strtotime($v['dateDay']));
			if($w =="0" || $w=="6"){ //是周末	
				if($v['am'] >= 1){
					$weeks[$k]['amFull'] = 1;
				}else{
					$weeks[$k]['amFull'] = 0;
				}
				if($v['pm'] >= 1){
					$weeks[$k]['pmFull'] = 1;
				}else{
					$weeks[$k]['pmFull'] = 0;
				}
				
			}else{
				if($v['am'] >= 10){
					$weeks[$k]['amFull'] = 1;
				}else{
					$weeks[$k]['amFull'] = 0;
				}
				if($v['pm'] >= 10){
					$weeks[$k]['pmFull'] = 1;
				}else{
					$weeks[$k]['pmFull'] = 0;
				}
			}
		}
		
		 
		$this->assign('stDay',date('m.d',$stDay));
		$this->assign('endDay',date('m.d',$endDay));
		$this->assign('weeks',$weeks);
		$this->display($this->web_theme.':Appointment:reservation_date');
	}
	
	function doAppointment(){
		if(empty($_POST)){
			$this->ajaxReturn('','error',0);
		}
		if(empty($_POST['name']) || empty($_POST['gender']) || empty($_POST['date_sel']) || empty($_POST['phone']) || empty($_POST['insert_code'])){
			$this->ajaxReturn('','error',0);
		}
		if($_POST['phone']){
			$nowDate = date('Y-m-d',time());
			$whereCheck = "phone ='".$_POST['phone']."' and date_format(reservation_date,'%Y-%m-%d') >= '".$nowDate."'";
			$obj = M('Reservation')->where($whereCheck)->find();
			if ($obj){	//已有预约
				$data['status'] = '0';
				$data['info'] = '你已经预约了'.date('Y-m-d',strtotime($obj['reservation_date'])).' '.aop($obj['am_or_pm']).'  请不要重复预约';
				$this->ajaxReturn('',$data['info'],0);
			}
		}
		
		
		//判断是否超过预定数量
		$w = date("w",strtotime($_POST['date_sel']));
		$rWhere = " date_format(reservation_date,'%Y-%m-%d') = '".$_POST['date_sel']."' and am_or_pm = ".$_POST['aop'];
		$rNum = M('Reservation')->where($rWhere)->count();
		
		if($w =="0" || $w=="6"){ //是周末
			if($rNum >= 1){
				$this->ajaxReturn('','已约满，请选其他日期',0);
			}
		}else{
			if($rNum >= 10){
				$this->ajaxReturn('','已约满，请选其他日期',0);
			}
		}
		if($_POST['insert_code'] != $_SESSION['send_sm']['code']){
			$this->ajaxReturn('','手机验证码错误，请重新填写！！',0);
		}
		
		$insertData['name'] = $_POST['name'];
		$insertData['sex'] = $_POST['gender'];
		$insertData['birthday'] = $_POST['date_1'];
		$insertData['height'] = $_POST['height'];
		$insertData['weight'] = $_POST['width'];
		$insertData['child_id'] = $_POST['id'];
		$insertData['problem'] = $_POST['problem'];
		$insertData['contact_name'] = $_POST['yourname'];
		$insertData['relation'] = $_POST['yourrelation'];
		$insertData['site'] = $_POST['yourcity'];
		$insertData['phone'] = $_POST['phone'];
		$insertData['reservation_date'] = $_POST['date_sel'];
		$insertData['am_or_pm'] = $_POST['aop'];
		$isAdd = M('Reservation')->add($insertData);
		if($isAdd){
			/*$phone = $insertData['phone'];*/
			$msg = '您好！您已经成功预约到叶义言儿科（长沙）专家工作室 '.$insertData['reservation_date'].' '.aop($insertData['am_or_pm']).'的就诊时间。';
			//sendSM($phone,$msg);
			$_SESSION['send_sm'] = NULL;
			$this->ajaxReturn('',$msg,1);
		}else{
			$this->ajaxReturn('','网络问题，请求失败',0);
		}
		
	}
	
	function sendCode(){
		if (empty($_POST)){
			$this->ajaxReturn('','',0);
		}
		$data = $_POST;
		if(empty($data['phone'])){
			$this->ajaxReturn('','phone error',0);
		}
		if($_POST['phone']){
			$nowDate = date('Y-m-d',time());
			$whereCheck = "phone ='".$_POST['phone']."' and date_format(reservation_date,'%Y-%m-%d') >= '".$nowDate."'";
			$hasRe = M('Reservation')->where($whereCheck)->find();
			if ($hasRe){	//已有预约
				$info = '你已经预约了'.date('Y-m-d',strtotime($hasRe['reservation_date'])).' '.aop($hasRe['am_or_pm']).'  请不要重复预约';
				$this->ajaxReturn('',$info,0);
			}
		}
		
		if($_SESSION['send_sm']['start_time']){
			$st = $_SESSION['send_sm']['start_time'];
			$et = date('Y-m-d H:i:s',time());
			$minute=floor((strtotime($et)-strtotime($st))%86400/60);
			$second=floor((strtotime($et)-strtotime($st))%86400%60);
			if($second < 60 && $minute < 1){
				$this->ajaxReturn('','请等一段时间后再重新发送',0);
			}else{
				$_SESSION['send_sm']['code'] = rand(1000,9999);
			}
		}else{
			$_SESSION['send_sm']['start_time'] = date('Y-m-d H:i:s',time());
			$_SESSION['send_sm']['code'] = rand(1000,9999);
		}
		$msg = "您的请求验证码是：".$_SESSION['send_sm']['code'];
		$obj = sendSM($data['phone'],$msg);
		$objArr = explode(',',$obj);
		
		if(is_array($objArr)){
			if (strlen($objArr[1]) == 3){
				$this->ajaxReturn('','网络错误，请重试!!',0);
			}else{
				$this->ajaxReturn('','发送成功',1);
			}
		}else{
			$this->ajaxReturn('','网络错误，请重试!!',0);
		}
		
	}

}
?>
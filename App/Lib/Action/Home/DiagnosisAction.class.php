<?php
/**
 *
 * 关于我们控制器
 * @author uclnn
 *
 */
class DiagnosisAction extends HomeAction {

	function _initialize() {
		parent::_initialize ();
	}

	
	function index(){
		$this->display($this->web_theme.':Diagnosis:online');
	}

	function form(){
		$data = $_POST;
		if(empty($data)){
			$this->ajaxReturn('','参数错误',0);
		}
		
		$addData['name'] = $data['name'];
		$addData['gender'] = $data['gender'];
		$addData['birthday'] = $data['date_1'];
		$addData['height'] = $data['height'];
		$addData['weight'] = $data['weight'];
		$addData['next_Height'] = $data['next_Height'];
		$addData['start_age'] = $data['start_age'];
		$addData['problem'] = $data['problem'];
		$addData['tire'] = $data['tire'];
		$addData['produce'] = $data['produce'];
		$addData['position'] = $data['position'];
		$addData['safe'] = $data['safe'];
		$addData['birth_weight'] = $data['birth_weight'];
		$addData['birth_length'] = $data['birth_length'];
		$addData['disease'] = $data['disease'];
		$addData['chronic'] = $data['chronic'];
		$addData['f_height'] = $data['f_height'];
		$addData['m_height'] = $data['m_height'];
		$addData['hereditary'] = $data['hereditary'];
		$addData['hereditary_text'] = $data['hereditary_text'];
		$addData['phone'] = $data['phone'];
		$addData['c_years'] = $data['c_years'];
		/*$where['name'] = $addData['name'];
		$where['birthday'] = $addData['birthday'];
		$where['gender'] = $addData['gender'];*/
		$where['phone'] = $addData['phone'];
		$num = M('Diagnosis')->where($where)->count();
		if($num < 6){
			M('Diagnosis')->add($addData);
		}
	
		// 画图
		$key = rawurlencode(base64_encode(json_encode($addData['phone'])));
		$returnData['redirect'] = U('Diagnosis/show',array('key'=>$key,'age'=>$data['c_years'],'n'=>$data['name'],'s'=>$data['gender']));
		$this->ajaxReturn($returnData,'',1);

	}
	
	
	function show(){
		$str1 = rawurldecode($_GET['key']);
		$str = json_decode(base64_decode($str1),true);
		$obj = M('diagnosis')->where(array('phone' => $str))->order('id desc')->find();
		if (!$obj){
			return false;
		}
		
		//身高
		$baseH = hCount($obj['height'],$_GET['age'],$obj['gender']);
		
		//体重
		$baseW = wCount($obj['weight'],$_GET['age'],$obj['gender']);
		
		//bmi
		$bmi = bmi($obj['height'],$obj['weight'],$_GET['age'],$obj['gender']);

		
		if($baseH['percent'] <=25 && $bmi['percent']>=75){
			$bmi['tips'] = '矮胖';
		}
		if($baseH['percent'] <=25 && $bmi['percent']<=25){
			$bmi['tips'] = '矮瘦';
		}
		if(25<=$bmi['percent'] && $bmi['percent']<=75){
			$bmi['tips'] = '正常';
		}
		if($baseH['percent'] >=75 && $bmi['percent']<=25){
			$bmi['tips'] = '高瘦';
		}
		if($baseH['percent'] >=75 && $bmi['percent']>=75){
			$bmi['tips'] = '高胖';
		}
		
		//预测身高
		$predicteH = predicteH($obj['height'],$_GET['age'],$obj['gender']);
		
		//根据父母预测
		$heredityH = heredityH($obj['f_height'],$obj['m_height'],$obj['gender']);
		
		
		//身高风险
		$hArr = explode('-',$baseH['percent']);
		if(count($hArr) == 2){
			$h_num = $hArr[1];
		}else{
			$h_num = $baseH['percent'];
		}
		$hR = hRisk($h_num);
		
		//体重风险
		$wArr = explode('-',$baseW['percent']);
		
		if(is_array($wArr)){
			$w_num = $wArr[1];
		}else{
			$w_num = $baseW['percent'];
		}
		
		
		$bArr = explode('-',$bmi['percent']);
		if(count($wArr) == 2){
			$b_num = $bArr[1];
		}else{
			$b_num = $bmi['percent'];
		}
		
		$wR = wRish($w_num,$b_num,$_GET['age']);
		
		//发育过快
		$dtof = dtof($h_num);
		
		//慢性病风险
		$mxb = mxb($h_num,$w_num);
		
		
		$this->assign('obj',$obj);
		$this->assign('sex',bog($_GET['n']));
		$this->assign('baseH',$baseH);
		$this->assign('baseW',$baseW);
		$this->assign('bmi',$bmi);
		$this->assign('predicteH',$predicteH);
		$this->assign('heredityH',$heredityH);
		$this->assign('name',$_GET['n']);
		$this->assign('age',$_GET['age']);
		$this->assign('key',$_GET['key']);
		$this->assign('hR',$hR);
		$this->assign('wR',$wR);
		$this->assign('dtof',$dtof);
		$this->assign('mxb',$mxb);
		$this->display($this->web_theme.':Diagnosis:onlineDetail');
	}
}
?>
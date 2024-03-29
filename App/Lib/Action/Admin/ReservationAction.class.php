<?php
/**
 * 
 * 介绍内容控制器
 * @author uclnn
 *
 */
class ReservationAction extends AdminAction {
	
	function _initialize() {
		parent::_initialize ();
		$this->setModel('News');
	}
	
	function index(){
		$where = '';
		$st = $_GET['start_time'].' 00:00:00';
		$et = $_GET['start_time'].' 23:59:59';
		if($_GET['start_time']){
			$where = 'reservation_date >= \''.$st.'\'';
		}
		if($_GET['end_time']){
			$where .= 'and reservation_date <= \''.$et.'\'';
		}
		if($_GET['searchKey']){
			$where .= 'and phone = \''.$_GET['searchKey'].'\'';
		}
		/*分页*/
		import ( "ORG.Util.Page" );
		$count = M('reservation')->where ( $where )->count ();
		
		$page = new Page ( $count, 15 );
		$pageBar = $page->show ();
		$dataList = M('reservation')->where($where)->order('id desc')->limit ( $page->firstRow . ',' . $page->listRows )->select();
		
		$this->assign ( 'searchKey',$_GET['searchKey'] );
		$this->assign ( 'dataList',$dataList );
		$this->assign ( 'pageBar', $pageBar );
		$this->assign ( 'sort', $sort);
		$this->assign ( 'totalRows', $count );
		$this->assign ( 'rowpage', $rowpage );
		$this->display();
	}
	
	function edit(){
		$sys = M("System")->where(array('id'=>1))->find();
		$id = $_GET['id'];
		$obj = M('reservation')->where(array('id'=>$id))->find();
		$send_content = "您的预约已成功！请于"
						.date('Y-m-d',strtotime($obj['reservation_date']))
					    .aop($obj['am_or_pm'])."前往：长沙市开福区芙蓉中路564号泊富国际18楼。电话："
					    .$sys['telephone'];
		
		
		$this->assign('obj',$obj);
		$this->assign('send_content',$send_content);
		$this->display();
		
	}
	function sendSM(){
		if(empty($_POST['id']) || empty($_POST['phone'])){
			$this->error('必须填写短信内容');
		}
		sendSM($_POST['phone'],$_POST['send_content']);
		$obj = M('reservation')->where(array('id'=>$_POST['id']))->save(array('is_send' =>1));
		$this->success("发送成功");
	}
	
}
?>
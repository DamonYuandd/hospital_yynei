<?php
/**
 * 
 * 介绍内容控制器
 * @author uclnn
 *
 */
class DiagnosisAction extends AdminAction {
	
	function _initialize() {
		parent::_initialize ();
		$this->setModel('Diagnosis');
	}
	
	function index(){
		$where = '';
		if($_GET['searchKey']){
			$where .= ' phone like \'%'.$_GET['searchKey'].'%\'';
		}
		/*分页*/
		import ( "ORG.Util.Page" );
		$count = M('diagnosis')->where ( $where )->count ();
		
		$page = new Page ( $count, 15 );
		$pageBar = $page->show ();
		$dataList = M('diagnosis')->where($where)->order('id desc')->limit ( $page->firstRow . ',' . $page->listRows )->group('phone')->select();
	
	
	
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
		$obj = M('diagnosis')->where(array('phone'=>$_GET['phone']))->select();
		
		$this->assign('obj',$obj);
		$this->display();
	
	} 
	
}
?>
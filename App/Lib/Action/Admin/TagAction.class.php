<?php
/**
 * 
 * 介绍内容控制器
 * @author uclnn
 *
 */
class TagAction extends AdminAction {
	
	function _initialize() {
		parent::_initialize ();
		$this->setModel('Tag');
	}
	
	public function index() {
		//D('Admin.Category')->getDownLevels();
		$pid = $_GET['pid'];
		$cates = D('Admin.Category')->getDownLevels($pid);
		 
		$tags = M('Tag')->where(array('is_publish' => 1,'category_id' => array('in',$cates)))->order('ordernum desc,id desc')->select();
		
		$this->assign('tags',$tags);
		$this->display ();
	}
	
	public function editAdd(){
		//$pid = $_GET['pid'];
		
		$this->display ();
	}
	
	public function deletetag(){
		$id = $_GET['id'];
		if(empty($id)){
			$this->error('无参数错误');
		}
		M('Tag')->where(array('id'=>$id))->delete();
		$this->success ( '删除成功！');
	}
	
	public function save(){
		//$_POST['title'];
		M('Tag')->add($_POST);
		$this->success ( '添加成功！');
	}

}
?>
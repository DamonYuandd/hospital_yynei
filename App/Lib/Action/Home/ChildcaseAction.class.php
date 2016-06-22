<?php
/**
 *
 * 关于我们控制器
 * @author uclnn
 *
 */
class ChildcaseAction extends HomeAction {

	function _initialize() {
		parent::_initialize ();
	}

	function m_index() {
		$this->display($this->mobile_theme.':About:index');
	}
	
	function m_show() {
		$this->assign('headTitle', $obj['title']);
		$this->display($this->mobile_theme.':About:show');
	}
	function index(){
		$order = 'click_count desc,ordernum desc,id desc';
		$where = array('category_id' => 1514,'is_publish' => 1);
		$firstArt = M('News')->where($where)->order($order)->find();
		$cate = D('Category')->where(array('id' => 1514))->find();
		
		$video = M('Video')->where(array('is_show' => 1,'is_publish' => 1))->find();
		$this->assign('cate',$cate);
		$this->assign('video',$video);
		$this->assign('firstArt',$firstArt);
		$this->display($this->web_theme.':Childcase:child_case');
	}
	function show(){
		$this->display($this->web_theme.':About:show');
	}
	
	function showArt(){
		if (!empty($_POST['id'])){
			$where = array('id' => $_POST['id'],'is_publish' => 1);
			$obj = M('News')->where($where)->find();
			$arr['id'] = $obj['id'];
			$arr['title'] = $obj['title'];
			$arr['image'] = $obj['image'];
			$arr['link'] = U('Childcase/newsVideoDetail',array('id' => $obj['id']));
			if($obj){
				$this->ajaxReturn($arr,'succees',1);
			}else{
				$this->ajaxReturn('','error',0);
			}
			//$this->ajaxReturn($_POST['username'],'用户名正确~',1);
		}else{
			$this->ajaxReturn('','error',0);
		}
	}
	
	function ajaxChildNews(){
		$type = $_POST['type']?$_POST['type']:1;
		$page = $_POST['page']?$_POST['page']:0;
		if($type == 1){ //矮小
			$this->assign('tips','关于儿童矮小问题的案例');
			$where = array('category_id' => 1514,'is_publish' => 1);
		}
		if($type == 2){ //肥胖
			$this->assign('tips','关于儿童肥胖问题的案例');
			$where = array('category_id' => 1515,'is_publish' => 1);
		}
		if($type == 3){ //性早熟
			$this->assign('tips','关于儿童性早熟的案例');
			$where = array('category_id' => 1516,'is_publish' => 1);
		}
		if($type == 4){ //抵抗力差
			$this->assign('tips','关于儿童抵抗力差的案例');
			$where = array('category_id' => 1517,'is_publish' => 1);
		}
		
		$total = M('News')->where($where)->count();
		$num = 8 ;
		$start = $page*$num;
		$order = 'ordernum desc,id desc';
		if($start == 0){
			$data = M('News')->where($where)->order($order)->limit($num)->select();
		}else{
			$data = M('News')->where($where)->order($order)->limit("$start,$num")->select();
		}
		
		
		$pageShowArr = ceil($total/$num);
		$sPage = $page;
		
		if($pageShowArr - $sPage > 5){
			$ii = 5;
		}else{
			$ii = $pageShowArr - $sPage;
		}
		
		for($i=0;$i<$ii;$i++){
			$pageShow[] = $sPage;
			$sPage++;
		}
		$this->assign('total',$pageShowArr);
		$this->assign('nowPage',$page);
		$this->assign('pageShow',$pageShow);
		$this->assign('data',$data);
		$this->display($this->web_theme.':Childcase:ajax_child_news');
	}
	
	function newsVideoDetail(){
		if(empty($_GET['id'])){
			$this->error('错误');
		}
		M('News')->where(array('id' => $_GET['id'],'is_publish'=>1))->setInc('click_count');
		$obj = D('Home.News')->getNews($_GET['id']);
		
		$this->assign('obj',$obj);
		//$this->display($this->web_theme.':News:newsDetail');
		$this->display($this->web_theme.':Knowledge:knowledgeDetail');
	}

	//获取分类第一篇文字
	function getFirstArt(){
		$type = $_POST['type'];
		if(empty($type)){
			return false;
		}else{
			if($type == 1){ //矮小
				$cid = 1514;
			}
			if($type == 2){ //肥胖
				$cid = 1515;
			}
			if($type == 3){ //性早熟
				$cid = 1516;
			}
			if($type == 4){ //抵抗力差
				$cid = 1517;
			}
		}
		$order = 'click_count desc,ordernum desc,id desc';
		$where = array('category_id' => $cid,'is_publish' => 1);
		$firstArt = M('News')->where($where)->order($order)->find();
		$firstArt['link'] = U('Childcase/newsVideoDetail',array('id' => $firstArt['id']));
		$firstArt['img'] = imgPath($firstArt['image'],'news',C('TEST_PATH'));
		echo json_encode($firstArt);
		exit;
	}
}
?>
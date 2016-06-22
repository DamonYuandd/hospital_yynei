<?php
/**
 *
 * 关于我们控制器
 * @author uclnn
 *
 */
class KnowledgeAction extends HomeAction {

	function _initialize() {
		parent::_initialize ();
		
	}

	
	function index(){
		if(empty($_GET['cid'])){
			$cid = '1519';
		}else{
			$cid = $_GET['cid'];
		}
		
		$order = 'ordernum desc,id desc';
		//$where = array('category_id' => $cid,'is_publish' => 1);
		$where = 'category_id = '.$cid.' and is_publish =1';
		if($_GET['key']){
			$where .= ' and (title like "%'.$_GET['key'].'%" or find_in_set(\''.$_GET['key'].'\',tag) )';
		}
		//分页
		import ( "ORG.Util.Page" );
		$count = M('News')->where ( $where )->count ();
		$page = new Page ( $count, 5 );
		
		$dataList = M('News')->where($where)->limit ( $page->firstRow . ',' . $page->listRows )->order($order)->select();
		
		//Category 
		$cate = D('Home.Category')->getAlias($cid);
		
		 
		//关键词
		$tags = M('Tag')->where(array('is_publish' => 1,'category_id' => $cid))->select();
		
		$this->assign('cid',$cid);
		$this->assign('pageBar',$page->show());
		$this->assign('dataList',$dataList);
		$this->assign('cate',$cate);
		$this->assign('tags',$tags);
		$this->display($this->web_theme.':Knowledge:knowledge');
	}
	
	function knowledgeDetail(){
		
		
		if(empty($_GET['id'])){
			$this->error('错误');
		}
		M('News')->where(array('id' => $_GET['id'],'is_publish'=>1))->setInc('click_count');
		$obj = D('Home.News')->getNews($_GET['id']);
		
		//关键词
		$tags = M('Tag')->where(array('is_publish' => 1,'category_id' =>$obj['category_id']))->select();
		
		$this->assign('cid',$obj['category_id']);
		$this->assign('tags',$tags);
		$this->assign('obj',$obj);
		$this->display($this->web_theme.':Knowledge:knowledgeDetail');
	}

}
?>
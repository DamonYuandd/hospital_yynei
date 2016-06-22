<?php
/**
 *
 * 新闻控制器
 * @author uclnn
 *
 */
class NewsAction extends HomeAction
{
	function _initialize() {
		parent::_initialize();
		//获取category 
		$cate = M('Category')->where(array('is_publish'=>1,'pid'=>1512))->order('ordernum desc')->select();
		
		$this->assign('cate',$cate);
		
	}
	public function index2(){
		$this->display($this->web_theme.':News:index');
	}
	function show(){
		if(empty($_GET['id'])){
			$this->error('错误');
		}
		$where = array('id' => $_GET['id'],'is_publish'=>1);
		M('News')->where($where)->setInc('click_count');
		$obj = D('Home.News')->getNews($_GET['id']);
		
		//关键词
		$tags = M('Tag')->where(array('is_publish' => 1,'category_id' =>$obj['category_id']))->select();
		
		//上一篇
		$order = 'ordernum desc,id desc';
		$listData = M('News')->where(array('category_id'=>$obj['category_id'],'is_publish'=>1))->field('id')->order($order)->select();
		foreach ($listData as $k => $v){
			$newArr[] = $v['id'];
		}
		
		$listObjKey = array_search($obj['id'],$newArr);
		
		if($listObjKey != 0){ //存在上一篇
			$preWhere = array('id'=> $newArr[$listObjKey-1],'is_publish' => 1);
			
			$preObj = M('News')->where($preWhere)->find();
			$this->assign('preObj',$preObj);
		}
		if($listObjKey != count($newArr)){ //存在下一篇
			$nextWhere = array('id'=> $newArr[$listObjKey+1],'is_publish' => 1);
			$nextObj = M('News')->where($nextWhere)->find();
			$this->assign('nextObj',$nextObj);
		}
		
		$this->assign('cid',$obj['category_id']);
		$this->assign('tags',$tags);
		$this->assign('obj',$obj);
		
		$this->display($this->web_theme.':News:newsDetail');
	}
	function index(){
		if(empty($_GET['cid'])){
			$cid = '1533';
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
		$page = new Page ( $count, 8 );
		
		$dataList = M('News')->where($where)->limit ( $page->firstRow . ',' . $page->listRows )->order($order)->select();
		
		//Category
		//$cate = D('Home.Category')->getAlias($cid);
		
		
		//关键词
		$tags = M('Tag')->where(array('is_publish' => 1,'category_id' => $cid))->select();
		
		$this->assign('cid',$cid);
		$this->assign('pageBar',$page->show());
		$this->assign('dataList',$dataList);
	//	$this->assign('cate',$cate);
		$this->assign('tags',$tags);
		if(empty($_GET['cid'])){
			$this->assign('obj',array('category_id' => $cid));
		}
		$this->display($this->web_theme.':News:news');
	}

	/**********************************手机************************************/

	public function m_index() {
		$this->display($this->mobile_theme.':News:index');
	}

	public function m_show() {
			$this->display($this->mobile_theme.':News:show');
	}
	//搜索
	public function search(){
		$cdb = M('Category');
		$al = 'News';
		if( $this->is_mobile==true ) {
			$hardware = 'mobile';
		}else{
			$hardware = 'pc';
		}
		//获取父类id
		$Getfid = $cdb->where(array('alias'=>$al,'is_publish'=>1))->find();
		//获取子类
		$cid = selectSubCategory($Getfid['id']);
		foreach($cid as $key => $value){
			$newsCid .= ','.$value['id'];
		}
		$newsCid = $Getfid['id'].$newsCid;
		//获取孙类
		foreach($cid as $key => $value){
			if($sun = selectSubCategory($value['id'])){
				for($i=0;$i<count($sun);$i++){
					$newsCid .= ','.$sun[$i]['id'];
				}
			}
		}
		$db = M('News');
		$char = trim($_GET['key']);
		if(!$char){
			$this->error ( '搜索的文字不能为空' );
		}
		$where = 'category_id in ('.$newsCid.') and title like \'%'.$char.'%\' and is_publish = 1 and lang = \''.L('language').'\' and hardware = \'pc\'';
		import ( "ORG.Util.Page" );
		$count = $db->where ( $where )->count ();
		$page = new Page ( $count, 7);
		$newsList = $db->where ( $where )->order('is_top desc, ordernum desc, create_time desc')->limit ( $page->firstRow . ',' . $page->listRows )->select ();
		$this->assign('key',$_GET['key']);
		$this->assign('dataList',$newsList);
		$this->assign('pageBar',$page->show());
		$this->display($this->web_theme.':News:search');
	}

}
?>
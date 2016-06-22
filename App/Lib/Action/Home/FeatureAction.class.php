<?php
/**
 *
 * 关于我们控制器
 * @author uclnn
 *
 */
class FeatureAction extends HomeAction {

	function _initialize() {
		parent::_initialize ();

		if( $this->is_mobile==true ) {
			$maction = A("Home.Mobile");
			if( ACTION_NAME=='index' ) {
				if($_REQUEST['cid']){
					$obj = $maction->cidNewsInfo($_REQUEST['cid']);
				}else{
					$obj = getNewsByAlias('About/introduction');
					if(!$obj){
						$obj = getNewsByAlias('About/indexInfo');
						if(!$obj){
							$obj = oneWidget('About');
						}
					}
				}
				$this->assign('obj',$obj);
				$this->assign('headTitle', $obj['title']);
				$this->m_index();exit;
			} else if( ACTION_NAME=='show' ) {
				$this->m_show();exit;
			}
		}
		/*
		if (! method_exists ( $this, ACTION_NAME )) { // 没有定制方法
			$this->display ( 'index' );
			exit ();
		}*/
	}

	function m_index() {
		$this->display($this->mobile_theme.':Feature:index');
	}
	
	function m_show() {
		$this->assign('headTitle', $obj['title']);
		$this->display($this->mobile_theme.':Feature:show');
	}
	function index(){
		$datalist = M('News')->where(array('category_id' => 1513,'is_publish' => 1,'hardware' => 'pc','lang' => 'zh-cn'))->order('ordernum desc,id desc')->select();
		$this->assign('datalist',$datalist);
		$this->display($this->web_theme.':Feature:feature');
	}
	function show(){
		$this->display($this->web_theme.':Feature:show');
	}

}
?>
<?php
/**
 *
 * 关于我们控制器
 * @author uclnn
 *
 */
class TopicAction extends HomeAction {

	function _initialize() {
		parent::_initialize ();
		$order = 'click_count desc,ordernum desc,id desc';
		$where = array('category_id' => 1514,'is_publish' => 1);
		$firstArt = M('News')->where($where)->order($order)->find();
		$cate = D('Category')->where(array('id' => 1514))->find();
		$this->assign('cate',$cate);
		$this->assign('firstArt',$firstArt);
	}


	function monographicBoneage(){
		//获取其他专题
		$ads = M('Advert')->where(array('category_id' => 1544,'is_publish'=>1,'hardware'=>'pc'))->order('ordernum desc,id desc')->limit(4)->select();
		$this->assign('ads',$ads);
		$this->display($this->web_theme.':Topic:monographicBoneage');
	}
	function monographicObesity(){
		//获取其他专题
		$ads = M('Advert')->where(array('category_id' => 1542,'is_publish'=>1,'hardware'=>'pc'))->order('ordernum desc,id desc')->limit(4)->select();
		$this->assign('ads',$ads);
		$this->display($this->web_theme.':Topic:monographicObesity');
	}
	function monographicPrecocious(){
		//获取其他专题
		$ads = M('Advert')->where(array('category_id' => 1543,'is_publish'=>1,'hardware'=>'pc'))->order('ordernum desc,id desc')->limit(4)->select();
		$this->assign('ads',$ads);
		$this->display($this->web_theme.':Topic:monographicPrecocious');
	}
	function monographicUndersized(){
		//获取其他专题
		$ads = M('Advert')->where(array('category_id' => 1541,'is_publish'=>1,'hardware'=>'pc'))->order('ordernum desc,id desc')->limit(4)->select();
		$this->assign('ads',$ads);
		$this->display($this->web_theme.':Topic:monographicUndersized');
	}

}
?>
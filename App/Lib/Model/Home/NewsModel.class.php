<?php
class NewsModel extends Model {
	
	//通过ID获取别名
	public function getNews( $id ) {
		$obj = M('News')->where(array('id'=>$id,'is_publish' => 1))->find();
		if($obj == false){
			$this->error('暂无该信息');
		}
		if($obj['video']){ //有video 信息
			$video = M('Video')->where(array('id'=>$obj['video']))->find();
			$obj['videoInfo'] = $video;
		}
		if($obj['category_id']){
			$cate = D('Home.Category')->getAlias($obj['category_id']);
			$obj['cate'] = $cate;
		}
		return $obj;
	}
	
}
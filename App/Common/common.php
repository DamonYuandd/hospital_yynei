<?php
/**
 * 字符串截取，支持中文和其他编码
 *
 * @param string $str 需要转换的字符串
 * @param string $start 开始位置
 * @param string $length 截取长度
 * @param string $charset 编码格式
 * @param string $suffix 截断字符串后缀
 * @return string
 */
function str_cut($str, $start=0, $length, $suffix="",$charset="utf-8")
{
	if(function_exists("mb_substr")){
		echo mb_substr($str, $start, $length, $charset).$suffix;return;
	}
	elseif(function_exists('iconv_substr')){
		echo iconv_substr($str,$start,$length,$charset).$suffix;return;
	}
	$re['utf-8']  = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
	$re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
	$re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
	$re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
	preg_match_all($re[$charset], $str, $match);
	$slice = join("",array_slice($match[0], $start, $length));
	echo $slice.$suffix;
}

/*********************************Home常用方法************************************/
/**
 * 
 * 通过ID或别名输出分类标题
 * @param int $id
 * @param string $alias
 */
function c_title( $my_id, $alias, $lang ) {
	if($lang == 'mobile'){
		$hare = 'mobile';
		$lang = L('language'); 
	}else{
		$hare = 'pc';
	}
	if( empty($lang) ) {
		$lang = L('language'); //获取当前语言
	}
	$categoryDao = M('Category');
	if( !empty($my_id) ) {
		echo $categoryDao->getField('title', array('id'=>$my_id,'lang'=>$lang,'hardware' => $hare));
	} else {
		echo $categoryDao->getField('title', array('alias'=>$alias,'lang'=>$lang,'hardware' => $hare));
	}
}

/**
 * 可通过上级ID和别名获取分类下拉列表
 * @param int $pid
 * @param string $alias
 */
function selectCategoryOptions( $pid, $alias ) {
	$categoryDao = M('Category');
	$lang = L('language'); //获取当前语言
	import ( "ORG.Util.MobileDetect" );
	$detect = new MobileDetect();
	if( !empty($alias) ) {
		if($detect->isMobile()){
			$pid = $categoryDao->getField('id', array('alias'=>$alias,'lang'=>$lang,'hardware' => 'mobile'));
		}else{
			$pid = $categoryDao->getField('id', array('alias'=>$alias,'lang'=>$lang,'hardware' => 'pc'));
		}
	}
	if($detect->isMobile()){
		$categoryList = $categoryDao->where(array('pid'=>$pid,'lang'=> $lang,'hardware' => 'mobile'))->order('ordernum desc')->select();
	}else{
		$categoryList = $categoryDao->where(array('pid'=>$pid,'lang'=>$lang,'hardware' => 'pc'))->order('ordernum desc')->select();
	}
	$str .= '<select name="category_id" id="category_id">';
	foreach($categoryList as $key=>$value) {
		$str .= '<option value="'.$value['id'].'">'.$value['title'].'</option>';
	}
	echo $str .= '</select>';
}

/**
 * 友情链接下拉
 */
function selectLinkOptions() {
	$linkDao = M('Link');
	$lang = L('language'); //获取当前语言
	$linkList = $linkDao->where(array('is_publish'=>1))->order('is_top desc, ordernum desc, create_time desc')->select();
	foreach($linkList as $key=>$value) {
		$str .= '<option value="'.$value['url'].'">'.$value['title'].'</option>';
	}
	echo $str;
}

/**
 * 切换语言--只有两种语言时可用
 */
function switchLang() {
	$lang = L('language');
	if( $lang=='zh-CN' || $lang=='zh-cn' ) {
		echo '<a href="__APP__?l=en-US">ENGLISH</a>';
	} else {
		echo '<a href="__APP__?l=zh-CN">简体中文</a>';
	}
}

/**
 * 查找产品多图片
 */
function selectGoodsPhoto() {
	$gpDao = M('GoodsPhoto');
	$gpList = $gpDao->where(array('goods_id'=>$_GET['id']))->order('ordernum desc')->select();
	return $gpList;
}

/**
 * 自动获取分类模板URL
 */
function getCategoryUrl( $vo ) {
    if( empty($vo['alias']) ) {
        $url = __APP__.'/'.MODULE_NAME.'/index/cid/'.$vo['my_id'].'.html';
    } else {
        $url = __APP__.'/'.$vo['alias'].'.html';
    }
    return $url;
}

/**
 * 查找子分类
 */
function selectSubCategory( $pid ) {
	import ( "ORG.Util.MobileDetect" );
	$detect = new MobileDetect();
	if($detect->isMobile()){
			$hardware = 'mobile';
	}else{
			$hardware = 'pc';
	}
    $categoryDao = M('Category');
    $lang = L('language');
    $categoryList = $categoryDao->where(array('pid'=>$pid,'is_publish'=>1,'lang'=>$lang,'hardware'=>$hardware))->order('ordernum desc')->select();
   return $categoryList;
}
/**
 * 单个广告输出
 * @param int $cid
 */
function getAdvertOne( $cid ) {
    $advertDao = M('Advert');
    $lang = L('language');
    $obj = $advertDao->where(array('category_id'=>$cid,'is_publish'=>1,'lang'=>$lang))->order('ordernum desc, id desc')->find();
    echo '<a href="'.$obj['url'].'"><img src="'.C('UPLOAD_FILE_RULE').C('USER_CNUM').'/images/advert/m_'.$obj['image'].'" width="'.$obj['width'].'" height="'.$obj['height'].'" /></a>';
}
//通过cid查找循环图片 
function getAdvertList($cid){
	$advertDao = M('Advert');
    $lang = L('language');
    $list = $advertDao->where(array('category_id'=>$cid,'is_publish'=>1,'lang'=>$lang))->order('ordernum desc, id desc')->select();
	return $list;
}
//循环图片根据别名
function getAdvertListAlias($alias){
	$cateDb = M('Category');
	$lang = L('language');
	import ( "ORG.Util.MobileDetect" );
	$detect = new MobileDetect();
	if($detect->isMobile()){
		$getCid = $cateDb->where(array('alias' => $alias,'is_publish' => 1,'hardware'=>'mobile','lang'=> $lang))->find();
	}else{
		$getCid = $cateDb->where(array('alias' => $alias,'is_publish' => 1,'hardware'=>'pc','lang'=>$lang))->find();
	}
	$advertDao = M('Advert');
    $list = $advertDao->where(array('category_id'=>$getCid['id'],'is_publish'=>1))->order('ordernum desc')->select();
	if($list){
		foreach($list as $key => $value){
			$list[$key]['img'] = C('UPLOAD_FILE_RULE').C('USER_CNUM').'/images/advert/m_'.$value['image'];
		}
	}else{
		$list[0]['target'] = '_top';
		$list[0]['url'] = __APP__;
		$list[0]['img'] = 'http://img.huyionline.cn/default/default.jpg' ;
	}
	return $list;
}
//根据别名获取文章信息
function getNewsByAlias($alias){
	$cateDb = M('Category');
	$lang = L('language');
	import ( "ORG.Util.MobileDetect" );
	$detect = new MobileDetect();
	if($detect->isMobile()){
			$hardware = 'mobile';
	}else{
			$hardware = 'pc';
	}
	$getCid = $cateDb->where(array('alias' => $alias,'is_publish' => 1,'hardware' => 'pc','lang'=>$lang,'hardware' => $hardware))->find(); //PC端
	$newsDao = M('News');
	$obj = $newsDao->where(array('category_id'=>$getCid['id'],'is_publish' => 1,'lang'=>$lang))->find();
	return $obj;
}
//通过别名获取一张广告
function getAdOneAlias($alias){
	$cateDb = M('Category');
	$lang = L('language');
	$getCid = $cateDb->where(array('alias' => $alias,'is_publish' => 1,'lang' => $lang))->find();
	$advertDao = M('Advert');
    $obj = $advertDao->where(array('category_id'=>$getCid['id'],'is_publish'=>1,'lang'=>$lang))->order('ordernum desc, id desc')->find();
	if($obj){
		if($obj['net_image']){
			$url = $obj['net_image'];
		}else{
			$url = C('UPLOAD_FILE_RULE').C('USER_CNUM').'/images/advert/m_'.$obj['image'];
		}
	}else{
		$obj['url'] = __APP__ ;
		$url = 'http://img.huyionline.cn/default/default.jpg' ;
	}
  //  echo '<a href="'.$obj['url'].'"><img src="'.C('UPLOAD_FILE_RULE').C('USER_CNUM').'/images/advert/m_'.$obj['image'].'" width="'.$obj['width'].'" height="'.$obj['height'].'" /></a>';
   echo '<a href="'.$obj['url'].'"><img src="'.$url.'" width="'.$obj['width'].'" height="'.$obj['height'].'" /></a>';
}
//通过别名获取一张广告2
function getAdOneAlias2($alias){
	$cateDb = M('Category');
	$lang = L('language');
	import ( "ORG.Util.MobileDetect" );
	$detect = new MobileDetect();
	if($detect->isMobile()){
			$hardware = 'mobile';
	}else{
			$hardware = 'pc';
	}
	
	$getCid = $cateDb->where(array('alias' => $alias,'is_publish' => 1,'lang' => $lang))->find();
	$advertDao = M('Advert');
    $obj = $advertDao->where(array('category_id'=>$getCid['id'],'is_publish'=>1,'lang'=>$lang))->order('ordernum desc, id desc')->find();
	if($obj){
		if($obj['net_image']){
			$url = $obj['net_image'];
		}else{
			$url = C('UPLOAD_FILE_RULE').C('USER_CNUM').'/images/advert/m_'.$obj['image'];
		}
	}else{
		$obj['url'] = __APP__ ;
		$url = 'http://img.huyionline.cn/default/default.jpg' ;
	}
   echo '<a href="'.$obj['url'].'"><img src="'.$url.'"/></a>';
  // echo '<a href="'.$obj['url'].'"><img src="'.C('UPLOAD_FILE_RULE').'0_yadmin_v2_1/images/advert/m_'.$obj['image'].'"/></a>';
}
function strigtags($string){
  echo strip_tags(htmlspecialchars_decode($string));
}
function sysInfo($lang){
	$db = M('System');
	$getlang = L('language'); 
	$getinfo = $db->where(array('hardware' => $lang , 'lang' => $getlang))->find();
	return $getinfo;
}

//根据别名获取文章列表
function getNewsByList($alias,$is_home = 1,$hardware = 'pc'){
	$cateDb = M('Category');
	$lang = L('language');
	$getCid = $cateDb->where(array('alias' => $alias,'is_publish' => 1,'lang'=>$lang,'hardware' => $hardware))->find();
	$newsDao = M('News');
	$obj = $newsDao->where(array('category_id'=>$getCid['id'],'is_publish' => 1,'lang'=>$lang,'is_home' => $is_home,'hardware' => $hardware))->order('ordernum desc, id desc')->select();
	return $obj;
}

//产品分类
 function GoodsCate($num){
		$cate =  M('Category');
		import ( "ORG.Util.MobileDetect" );
		$detect = new MobileDetect();
		$cid = $cate->where(array('alias' => 'Goods','is_publish' => 1))->find();
		if($detect->isMobile()){
				$hardware = 'mobile';
		}else{
			$hardware = 'pc';
		}	
		if($num){
			$Ftitle = $cate->where(array('pid' => $cid['id'],'is_publish' => 1,'lang' => L('language'),'hardware' => $hardware))->order('ordernum desc, id desc')->limit($num)->select();
		}else{
		$Ftitle = $cate->where(array('pid' => $cid['id'],'is_publish' => 1,'lang' => L('language'),'hardware' => $hardware))->order('ordernum desc, id desc')->select();}
		return $Ftitle;
	}
//获取公共信息
function commonInfo(){
	    $db = M('Common');
	    $result = $db->find();
		return $result;
}
//获取PC联系信息
function pcContactInfo(){
	$db = M('System');
	$lang = L('language');
	$obj = $db->where(array('hardware' => 'pc' ,'lang' => $lang))->find();
	return $obj;
}
//手机下拉特殊处理
function SpecialTreatment($alias){
	if($alias == 'Goods' || $alias == 'About' || $alias == 'News'){
		return true;
	}else{
		return false;
	}
}
//判断JSON格式
 function json_parser($str){
        $arr = json_decode($str,true);
        if(gettype($arr) != "array"){
            return false;
        }else {
            return $arr;
        }
    }
//判断图片是否存在
function img_exits($ur,$title,$w = 400,$h =400,$m = 'm_',$s = 's_')
{
	$url = $ur.$title;
	//$check = 'http://172.16.9.20/0-Y+09_v2/outPutImg.php?url=';
	$check = 'http://img.huyionline.cn/default/outPutImg.php?url=';
    if(@fopen($url, 'r'))
		echo $check.$url.'&pw='.$w.'&ph='.$h;
	//echo $url;
     //  return true;
    else {
		$url2 = $ur.$m.$titile;
		if(@fopen($url2, 'r')){
		   echo $check.$ur.$m.$title.'&pw='.$w.'&ph='.$h;
		//	echo $ur.$m.$title;
		}else{
			echo $check.$ur.$m.$title.'&pw='.$w.'&ph='.$h;
		//	echo $ur.$s.$title;
		}
	}
    //    return false;
}
//判断是否为空值
function is_empty($obj,$tips='正在建设中...'){
	if(!$obj){
		return $tips;
	}else{
		return $obj;
	}
}
//apple Icon 
function app_icon($part,$app,$index = true){
	if($index == true){
		echo '<link rel="stylesheet" href="'.__PUBLIC__.'/css/add2home.css" type="text/css" charset="utf-8"><link rel="apple-touch-icon" href="'.$part.'/images/mobile/'.$app.'" />'.'<script>var app_logo=\''.$part.'/images/mobile/'.$app.'\';</script>'.'<script type="text/javascript" src="'.__PUBLIC__.'/js/add2home.js"></script>';
	}else{
		echo '<link rel="stylesheet" href="'.__PUBLIC__.'/css/add2home.css" type="text/css" charset="utf-8"><link rel="apple-touch-icon" href="'.$part.'/images/mobile/'.$app.'" />';
	}
}
// 视频播放
function videoPlayer($id=null,$w = 400,$h = 400,$is_return = false){	//宽，高，是否采用返回类型
	if($id == null){
		return false;
	}
	$db = M('Video');
	$result = $db->where(array('is_publish' => 1 , 'id' => $id))->find();
	if($result['is_online'] == 0){
		$theV = __PUBLIC__.'/images/video/'.$result['downfile'];
		$imgs = __PUBLIC__.'/images/video/m_'.$result['image'];
		$str = '<script type="text/javascript" src="'.__ROOT__.'/videoshow/video.js" charset="utf-8"></script>';
		$str .= '<script type="text/javascript">
					player("'.$theV.'",'.$w.','.$h.',0,"'.$imgs.'");
				</script>';
		return $str;
	}else{
		return $result['url'];
	}
}

//根据别名获取第一个单页信息
function oneWidget($alias,$hare = 'mobile'){
	$categoryDao = M('Category','AdvModel');
	$modelDao = M('News');
	$lang = L('language');
	$category = $categoryDao->where( array('alias'=>$alias) )->find();
	$category = $categoryDao->where( array('pid'=>$category['id'], 'is_publish'=>1,'hardware' => $hare , 'lang' => $lang) )->order('ordernum desc')->first();
	$obj = $modelDao->where( array('category_id'=>$category['id'], 'lang'=>$lang, 'is_publish'=>1) )->find();
	return $obj;
}

//根据别名获取分类信息
function cateByAlias($alias){
	$db = M('Category');
	$lang = L('language'); //获取当前语言
	$category = $db->where( array('alias'=>$alias ,'hardware' => 'pc','lang'=>$lang) )->find();
		if(!$category){
			$category = $db->where( array('alias'=>$alias) )->find();
	}
	return $category;
}

//获取后缀名
function extend($file_name)
 {
 $extend =explode("." , $file_name);
 $va=count($extend)-1;
 return $extend[$va];
 }

 //str to Arry
 function getBytes($string) {
 	$bytes = array();
 	for($i = 0; $i < strlen($string); $i++){
 		$bytes[] = ord($string[$i]);
 	}
 	return $bytes;
 }
 function integerToBytes($val) {
 	$byt = array();
 	$byt[0] = ($val & 0xff);
 	$byt[1] = ($val >> 8 & 0xff);
 	$byt[2] = ($val >> 16 & 0xff);
 	$byt[3] = ($val >> 24 & 0xff);
 	return $byt;
 }
//CURL 
 function actionPost($url,$data){ // 模拟提交数据函数
 	$curl = curl_init(); // 启动一个CURL会话
 	curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
 	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
 	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 1); // 从证书中检查SSL加密算法是否存在
 	curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
 	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
 	curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
 	curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
 	curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Post提交的数据包
 	curl_setopt($curl, CURLOPT_COOKIEFILE, 'cookie.txt'); // 读取上面所储存的Cookie信息
 	curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
 	curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
 	$tmpInfo = curl_exec($curl); // 执行操作
 	if (curl_errno($curl)) {
 		echo 'Errno'.curl_error($curl);
 	}
 	curl_close($curl); // 关键CURL会话
 	return $tmpInfo; // 返回数据
 }

//輸出男 or 女
function bog($in){
 
 	switch ($in){
 		case 1: return  '男';break;
 		case 2: return '女';break;
 		default:return  '男';
 	}
 }
function imgPath($str,$type='news',$path = __PUBLIC__){
	if($str == ''){
		return $path.'/images/notImage.jpg';
	}else{
		if($type == 'category'){
			return $path.'/images/'.$type.'/'.$str;
		}else{
			return $path.'/images/'.$type.'/'.'m_'.$str;
		}
	}
}
//获取星期几
function  get_week($date){
	//强制转换日期格式
	$date_str=date('Y-m-d',strtotime($date));
	 
	//封装成数组
	$arr=explode("-", $date_str);

	//参数赋值
	//年
	$year=$arr[0];

	//月，输出2位整型，不够2位右对齐
	$month=sprintf('%02d',$arr[1]);

	//日，输出2位整型，不够2位右对齐
	$day=sprintf('%02d',$arr[2]);

	//时分秒默认赋值为0；
	$hour = $minute = $second = 0;

	//转换成时间戳
	$strap = mktime($hour,$minute,$second,$month,$day,$year);

	//获取数字型星期几
	$number_wk=date("w",$strap);

	//自定义星期数组
	$weekArr=array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");

	//获取数字对应的星期
	return $weekArr[$number_wk];
}


function aop($in){

	switch ($in){
		case 1: return  '上午';break;
		case 2: return '下午';break;
		default:return  '上午';
	}
}



/*
 *function：计算两个日期相隔多少年，多少月，多少天
 *param string $date1[格式如：2011-11-5]
 *param string $date2[格式如：2012-12-01]
 *return array array('年','月','日');
 */
function diffDate($date1,$date2){
	if(strtotime($date1)>strtotime($date2)){
		$tmp=$date2;
		$date2=$date1;
		$date1=$tmp;
	}
	list($Y1,$m1,$d1)=explode('-',$date1);
	list($Y2,$m2,$d2)=explode('-',$date2);
	$Y=$Y2-$Y1;
	$m=$m2-$m1;
	$d=$d2-$d1;
	if($d<0){
		$d+=(int)date('t',strtotime("-1 month $date2"));
		$m--;
	}
	if($m<0){
		$m+=12;
		$y--;
	}
	return array('year'=>$Y,'month'=>$m,'day'=>$d);
}

function encrypt($data) {
	$key = C('KEY_AUTH');
	$prep_code = serialize($data);
	$block = mcrypt_get_block_size('des', 'ecb');
	if (($pad = $block - (strlen($prep_code) % $block)) < $block) {
		$prep_code .= str_repeat(chr($pad), $pad);
	}
	$encrypt = mcrypt_encrypt(MCRYPT_DES, $key, $prep_code, MCRYPT_MODE_ECB);
	return base64_encode($encrypt);
}

function decrypt($str) {
	$key = C('KEY_AUTH');
	$str = base64_decode($str);
	$str = mcrypt_decrypt(MCRYPT_DES, $key, $str, MCRYPT_MODE_ECB);
	$block = mcrypt_get_block_size('des', 'ecb');
	$pad = ord($str[($len = strlen($str)) - 1]);
	if ($pad && $pad < $block && preg_match('/' . chr($pad) . '{' . $pad . '}$/', $str)) {
		$str = substr($str, 0, strlen($str) - $pad);
	}
	return unserialize($str);
}


function sendSM($phone = NULL,$data = NULL){
	if(empty($phone) || empty($data)){
		return false;
	}
	$ch = curl_init();
	$timeout = 20;
	$url = C('SEND_SM_URL');
	$post_data = array(
		 "account"=> C('SEND_SM_UNAME'),
		 "pswd"=> C('SEND_SM_PW'),
		 "mobile"=> $phone,
		 "msg"=>$data.''.C('SEND_SM_SIGN'),
		 "needstatus"=>"true",
		 "product"=>'',
		 "extno"=>''
	);
	$post_data_str =  http_build_query($post_data);
	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//post数据
	curl_setopt($ch, CURLOPT_POST, 1);
	//post的变量
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data_str);
	$file_contents = curl_exec($ch);
	curl_close($ch);
	return $file_contents;
}

function sendNum($in){

	switch ($in){
		case 0: return  '未发送';break;
		case 1: return "<span style='color:red'>已发送</span>";break;
		default:return  '未发送';
	}
}
function echoSubTitle($id){
	$obj = M('SubCategory')->where(array('id' => $id))->find();
	return $obj['title'];
}

function isFat($num){
	switch ($num){
		case 1: return  '都胖';break;
		case 2: return  "母胖";break;
		case 3: return  "父胖";break;
		case 3: return  "都不胖";break;
		default:return  '都胖';
	}
}

function yon($num){
	switch ($num){
		case 1: return  '无';break;
		case 2: return  "有";break;
		default:return  '无';
	}
}

//计算 bmi $h 高度cm ;$w kg ;$y 岁; $s 性别 1男，2女
function bmi($h,$w,$y,$s){
	
	$h = $h/100;
	$result['bmi'] =  round($w/($h*$h),2);
	
	
	//根据年龄
	$y = 12*$y;
	$data = M('Bmi')->where(array('month' =>$y,'sex' =>$s ))->find();
	
	if($data){
		if ( $result['bmi'] <= $data['p3'] ){
			$result['info'] = '轻体重';
			$result['percent'] = 3;
		}
		if ( $data['p3'] <= $result['bmi'] &&  $result['bmi'] < $data['p10']){
			$result['info'] = '轻体重';
			$result['percent'] = '3-10';
		}
		if ($data['p10'] <= $result['bmi'] &&  $result['bmi'] < $data['p25']){
			$result['info'] = '轻体重';
			$result['percent'] = '10-25';
		}
		if ( $data['p25'] <= $result['bmi'] && $result['bmi'] <  $data['p50']){
			$result['info'] = '正常';
			$result['percent'] = '25-50';
		}
		if ( $data['p50'] <= $result['bmi'] && $result['bmi'] <  $data['p75']){
			$result['info'] = '超重';
			$result['percent'] = '50-75';
		}
		if ( $data['p75'] <= $result['bmi'] && $result['bmi'] <  $data['p85']){
			$result['info'] = '肥胖';
			$result['percent'] = '75-85';
		}
		if ( $data['p85'] <= $result['bmi'] && $result['bmi'] <  $data['p90']){
			$result['info'] = '肥胖';
			$result['percent'] = '85-90';
		}
		if ( $data['p90'] <= $result['bmi'] && $result['bmi'] <  $data['p95']){
			$result['info'] = '肥胖';
			$result['percent'] = '90-95';
		}
		if ( $data['p95'] <= $result['bmi'] && $result['bmi'] <  $data['p97']){
			$result['info'] = '肥胖';
			$result['percent'] = '95-97';
		}
		if ( $data['p97'] <= $result['bmi']){
			$result['info'] = '肥胖';
			$result['percent'] = 97;
		}
	}
	
	return $result;
}

//身高计算 $h 身高cm y岁 s 性别
function hCount($h,$y,$s){
	//根据年龄
	$y = 12*$y;
	$data = M('Height')->where(array('month' =>$y,'sex' =>$s ))->find();
	
	if($data){
		if ( $h < $data['p3']){
			$result['info'] = '异常矮小';
			$result['percent'] = 3;
			
		}
		
		if ( $data['p3'] <= $h && $h <  $data['p10']){
			$result['info'] = '异常矮小';
			$result['percent'] = '3-10';
			
		}
		if ( $data['p10'] <= $h && $h <  $data['p25']){
			$result['info'] = '偏矮';
			$result['percent'] = '10-25';
			
		}
		if ( $data['p25'] <=  $h && $h <  $data['p50']){
			$result['info'] = '正常偏低';
			$result['percent'] = '25-50';
			
		}
		
		if ( $data['p50'] ==  $h ){
			$result['info'] = '正常';
			$result['percent'] = '50';
			
		}
		if ( $data['p50'] <  $h && $h <  $data['p75']){
			$result['info'] = '正常偏高';
			$result['percent'] = '50-75';
			
		}
		if ( $data['p75'] <= $h && $h <  $data['p90']){
			$result['info'] = '偏高';
			$result['percent'] = '75-90';
			
		}
		if ( $data['p90'] <= $h && $h <  $data['p97']){
			
			$result['info'] = '很高';
			$result['percent'] = '90-97';
			
		}
		if ( $data['p97'] <= $h){
			$result['info'] = '很高';
			$result['percent'] = 97;
			
		}
	
	}
	
	return $result;
}
//身高风险
function hRisk($p){
	if($p <= 3){
		$return = 9.5;
	}
	if(3 <$p && $p <= 10){
		$return = 9;
	}
	if(10 <$p && $p <= 25){
		$return = 8;
	}
	if(25 <$p && $p <= 50){
		$return = 5;
	}
	if (50 <$p){
		$return = 0;
	}
	return $return;
}

//体重计算 $h 身高cm y岁 s 性别
function wCount($w,$y,$s){
	//根据年龄
	$y = 12*$y;
	$data = M('Weight')->where(array('month' =>$y,'sex' =>$s ))->find();
	if($data){
		if ( $w < $data['p3']){
			$result['info'] = '异常瘦';
			$result['percent'] = 3;
		}
		if ( $data['p3'] <= $w && $w <  $data['p10']){
			$result['info'] = '瘦';
			$result['percent'] = '3-10';
		}
		if ( $data['p10'] <= $w && $w <  $data['p25']){
			$result['info'] = '正常偏瘦';
			$result['percent'] = '10-25';
		}
		if ( $data['p25'] <=  $w && $w <  $data['p50']){
			$result['info'] = '中等';
			$result['percent'] = '25-50';
		}
		if ( $data['p50'] <= $w && $w <  $data['p75']){
			$result['info'] = '正常偏胖';
			$result['percent'] = '50-75';
		}
		if ( $data['p75'] <= $w && $w <  $data['p90']){
			$result['info'] = '偏胖';
			$result['percent'] = '75-90';
		}
		if ( $data['p90'] <= $w && $w <  $data['p97']){
			$result['info'] = '胖';
			$result['percent'] = '90-97';
		}
		if ( $data['p97'] <= $w){
			$result['info'] = '很胖';
			$result['percent'] = 97;
		}

	}
	return $result;
}

//体重风险
function wRish($w,$b,$s){
	if($s <= 2){ // 2岁之前
		if(40 < $w ){
			$result = 9.5;
		}
		if( $w < 30 && $w <= 40 ){
			$result = 9;
		}
		if(20 < $w && $w <= 30){
			$result = 9;
		}
		if($w = 20 ){
			$result = 8;
		}
		if($w < 20){
			$result = 0;
		}
	}else{
		if ( 85 <=$b){
			$result = 9.5;
		}
		if ( 75 <=$b && $b < 85){
			$result = 8;
		}
		if ( $b < 75){
			$result = 0;
		}
	}
	return $result;
}

//计算遗传身高 fh 父亲身高cm mh母亲身高 s性别
function heredityH($fH,$mH,$s){
	if($s == 1){
		$result['H'] = ($fH+$mH+10)/2;
	}
	if ($s == 2){
		$result['H'] = ($fH+$mH-10)/2;
	}
	
	//计算范围
	$result['range'] = ($result['H']-8).'-'.($result['H']+8);
	return $result;
}

//预测身高
//身高计算 $h 身高cm y岁 s 性别
function predicteH($h,$y,$s){
	//根据年龄
	$y = 12*$y;
	$data = M('Height')->where(array('month' =>$y,'sex' =>$s ))->find();
	if($data){
		if ( $h < $data['p3']){
			$ser = 'p3';
		}
		if ( $data['p3'] <= $h && $h <  $data['p10']){
			$ser = 'p10';
		}
		if ( $data['p10'] <= $h && $h <  $data['p25']){
			$ser = 'p25';
		}
		if ( $data['p25'] <=  $h && $h <  $data['p75']){
			$ser = 'p75';
		}
		if ( $data['p75'] <= $h && $h <  $data['p90']){
			$ser = 'p90';
		}
		if ( $data['p90'] <= $h && $h <  $data['p97']){
			$ser = 'p97';
		}
		if ( $data['p97'] <= $h){
			$ser = 'p97';
		}
	
	}
	$result = M('Height')->where(array('month' => 216,'sex' => $s))->find();
	return $result[$ser];
}

//获取一个时间的周一和周末
function getWeekSE($date){
	$sdefaultDate = $date;
	//$first =1 表示每周星期一为开始日期 0表示每周日为开始日期
	$first=1;
	//获取当前周的第几天 周日是 0 周一到周六是 1 - 6
	$w=date('w',strtotime($sdefaultDate));
	//获取本周开始日期，如果$w是0，则表示周日，减去 6 天
	$week_start=date('Y-m-d',strtotime("$sdefaultDate -".($w ? $w - $first : 6).' days'));
	//本周结束日期
	$week_end=date('Y-m-d',strtotime("$week_start +6 days"));

	$return['st'] = $week_start;
	$return['et'] = $week_end;
	return $return;
}

//发育过快
function dtof($h){
	$result = 0;
	
	if( 97 <= $h){
		$result = 9.5;
	}
	if( 90 <= $h  && $h < 97 ){
		$result = 9;
	}
	if( 75 < $h  && $h < 90 ){
		$result = 6;
	}
	
	return $result;
} 

//慢性病风险
function mxb($h,$w){
	$obj = 0;
	if($h >= 75 && $w <50 ){
		$obj = 6.5;
	}
	if ($h <= 25 ){
		$obj = 7.5;
	}
	if($w >= 50 ){
		$obj = 8.5;
	}
	if($w >= 50 ){
		$obj = 8.5;
	}
	if($w >= 50 && $h <= 25 ){
		$obj = 9.5;
	}
	return $obj;
}

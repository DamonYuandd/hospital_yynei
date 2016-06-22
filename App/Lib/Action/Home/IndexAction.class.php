<?php
/**
 *
 * 首页控制器
 * @author uclnn
 *
 */
class IndexAction extends HomeAction
{
	function _initialize() {
		parent::_initialize();
		
	if( $this->is_mobile==true ) {
		$maction = A("Home.Mobile");
			if( ACTION_NAME=='downLoad' ) {
				$this->m_downLoad();exit;
			}else if(ACTION_NAME == 'index'){
				$this->indexGoods();
				$aboutInfo = getNewsByAlias('About/introduction');
				if(!$aboutInfo){
					$aboutInfo = getNewsByAlias('About/indexInfo');
					if(!$aboutInfo){
						$aboutInfo = oneWidget('About');
					}
				}
				if($this->mobile_theme == 'ZM00001'){
					$maction->newsList($_GET['cid'],10,'News',1);
				}
				$this->assign('aboutInfo',$aboutInfo);
				$this->videoShow();
				$is_home_contact = $maction->m_mobileContact('is_home');
				$this->assign('home_contact',$is_home_contact);
				$this->m_index();exit;
			}
		}
		
	}

	public function index() {	
		$this->indexGoods();
		$this->assign('indexNews',getNewsByAlias('About/indexInfo'));
		$this->assign('goodsCate',GoodsCate()); //产品分类
		$this->assign('indexNewsList',$this->indexNewsList('News'));

		$order = 'ordernum desc,id desc';
		//获取育儿宝典cates info
		$cate1 = M('Category')->where(array('id'=>1519,'is_publish'=>1))->find(); //矮小
		$news1 = M('News')->where(array('category_id'=>$cate1['id'],'is_publish'=>1,'is_home'=>1))->order($order)->limit(6)->select(); //矮小
		
		$cate2 = M('Category')->where(array('id'=>1520,'is_publish'=>1))->find(); //矮小
		$news2 = M('News')->where(array('category_id'=>$cate2['id'],'is_publish'=>1,'is_home'=>1))->order($order)->limit(6)->select(); //矮小
		
		
		$cate3 = M('Category')->where(array('id'=>1521,'is_publish'=>1))->find(); //矮小
		$news3 = M('News')->where(array('category_id'=>$cate3['id'],'is_publish'=>1,'is_home'=>1))->order($order)->limit(6)->select(); //矮小
		
		$cate4 = M('Category')->where(array('id'=>1522,'is_publish'=>1))->find(); //矮小
		$news4 = M('News')->where(array('category_id'=>$cate4['id'],'is_publish'=>1,'is_home'=>1))->order($order)->limit(6)->select(); //矮小
		
		
		
		//新闻
		$newsCate1 = M('Category')->where(array('id'=>1533,'is_publish'=>1))->find(); //矮小
		$newsList1 = M('News')->where(array('category_id'=>$newsCate1['id'],'is_publish'=>1,'is_home'=>1))->order($order)->limit(6)->select(); //矮小
		
		$newsCate2 = M('Category')->where(array('id'=>1534,'is_publish'=>1))->find(); //矮小
		$newsList2 = M('News')->where(array('category_id'=>$newsCate2['id'],'is_publish'=>1,'is_home'=>1))->order($order)->limit(6)->select(); //矮小
		
		$newsCate3 = M('Category')->where(array('id'=>1535,'is_publish'=>1))->find(); //矮小
		$newsList3 = M('News')->where(array('category_id'=>$newsCate3['id'],'is_publish'=>1,'is_home'=>1))->order($order)->limit(6)->select(); //矮小
		
		$newsCate4 = M('Category')->where(array('id'=>1536,'is_publish'=>1))->find(); //矮小
		$newsList4 = M('News')->where(array('category_id'=>$newsCate4['id'],'is_publish'=>1,'is_home'=>1))->order($order)->limit(6)->select(); //矮小
		
		$newsCate5 = M('Category')->where(array('id'=>1537,'is_publish'=>1))->find(); //矮小
		$newsList5 = M('News')->where(array('category_id'=>$newsCate5['id'],'is_publish'=>1,'is_home'=>1))->order($order)->limit(6)->select(); //矮小
		
		// 广告
		$indexAds = M('Advert')->where(array('category_id' => 1539,'is_publish' => 1))->order('ordernum desc,id desc')->limit(5)->select();
		
		
		
		$this->assign('cate1',$cate1);
		$this->assign('news1',$news1);
		$this->assign('cate2',$cate2);
		$this->assign('news2',$news2);
		$this->assign('cate3',$cate3);
		$this->assign('news3',$news3);
		$this->assign('cate4',$cate4);
		$this->assign('news4',$news4);
		
		$this->assign('newsCate1',$newsCate1);
		$this->assign('newsList1',$newsList1);
		$this->assign('newsCate2',$newsCate2);
		$this->assign('newsList2',$newsList2);
		$this->assign('newsCate3',$newsCate3);
		$this->assign('newsList3',$newsList3);
		$this->assign('newsCate4',$newsCate4);
		$this->assign('newsList4',$newsList4);
		$this->assign('newsCate5',$newsCate5);
		$this->assign('newsList5',$newsList5);
		
		$this->assign('indexAds',$indexAds);
		
	
		
		$this->display($this->web_theme.':Index:index');
	}
	//首页新闻列表
	public function indexNewsList($alias){
		$cate = M('Category');
		$Cid = $cate->where(array('alias'=> $alias,'is_publish'=>1))->find();
		if( $this->is_mobile==true ) {
			$hardware = 'mobile';
		}else{
			$hardware = 'pc';
		}
		$Ftitle = $cate->where(array('pid' => $Cid['id'],'hardware' => $hardware,'is_publish' => 1,'lang' => L('language')))->select();
		foreach($Ftitle as $key => $value){
			$newsCid .= ','.$value['id'];
		}
		$newsCid = $Cid['id'].$newsCid;
		$db = M('News');
		$result = $db->where('category_id in ('.$newsCid.') and lang = \''.L('language').'\' and is_home = 1')->order('is_top desc, ordernum desc, create_time desc')->select();
		return $result;
	}
	//首页产品
	public function indexGoods(){
		$cdb = M('Category');
		$al = 'Goods';
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
		//获取曾孙类
		$zs = $cdb->where(array('pid' => array('in',$newsCid)))->select();
		foreach($zs as $key => $value){
			$newsCid .= ','.$value['id'];
		}
		$db = M('Goods');
		$result = $db->where(array('category_id'=>array('in',$newsCid),'is_home' => 1, 'is_publish' => 1,'hardware' => $hardware,'lang'=>L('language')))->order('is_top desc, ordernum desc, create_time desc')->select();
		$this->assign('list',$result);
	}
	public function m_index() {
		$this->assign('headTitle', $this->system['seo_title']);
		$this->display($this->mobile_theme.':Index:index');
	}
	
	public function m_downLoad()
	{
		if($_GET['hw'] == 'pc' || !$_GET['hw']){	//下载PC的联系信息
			$obj = pcContactInfo();
			$getdata = 'ADR:'.$obj['address']."\n"	//获取联系信息
			.'TEL;CELL:'.$obj['telephone']."\n"
			.'EMAIL:'.$obj['email']."\n";  
				
			$str='BEGIN:VCARD'."\n".'VERSION:2.1'."\n"	//整合联系方式
				.'N;CHARSET=UTF-8;ENCODING=QUOTED-PRINTABLE:'.$obj['company'].';'."\n"
				.$getdata
				.'END:VCARD';
			}else if($_GET['hw'] == 'mobile'){		//下载手机版的联系信息
				$lang = L('language');
				$db = M('mobile_contact');
				$system = M('system');
				$sysInfo = $system->where(array('hardware'=> 'mobile','lang' => $lang))->find();
				$data = $db->where(array('hardware'=> 'mobile','lang' => $lang))->select();
				for($i=0;$i<count($data);$i++)
				{
					if($data[$i]['content_type'] == 'address')
					{
						$data[$i]['get'] = 'ADR:'.$data[$i]['content']."\n";
					}					
					if($data[$i]['content_type'] == "phone")
					{
						$data[$i]['get'] = 'TEL;CELL:'.$data[$i]['content']."\n";
					}
					if($data[$i]['content_type'] == "mail")
					{
						$data[$i]['get'] = 'EMAIL:'.$data[$i]['content']."\n";
					}
					
					
					$getdata .= $data[$i]['get'];
				}
				$str='BEGIN:VCARD'."\n".'VERSION:2.1'."\n"
				.'N;CHARSET=UTF-8;ENCODING=QUOTED-PRINTABLE:'.$sysInfo['company'].';'."\n"
				.$getdata
				.'END:VCARD';
			}
			$file_name = '1.vcf';
			$file_path = realpath(dirname(__FILE__));
			$byte = file_put_contents($file_name,$str);
			if($byte > 0) {
				
				if(!file_exists($file_path)){
					echo $file_path;
					$this->error('找不到文件');
				}
				//$fp=fopen($file_path,"r");
				$fp=fopen($file_path,"r");
				$file_size=filesize($file_path);
				//下载文件需要用到的头
				Header("Content-type: application/octet-stream");
				Header("Accept-Ranges: bytes");
				Header("Accept-Length:".$file_size);
				Header("Content-Disposition: attachment; filename=".basename($file_name));
				readfile($file_name);
			}else
			{
				echo "网络原因导致失败";
			}
	}
	//验证码生成
	public function verify() {
		$type = isset ( $_GET ['type'] ) ? $_GET ['type'] : 'gif';
		import ( "ORG.Util.Image" );
		Image::buildImageVerify ( 4, 1, $type );
	}
	//二维码方法
public function erweima(){
	if($_GET['hw'] == 'pc' || !$_GET['hw']){
		$hw = 'pc';
	}else{
		$hw = 'mobile';
	}
	$db = M('System');
	$lang = L('language');
	$br = ";\r\n";
	import ( "ORG.Util.Phpqrcode" );
	if($hw == 'pc'){ //PC的联系信息
		$obj = $db->where(array('hardware' => 'pc' ,'lang' => $lang))->find();
	}else{
		$mdb = M('MobileContact');
		$result = $mdb->where(array('hardware' => 'mobile','lang' => $lang,'is_contact' => 1,'is_publish' => 1))->select();
	}
	if($hw == 'pc'){
	$data = '公司名称：'.$obj['company'].$br.'联系人：'.$obj['linkman'].$br.'电话：'.$obj['telephone'].$br.'联系地址：'.$obj['address'].$br.'E-mail：'.$obj['email'].$br."\r\n\r\n".'收藏名片：'.'http://'.$_SERVER['HTTP_HOST'].'/0-Y+09_v2/index.php/Index/m_downLoad/hw/'.$hw;
	}else{
		if(!$_GET['url']){
			$data .='http://'.$_SERVER['HTTP_HOST'].'/index.php/Index';
	    }else{
			$data .= 'http://'.$_GET['url']; 
		} 
	//	$data .='链接网址：'.'http://'.$_GET['url']; 
		//$data .= '收藏名片：'.'http://'.$_SERVER['HTTP_HOST'].'/index.php/Index/m_downLoad/hw/'.$hw;
	}
	$level = 'L';
    $size = 4;
	QRcode::png($data, false, $level, $size);
	}
	
	public function curlApi(){
		
		header("Content-type:text/html;charset=utf-8");
		$url = 'http://120.24.45.172:8080/child-server/user/login/getcode';
		$KEY_UDB = "F77F7F308841AO23F0934DC7";
		$KEYIV_UDB = "01020312";
		$phone = 13550265589;
		
		 
		//获取二进制
		$bbb = sha1($phone);
		$cha2 = base64_encode($bbb);
		require THINK_PATH.'/Lib/ORG/Des.class.php';
		$crypt = new DES($KEY_UDB,$KEYIV_UDB);
		$encodeData = base64_encode($crypt->encrypt($phone));
		
		$arr['SHA1'] = $cha2;
		$arr['data'] = $encodeData;
		$arr['sys'] = array(
				"clientType" => "android",
				"curVersion"=> "1.00.01",
				"deviceType"=>  "samsung note4",
				"deviceId"=> "123132131",
				"lat"=> "23.3232",
				"lon"=> "113.1231",
				"ip"=>"10.10.10.10"
			);
		
		
		
		$postData['phone'] = json_encode($arr).'$child';
	
		
		//$data['phone'] = $str;
		$result = actionPost($url,$postData);
		
		dump($result);
		exit;
	}
	
	public function momTelk(){
		$data = M('News')->where(array('is_publish' => 1,'is_mom' => 1))->order('is_mom desc')->select();
		if(count($data) > 5){
			$num = 5;
		}else{
			$num = count($data);
		}
		$arr = array_rand($data,$num);
		foreach($arr as $k => $v){
			$aa[] = $data[$v];
		}
		$this->assign('data',$aa);
		$this->display();
	}
	
	public function buildImg(){
		if(empty($_GET['key'])){
			return false;
		}else{
			$str1 = rawurldecode($_GET['key']);
			$str = json_decode(base64_decode($str1),true);
			$list = M('diagnosis')->where(array('phone' => $str))->order('c_years asc')->select();
			if (!$list){
				return false;
			}
		}
		
		//获取性别
		$gender = $list[0]['gender'];
		//require_once __ROOT__.'/Thinkphp/Lib/ORG/jpgraph/jpgraph.php'; 
		//require_once __ROOT__.'/Thinkphp/Lib/ORG/jpgraph/jpgraph_line.php';
		require(THINK_PATH."/Lib/ORG/jpgraph/jpgraph.php");
		require(THINK_PATH."/Lib/ORG/jpgraph/jpgraph_line.php");
		// Some data
		$dataW = $this->returnArr('w',$gender);
		
		$dataH = $this->returnArr('h',$gender);
		// Create the graph. These two calls are always required
		$graph = new Graph(500,700);
		//dump($graph);
		//exit;
		$graph->SetScale("intlin",0,$aYMax=200,0,$aXMax=20);
		$graph->SetY2Scale("lin"); // Y2 axis
		//$graph->img->SetMargin(60, 30 , 10 , 40) ; //设置图表边界
		$graph->SetMargin(70,60,40,45);
		$graph->SetShadow();
		$graph->xaxis->HideTicks(false,false);
		$graph->yaxis->HideTicks(false,false);
		
	
		//$graph->SetAxisStyle(AXSTYLE_YBOXOUT);
		//设置文字提示
		$graph->title->Set(iconv("UTF-8","GB2312//IGNORE","儿童生长曲线")) ; //设置图表标题
		$graph->title->SetFont(FF_SIMSUN,FS_BOLD); // 设置中文字体
		$graph->yaxis->title->Set(iconv("UTF-8","GB2312//IGNORE","身高(cm)"));
		$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD); // 设置中文字体
		$graph->xaxis->title->Set(iconv("UTF-8","GB2312//IGNORE","年龄(岁)"));
		$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD); // 设置中文字体
		
		foreach($dataW as $k => $v){
			$pdata = null;
			$lineplot = null ;
			$pdata = $dataW[$k];
			$lineplot = new LinePlot($pdata); //创建新的LinePlot对象
			//$lineplot->SetLegend('weight:'.$k.'0');//设置图例文字s
			$graph->Add($lineplot); //在统计图上绘制曲线
		}
		$graph->y2axis->title->Set(iconv("UTF-8","GB2312//IGNORE","体重(kg)"));
		$graph->y2axis->title->SetFont(FF_SIMSUN,FS_BOLD); // 设置中文字体
		$graph->y2axis->title->SetMargin(20);
		foreach($dataH as $k => $v){
			$pdata = null;
			$lineplot = null ;
			$pdata = $dataH[$k];
			$lineplot = new LinePlot($pdata); //创建新的LinePlot对象
			$lineplot->SetLegend(str_replace('p','',$k).'0');//设置图例文字s
			$graph->AddY2($lineplot); //在统计图上绘制曲线
		}
		
		//设置高
		foreach ($list as $k => $v){
			$hArr[$v['c_years']] = $v['height'];
		}
		for($i=0;$i<20;$i++){
			if($hArr[$i]){
				continue;
			}else{
				$hArr[$i] = '';
			}
		}
		ksort($hArr);
		
		//$hArr = array('',80);
		$lineplot=new LinePlot($hArr);
		$lineplot->SetColor( 'blue' );
		$lineplot->SetWeight(2); 
		$lineplot->mark->SetType(MARK_IMG_BALL,'yellow',1);
		$lineplot->SetLegend(iconv("UTF-8","GB2312//IGNORE","身高"));//设置图例文字s
		$graph->Add($lineplot);
		//肥胖
		foreach ($list as $k => $v){
			$wArr[$v['c_years']] = $v['weight'];
		}
		for($i=0;$i<20;$i++){
			if($wArr[$i]){
				continue;
			}else{
				$wArr[$i] = '';
			}
		}
		ksort($wArr);
		//$wArr = array('',18);
		
		$lineplot2=new LinePlot($wArr);

		$lineplot2->mark->SetType(MARK_IMG_BALL,'red',1);
		$lineplot2->SetLegend(iconv("UTF-8","GB2312//IGNORE","体重"));//设置图例文字s
		$graph->Add($lineplot2);
		$graph->legend->SetLayout(5);
		$graph->Stroke() ; //输出图像*/
		
	}
	
	//返回体重数组 1男  2女
	private function returnArr($type = 'w',$sex = 1){
		if($type == 'w'){
			$arr = M('Weight')->where(array('sex' => $sex))->order('month asc')->select();
		}
		if($type == 'h'){
			$arr = M('Height')->where(array('sex' => $sex))->order('month asc')->select();
		}
		
		foreach($arr as $k => $v){
			if($v['month']%12 == 0){
				$returnArr['p3'][] = $v['p3'];
				$returnArr['p10'][] = $v['p10'];
				$returnArr['p25'][] = $v['p25'];
				$returnArr['p50'][] = $v['p50'];
				$returnArr['p75'][] = $v['p75'];
				$returnArr['p90'][] = $v['p90'];
				$returnArr['p97'][] = $v['p97'];
			}
		}
		
		return $returnArr;
	}
	
	public function ftest(){
	
		//计算bmi
		$w = $_GET['w'];
		$h = $_GET['h'];
		$y = $_GET['y'];
		$s = $_GET['s'];
		//$bmi = bmi($h,$w,$y,$s);
		//dump($bmi);
		
		$h = predicteH($h,$y,$s);
		dump($h);
	}
}
?>
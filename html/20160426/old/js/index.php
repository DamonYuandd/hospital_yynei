<?php
session_start();
include "includeFiles.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $C['Title'];?></title>
<Link href="./uploadfile/ico/<?php echo $C['ICO'];?>" rel="Shortcut Icon">
<meta name="Keywords" content="<?php echo $C['Keywords'];?>">
<meta name="description" content="<?php echo $C['Description'];?>">
<Meta name="Copyright" Content="<?php echo $C['CopyRight'];?>">
<link href="/favicon.ico" rel="shortcut icon">
<link rel="stylesheet" href="css/normalize.css" type="text/css" />
<link rel="stylesheet" href="css/css.css" type="text/css" />
<script src="js/html5.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
</head>

<body>
<?php
include "online_qq.php";
?>
<header class="hea">
	<div id="header" class="w1000">
    	<h1 class="logo pr"><a class="position"></a></h1>
        <nav>
        <ul>
        	<li><a href="javascript:;" title="首页" id="home">首页</a></li>
            <li><a href="javascript:;" title="关于我们" id="about">关于我们</a></li>
            <li><a href="javascript:;" title="新闻中心" id="news">新闻中心</a></li>
            <li class="pop-window-ev"><a href="javascript:;" date-url="tfhl" title="头发护理">头发护理</a></li>
            <li><a href="javascript:;" title="产品展示" id="product">产品展示</a></li>
            <li><a href="javascript:;" title="防伪查询" id="security">防伪查询</a></li>
            <li><a href="javascript:;" title="代理查询" id="proxy">代理查询</a></li>
            <li class="pop-window-ev"><a href="javascript:;" date-url="job" title="招聘信息">招聘信息</a></li>
            <li><a href="http://weibo.com/u/3013385433" title="官方微博" target="_blank">官方微博</a></li>
            <li><a href="javascript:;" title="在线留言" id="message">在线留言</a></li>
        </ul>
        </nav>
    </div>
</header>
<div class="header-sapce home-scroll-area"></div>
<div id="banner-warp">
	<ul class="adv">
     <?
	   $sql = " select * from hy_b_link where CateID = '110'";
	   $objDb->query($sql);
	   $msg = $objDb->get_Data();
	   $i=0;
	   if($msg){
	      foreach($msg as $key=>$value){
	?>
    	<li><img src="uploadfile/link/<?=$value['LogoPic']?>" alt="<?=$value['LinkName']?>"></li>
        
            <? $i++; }} ?>
    </ul>
</div>

<div class="container">
	<!--关于我们-->
    <section class="about-sec section-warp about-scroll-area">
        <header>
            <h4 class="sec-title about pop-window-ev"><a date-url="about" href="javascript:;" class="position" title="关于我们">关于我们</a></h4>
        </header>
        <div class="txt ta-c">
              <?php	$value=$info->getAboutNews(110); ?>
         <? echo $value[0]['Content']? getsubstr($value[0]['Content'],50):"正在建设中";?> 
        </div>
        <div class="icon-pic ta-c">
        <a title="" class="qy txt-hide">公司起源</a>
        <a title="" class="wh txt-hide">公司文化</a>
        <a title="" class="zj txt-hide">产品足迹</a>
        <a title="" class="td txt-hide">团队语录</a>
        <a title="" class="cp txt-hide">蜗蜗产品</a>
        </div>
        <div class="open-btn ta-c pop-window-ev"><a date-url="about" href="javascript:;" class="btn"></a></div>
    </section>
</div>
<hr class="bd-ed">
<div class="container">
	<!--新闻中心-->
    <section class="news-sec section-warp news-scroll-area">
        <header>
            <h4 class="sec-title news pop-window-ev"><a href="javascript:;" date-url="news" class="position" title="新闻中心">新闻中心</a></h4>
        </header>
        <ul class="menu ta-c tab-menu">
        	<li class="active"><a title="公司新闻">公司新闻</a></li>
            <li><a title="公司公告">公司公告</a></li>
            <li><a title="行业新闻">行业新闻</a></li>
        </ul>
        <div class="news-list tab-box pop-window-ev">
        	<!--公司新闻-->
        	<div>
            <ul class="clearfix">
            
                <?
	   $sql = " select * from hy_b_info where cateid like '11110%' limit 3 ";
	   $objDb->query($sql);
	   $msg = $objDb->get_Data();
	   if($msg){
	      foreach($msg as $key=>$value){
	?>
            	<li>
                	<h4>
                        <a href="javascript:;" date-url="news_show.php?id=<?=$value['InfoID']?>" title="<?=$value['Title']?>" id="<?=$key+1?>">
             <?=$value['Title']?>
                        </a>
                    </h4>
                    <div class="info"><?=getsubstr($value['Content'],150)?></div>
                    <div class="open-btn"><a date-url="news_show.php?id=<?=$value['InfoID']?>" href="javascript:;" class="btn" id="<?=$key+1?>"></a></div>
                    <i></i>
                </li>
                 <? }} ?>
                
            </ul>
            </div>
            
            <!--公司公告-->
        	<div class="dis-n">
            <ul class="clearfix">
                
                
                <?
	   $sql = " select * from hy_b_info where cateid like '11111%' limit 3 ";
	   $objDb->query($sql);
	   $msg = $objDb->get_Data();
	   $i= 4;
	   if($msg){
	      foreach($msg as $key=>$value){
	?>
            	<li>
                	<h4>
                        <a href="javascript:;" date-url="news_show.php?id=<?=$value['InfoID']?>" title="<?=$value['Title']?>" id="<?=$i?>">
             <?=$value['Title']?>
                        </a>
                    </h4>
                    <div class="info"><?=getsubstr($value['Content'],150)?></div>
                    <div class="open-btn"><a date-url="news_show.php?id=<?=$value['InfoID']?>" href="javascript:;" class="btn" id="<?=$i?>"></a></div>
                    <i></i>
                </li>
                 <? $i++; }} ?>
            </ul>
            </div>
            
            <!--行业新闻-->
        	<div class="dis-n">
            <ul class="clearfix">
            	 
                <?
	   $sql = " select * from hy_b_info where cateid like '11112%' limit 3 ";
	   $objDb->query($sql);
	   $msg = $objDb->get_Data();
	   $i= 7;
	   if($msg){
	      foreach($msg as $key=>$value){
	?>
            	<li>
                	<h4>
                        <a href="javascript:;" date-url="news_show.php?id=<?=$value['InfoID']?>" title="<?=$value['Title']?>" id="<?=$i?>">
             <?=$value['Title']?>
                        </a>
                    </h4>
                    <div class="info"><?=getsubstr($value['Content'],150)?></div>
                    <div class="open-btn"><a date-url="news_show.php?id=<?=$value['InfoID']?>" href="javascript:;" class="btn" id="<?=$i?>"></a></div>
                    <i></i>
                </li>
                 <? $i++; }} ?>
            </ul>
            </div>
        </div>
    </section>
</div>

<div class="in-pro-warp product-scroll-area">
	<div class="container">
    	<div class="pro-box">
        <a href="javascript:;" class="next"></a>
        <a href="javascript:;" class="prev"></a>
        <ul class="pop-window-ev">

        <?
       $sql = " select * from hy_b_sys_products order by ModifiedDate desc";
       $objDb->query($sql);
       $msg = $objDb->get_Data();
       if($msg){
          foreach($msg as $key=>$value){
        ?>

        	<figure>
            <a href="javascript:;" class="position" date-url="product_show" id="<?=$value['SysProductsID']?>">
            	<img src="../uploadfile/product/<?=$value['FirstPhoto']?>" alt="<?=$value['ProductName']?>">
            	
            </a>
            </figure>
            <? }}?>
            
            <figure class="more">
            	<a href="javascript:;" class="txt-hide" date-url="product.php?id=2" id="2">蜗蜗品牌产品</a>
            </figure>
        </ul>
        </div>
    </div>
</div>

<div class="container">
	<!--蜗蜗视频-->
    <section class="video-sec section-warp security-scroll-area proxy-scroll-area">
        <header>
            <h4 class="sec-title video"><a href="javascript:;" class="position" title="防伪查询">蜗蜗视频</a></h4>
        </header>
        <div class="news-list tab-box pop-window-ev">
            <!--公司新闻-->
            <div>
            <ul class="clearfix">
            <li>
            	<a href="javascript:;" date-url="video001" title="90后蜗蜗品牌创始人的故事" id="1">
                <img src="images/video001.jpg" alt="" style="margin: auto;">
                </a>
                <h4>
                    <a href="javascript:;" date-url="video001" title="90后蜗蜗品牌创始人的故事" id="1">90后蜗蜗品牌创始人的故事</a>
                </h4>
            </li>  
            <li>
            	<a href="javascript:;" date-url="video002" title="90后蜗蜗品牌创始人的故事" id="1">
                <img src="images/video002.jpg" alt="" style="margin: auto;">
                </a>
                <h4>
                    <a href="javascript:;" date-url="video002" title="90后蜗蜗品牌创始人的故事" id="1">90后蜗蜗品牌创始人的故事</a>
                </h4>
            </li>             
            </ul>
            </div>
        </div>
        </section>

	<!--防伪查询-->
    <section class="inquiry-sec section-warp security-scroll-area proxy-scroll-area">
        <header>
            <h4 class="sec-title inquiry"><a href="javascript:;" class="position" title="防伪查询">防伪查询</a></h4>
        </header>
        <div class="inquiry-warp">
           <div class="fl item i-l">
				<h4>防伪查询</h4>
                <div class="table" style="width: 366px;">
                <form name="form1" method="get" action="http://code.fangwei315.com/caimacode.aspx" onSubmit="return fwcx()">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="71" height="56" align="right"><span>查询码</span></td>
                    <td width="18">&nbsp;</td>
                    <td width="169">
                      <input type="text" name="key" id="key" class="input-box">
                    </td>
                    <td width="108" align="left"><span id="fwcx-len" style="font-size: 12px;">您已输入0位</span></td>
                  </tr>
                  <tr>

                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="button" id="button" value="提交" class="btn"></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                </form>
             </div>
          </div>
           <div class="fr item i-r">
           		<h4 class="tab-section-menu">
                	<a class="link">代理查询</a>
                    <a class="link">微信查询</a>
                </h4>
                <div class="table">
                
                <div class="tab-con">
                    <div class="form-box" style="display: block;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="175" height="56"><input type="text" name="sqr" id="sqr" class="input-box fr"></td>
                        <td width="18">&nbsp;</td>
                        <td width="79"><span>授权人</span></td>
                      </tr>
                      <tr>
                        <td height="25"><input type="text" name="sqcode" id="sqcode" class="input-box fr"></td>
                        <td>&nbsp;</td>
                        <td><span>授权编码</span></td>
                      </tr>
                      <tr>
                        <td height="56" class="dlaskYzm">
                        <input type="text" name="dlcxYzm" id="dlcxYzm" class="input-box fr">
                        </td>
                        <td>&nbsp;</td>
                        <td><span>验证码</span></td>
                      </tr>
                      <tr>
                        <td height="25"><input type="submit" name="dlask" id="dlask" value="提交" class="btn fr"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table>
                    </div>
                    <div class="form-box">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="175" height="56"><input type="text" name="Author" id="Author" class="input-box fr"></td>
                        <td width="18">&nbsp;</td>
                        <td width="79"><span>微信号</span></td>
                      </tr>
                      <tr>
                        <td height="56" class="dlaskYzm">
                        <input type="text" name="wiexingYzm" id="wiexingYzm" class="input-box fr">
                        </td>
                        <td>&nbsp;</td>
                        <td><span>验证码</span></td>
                      </tr>
                      <tr>
                        <td height="50"><input type="submit" name="weixing" id="weixing" value="提交" class="btn fr"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table>
                    </div>
                </div>
                </div>
                <div class="explain">
                	授权查询，请输入 ‘授权人姓名’ 和 ‘授权编码’<br>
                    查询结果，请核对 <strong class="co-gre">微信号</strong> 是否正确，如不正确请及时跟公司客服联系，谢谢！！
                </div>
           </div>
        </div>
    </section>
    
    <!--在线留言-->
    <section class="message-sec section-warp message-scroll-area">
        <header>
            <h4 class="sec-title message"><a href="javascript:;" class="position" title="在线留言">在线留言</a></h4>
        </header>
        <div class="message-warp">
        <form action="guestbook_ok.php" method="post" id="zxly">
        <input type="hidden" name="action" id="action" value="save" />
           <ul class="ui-input">
           	<li><span class="label">QQ</span><input type="text" id="title" name="title" class="mesTitle"><i class="required"></i></li>
            <li><span class="label">姓名</span><input type="text" id="name" name="name"><i class="required"></i></li>
            <li><span class="label">电话</span><input type="text" id="phone" name="phone"><i class="required"></i></li>
            <li id="messageYzmBox">
                <span class="label">验证码</span>
                <input type="text" id="lyYzmNo" name="lyYzmNo">
                <i class="required"></i>
            </li>
           </ul>
           <ul class="ui-textarea">
           <li>
           <textarea id="msg" name="msg" placeholder="你想成为蜗蜗代理了，留言给我们哦！！"></textarea><i class="required"></i>
           </li>
           <input type="button" value="提交留言" id="liuyuan" class="bc-gre wh btn">
           </ul>
           </form>
           
        </div>
    </section>
</div>

<footer>
	<div class="container">
    	<div class="ta-c">
        	<p>Copyright© 2015 All Rights Reserved. <?php echo $C['CopyRight'];?></p>
            <p><?php echo $C['Title'];?></p>
        </div>
        <div class="footer-icon ta-c">
        <ul>
        	<li>
            	<a class="phone position txt-hide">联系电话：4008-789-039</a>
                <div class="g-txt">4008-789-039</div>
            </li>
            <li>
            	<div class="weixina-pic"><img src="images/weixing.jpg" alt="微信：daipu8" width="80" height="80"></div>
            	<a class="weixing position txt-hide">微信：daipu8</a>
            </li>
            <li>
            	<div class="g-txt">3045248966</div>
            	<a class="qq position" title="蜗蜗为您服务" href="http://wpa.qq.com/msgrd?v=3&amp;uin=3045248966&amp;site=www.cactussoft.cn&amp;menu=yes" target="_blank"></a>
            </li>
            <li>
            	<a class="web position"></a>
                <div class="g-txt">www.shanghaidaipu.com</div>
            </li>
            <li class="bdsharebuttonbox">
            	<a class="follow position bds_more" data-cmd="more"></a>
				<script>
                window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                </script>
                
            </li>
        </ul>
        </div>
    </div>
</footer>

<a class="lyYzmImg" href="#" onclick="this.firstChild.src='seccode.php?update=' + Math.random();return false;"><img align="absmiddle" src="seccode.php?update=1437547124" border="0"></a>

<div id="pop-window">
	<div class="view-area">
    	<a href="javascript:;" class="close-btn txt-hide">关闭</a>
        <iframe src="about.php?id=1" scrolling="auto" frameborder="0" width="100%" height="100%"></iframe>
    </div>
</div>



<script src="js/Yang.js"></script>
<script src="js/move.js"></script>
<script src="js/banner.js"></script>
<script src="js/script.js"></script>
</body>
</html>
<!doctype html>
<html>
<head>

<layout name="Home:Inc:script" cache="0" />
<link href="__HOME__css/normalize.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="__HOME__css/skippr/jquery.skippr.css">
<link href="__HOME__css/css.css" rel="stylesheet" type="text/css">
<script src="__HOME__js/html5.js"></script>
<script src="__HOME__js/libs/jquery-1.11.3.min.js"></script>
</head>
<body>

<layout name="Home:Inc:header" cache="0" />

<div id="banner-warp">
	<div id="random">
		<volist name="indexAds" id="vo">
	    	<div style="background-image: url(__PUBLIC__/images/advert/m_{$vo.image})">
	    		<a href="{$vo.url}" style="display:block;width:100%;height:100%;" ></a>
	    	</div>
	    </volist>
	</div>
</div>


<layout name="Home:Inc:nav" cache="0" />


<section class="container w1 indexSection1 sectionHeaderStyle1">
	<header>
		叶义言儿科  呵护儿童健康成长<br>倡导精准诊查，综合治疗，以避免延误诊疗、滥用药品造成次生损害。
	</header>
	<div class="listWarp">
		<dl>
			<dd class="num"><span>1</span></dd>
			<dt class="title">精准骨龄</dt>
			<dd class="pic">
				<span class="maskPic"></span>
				<img src="__HOME__images/pic001.jpg" alt="精准骨龄">
			</dd>
			<dd class="txt">
				精准骨龄是反应儿童成熟程度的可靠客观指标，是儿童成长和儿科临床的基本评价
			</dd>
		</dl>
		<dl>
			<dd class="num"><span>2</span></dd>
			<dt class="title">精准诊查</dt>
			<dd class="pic">
				<span class="maskPic"></span>
				<img src="__HOME__images/maskPic002.jpg" alt="精准诊查">
			</dd>
			<dd class="txt">
				通过精准的检查和诊断，做到循证辨病、对病施治。
			</dd>
		</dl>
		<dl>
			<dd class="num"><span>3</span></dd>
			<dt class="title">综合治疗</dt>
			<dd class="pic">
				<span class="maskPic"></span>
				<img src="__HOME__images/maskPic003.jpg" alt="综合治疗">
			</dd>
			<dd class="txt">
				药物疗法和生长促进疗法，医疗和预防，接诊和科普，根据个人情况综合运用。
			</dd>
		</dl>
		<dl>
			<dd class="num"><span>4</span></dd>
			<dt class="title">跟踪服务</dt>
			<dd class="pic">
				<span class="maskPic"></span>
				<img src="__HOME__images/maskPic004.jpg" alt="跟踪服务">
			</dd>
			<dd class="txt">
				儿童生长及其疾病的过程，须要跟踪监测和服务，互联网等信息化技术可提供便利条件。
			</dd>
		</dl>
		<dl>
			<dd class="num"><span>5</span></dd>
			<dt class="title">在线初诊</dt>
			<dd class="pic">
				<span class="maskPic"></span>
				<img src="__HOME__images/maskPic005.jpg" alt="在线初诊">
			</dd>
			<dd class="txt">
				在线初诊可就孩子有关问题给家长以合理引导、有序就医，避免受折腾和乱花钱。
			</dd>
		</dl>
	</div>
</section>


<section class="indexSection2 sectionHeaderStyle1">
	<header>
		儿童成长要管理  放养而不是放任<br><br>
		矮小、肥胖、发育快等问题日趋增多，已成为儿童健康成长的头号杀手

	</header>
	<ul class="container w2 listWarp">
		<figure>
			<a href="{:U('Topic/monographicUndersized')}" title="儿童矮小">
				<figcaption>儿童矮小</figcaption>
				<p><a href="{:u('Topic/monographicUndersized')}#pop1">病因 | </a><a href="{:u('Topic/monographicUndersized')}#pop2">危害 |  </a><a href="{:u('Topic/monographicUndersized')}#pop4">治疗 |</a> <a href="{:u('Topic/monographicUndersized')}#pop6">检查</a></p>
				<img src="__HOME__images/pic002.png" alt="儿童矮小">
			</a>
		</figure>
		<figure>
			<a href="{:U('Topic/monographicObesity')}" title="儿童肥胖">
				<figcaption>儿童肥胖</figcaption>
				<p><a href="{:U('Topic/monographicObesity')}#pop1" title="儿童肥胖">病因 |</a><a href="{:U('Topic/monographicObesity')}#pop2" title="儿童肥胖">危害 | </a><a href="{:U('Topic/monographicObesity')}#pop4" title="儿童肥胖">治疗 |</a> <a href="{:U('Topic/monographicObesity')}#pop7" title="儿童肥胖">检查</a></p>
				<img src="__HOME__images/pic003.png" alt="儿童肥胖">
			</a>
		</figure>
		<figure>
			<a href="{:U('Topic/monographicPrecocious')}" title="儿童性早熟">
				<figcaption>儿童性早熟</figcaption>
				<p><a href="{:U('Topic/monographicPrecocious')}#pop1" title="儿童性早熟">病因 |</a> <a href="{:U('Topic/monographicPrecocious')}#pop2" title="儿童性早熟">危害 | </a> <a href="{:U('Topic/monographicPrecocious')}#pop3" title="儿童性早熟">治疗 | </a> <a href="{:U('Topic/monographicPrecocious')}#pop8" title="儿童性早熟">检查</a></p>
				<img src="__HOME__images/pic004.png" alt="儿童性早熟">
			</a>
		</figure>
		<figure>
			<a href="{:U('Topic/monographicBoneage')}" title="儿童抵抗力差">
				<figcaption>儿童抵抗力差</figcaption>
				<p>病因 | 危害 | 治疗 | 检查</p>
				<img src="__HOME__images/pic005.png" alt="儿童抵抗力差">
			</a>
		</figure>
	</ul>
</section>

<div class="bannwrWarp h1">
	<a href="{:U('Childcase/index')}" style="background: url(__HOME__images/banner005.jpg) no-repeat center top;"></a>
</div>

<section class="indexTeam sectionHeaderStyle1">
	<header>
		叶义言团队介绍<br><br>
		<small>老中青结合、多学科结合，医护技结合，以儿科为主，还有影像、遗传、营养、心<br>理、运动、社会工作者等专业人士。医生和专家组成，综合评估，综合处理，共同为<br>儿童健康助力。</small>
	</header>
	<ul class="container w3 listWarp">
		<figure class="top">
			<a href="{:U('Appointment/index')}" title="儿童矮小">
				<div class="picWarp">
					<span class="maskPic2"></span>
					<img src="__HOME__images/pic002.jpg" alt="精准骨龄">
					<div class="maskTxt">
						<div class="txtWarp" style="width:150px; margin-left:30px;">
							<small class="job">首席专家</small>
							<h4 class="name">叶义言</h4>
							<i class="line"></i>
							<small class="txt">从事儿科临床40余年、儿童生长发育内分泌遗传代谢专科临床30余年，已为上十万儿童的生长发育问题进行综合诊疗。</small>
						</div>
					</div>
				</div>
				<figcaption>他，是人们眼中仗义执言的“良心医生”；他，是孩子成长曲线一路向上的守护天使</figcaption>
			</a>
		</figure>
		<figure>
			<a href="{:U('Appointment/index')}" title="儿童矮小" class="picWarp">
				<div class="picWarp">
					<span class="maskPic2"></span>
					<img src="__HOME__images/pic0020.jpg" alt="精准骨龄">
				</div>
				<figcaption>他，是人们眼中仗义执言的“良心医生”；他，是孩子成长曲线一路向上的守护天使</figcaption>
			</a>
		</figure>
		<figure>
			<a href="{:U('Appointment/index')}" title="儿童矮小" class="picWarp">
				<div class="picWarp">
					<span class="maskPic2"></span>
					<img src="__HOME__images/pic0021.jpg" alt="精准骨龄">
				</div>
				<figcaption>他，是人们眼中仗义执言的“良心医生”；他，是孩子成长曲线一路向上的守护天使</figcaption>
			</a>
		</figure>
		<figure>
			<a href="{:U('Appointment/index')}" title="儿童矮小" class="picWarp">
				<div class="picWarp">
					<span class="maskPic2"></span>
					<img src="__HOME__images/pic0022.jpg" alt="精准骨龄">
				</div>
				<figcaption>他，是人们眼中仗义执言的“良心医生”；他，是孩子成长曲线一路向上的守护天使</figcaption>
			</a>
		</figure>
	</ul>
	<div class="ta-c">
		<a href="{:U('Appointment/index')}" class="more">预约叶义言专家团队</a>
	</div>
</section>


<section class="indexSection3 sectionHeaderStyle1 tabWarp">
	<header>
		育儿宝典
	</header>
	<ul class="tabMenu">
		<li class="active menu"><a title="{$cate1.title}">{$cate1.title}</a><i class="line"></i></li>
		<li class="menu"><a title="肥胖">肥胖</a><i class="line"></i></li>
		<li class="menu"><a title="性早熟">性早熟</a><i class="line"></i></li>
		<li class="menu"><a title="抵抗力差">抵抗力差</a></li>
	</ul>
	<div class="container tabContent indexSection3TabContent">
		<div class="con c1" style="display: block;">
			<div class="pic"></div>
			<hgroup>
				<h4>
					ABOUT
					<small>Healthy growth of children</small>
				</h4>
				<h3>{$news1[0]['title']|str_cut=0,30}</h3>
			</hgroup>
			<p>
				{$news1[0]['summary']|str_cut=0,100}
				<a href="{:U('/Knowledge/knowledgeDetail/',array('id'=>$news1[0]['id']))}" class="mainColor">【详情】</a>
			</p>
			<dl>
				
				<volist name="news1" id="vo" offset="1">
					<dd><span>●</span><a href="{:U('/Knowledge/knowledgeDetail/',array('id'=>$vo['id']))}">{$vo.title|str_cut=0,30}</a></dd>
				</volist>
			</dl>
		</div>
		<div class="con c2">
			<div class="pic"></div>
			<hgroup>
				<h4>
					ABOUT
					<small>Healthy growth of children</small>
				</h4>
				<h3>{$news2[0]['title']|str_cut=0,30}</h3>
			</hgroup>
			<p>
				{$news2[0]['summary']|str_cut=0,100}
				<a href="{:U('/Knowledge/knowledgeDetail/',array('id'=>$news2[0]['id']))}" class="mainColor">【详情】</a>
			</p>
			<dl>
				
				<volist name="news2" id="vo" offset="1">
					<dd><span>●</span><a href="{:U('/Knowledge/knowledgeDetail/',array('id'=>$vo['id']))}">{$vo.title|str_cut=0,30}</a></dd>
				</volist>
			</dl>
		</div>
		<div class="con c3">
			<div class="pic"></div>
			<hgroup>
				<h4>
					ABOUT
					<small>Healthy growth of children</small>
				</h4>
				<h3>{$news3[0]['title']|str_cut=0,30}</h3>
			</hgroup>
			<p>
				{$news3[0]['summary']|str_cut=0,100}
				<a href="{:U('/Knowledge/knowledgeDetail/',array('id'=>$news3[0]['id']))}" class="mainColor">【详情】</a>
			</p>
			<dl>
				
				<volist name="news3" id="vo"  offset="1">
					<dd><span>●</span><a href="summary">{$vo.title|str_cut=0,30}</a></dd>
				</volist>
			</dl>
		</div>
		<div class="con c4">
			<div class="pic"></div>
			<hgroup>
				<h4>
					ABOUT
					<small>Healthy growth of children</small>
				</h4>
				<h3>
					{$news4[0]['title']|str_cut=0,30}
				</h3>
			</hgroup>
			<p>
				{$news4[0]['summary']|str_cut=0,100}
				<a href="{:U('/Knowledge/knowledgeDetail/',array('id'=>$news4[0]['id']))}" class="mainColor">【详情】</a>
			</p>
			<dl>
				
				<volist name="news4" id="vo"  offset="1">
					<dd><span>●</span><a href="{:U('/Knowledge/knowledgeDetail/',array('id'=>$vo['id']))}">{$vo.title|str_cut=0,30}</a></dd>
				</volist>
			</dl>
		</div>
	</div>
</section>



<section class="indexSection5 tabWarp">
	<ul class="tabMenu menuStyle1">
		<li class="active menu"><a title="{$newsCate1.title}">{$newsCate1.title|str_cut=0,30}</a><i class="line"></i></li>
		<li class="menu"><a title="{$newsCate2.title}">{$newsCate2.title|str_cut=0,30}</a><i class="line"></i></li>
		<li class="menu"><a title="{$newsCate3.title}">{$newsCate3.title|str_cut=0,30}</a><i class="line"></i></li>
		<li class="menu"><a title="{$newsCate4.title}">{$newsCate4.title|str_cut=0,30}</a><i class="line"></i></li>
		<li class="menu"><a title="{$newsCate5.title}">{$newsCate5.title|str_cut=0,30}</a></li>
	</ul>
	<div class="container tabContent indexSection4TabContent">
		<div class="con" style="display: block;">
			<div class="clearfix">
				<div class="picWarp">
					<ul class="list">
						
						<volist name="newsList1" id="vo" key="i">
							<li <neq name="i" value="1">style="display:none;"</neq>><a href="{:U('News/show',array('id'=>$vo['id']))}" title="{$vo['title']}" ><img src="{:imgPath($vo['image'])}" alt="{$vo['title']}"></a></li>
						</volist>
					</ul>
					<h4>{$newsList1[0]['title']|str_cut=0,30}</h4>
				</div>
				<div class="listWarp">
					<ul class="indexNews">
						<li class="title">NEWS</li>
						<volist name="newsList1" id="vo">
						<li>
							<time>{$vo.create_time|date="Y.m.d",###}</time>
							<a href="{:U('News/show',array('id'=>$vo['id']))}" title="{$vo.title}">
								<span>●</span>
								{$vo.title|str_cut=0,20}
							</a>
						</li>
						</volist>
					</ul>
				</div>
			</div>
		</div>
		<div class="con">
			<div class="clearfix">
				<div class="picWarp">
					<ul class="list">
						
						<volist name="newsList2" id="vo">
							<li <neq name="i" value="1">style="display:none;"</neq>><a href="{:U('News/show',array('id'=>$vo['id']))}" title="{$vo['title']}"  ><img src="{:imgPath($vo['image'])}" alt="{$vo['title']}"></a></li>
						</volist>
					</ul>
					<h4>{$newsList2[0]['title']|str_cut=0,30}</h4>
				</div>
				<div class="listWarp">
					<ul class="indexNews">
						<li class="title">NEWS</li>
						<volist name="newsList2" id="vo">
						<li>
							<time>{$vo.create_time|date="Y.m.d",###}</time>
							<a href="{:U('News/show',array('id'=>$vo['id']))}" title="{$vo.title}">
								<span>●</span>
								{$vo.title|str_cut=0,20}
							</a>
						</li>
						</volist>
					</ul>
				</div>
			</div>
		</div>
		<div class="con">
			<div class="clearfix">
				<div class="picWarp">
					<ul class="list">
						
						<volist name="newsList3" id="vo">
							<li <neq name="i" value="1">style="display:none;"</neq>><a href="{:U('News/show',array('id'=>$vo['id']))}" title="{$vo['title']}" ><img src="{:imgPath($vo['image'])}" alt="{$vo['title']}"></a></li>
						</volist>
					</ul>
					<h4>{$newsList3[0]['title']|str_cut=0,30}</h4>
				</div>
				<div class="listWarp">
					<ul class="indexNews">
						<li class="title">NEWS</li>
						<volist name="newsList3" id="vo">
						<li>
							<time>{$vo.create_time|date="Y.m.d",###}</time>
							<a href="{:U('News/show',array('id'=>$vo['id']))}" title="{$vo.title}">
								<span>●</span>
								{$vo.title|str_cut=0,20}
							</a>
						</li>
						</volist>
					</ul>
				</div>
			</div>
		</div>
		<div class="con">
			<div class="clearfix">
				<div class="picWarp">
					<ul class="list">
						
						<volist name="newsList4" id="vo">
							<li <neq name="i" value="1">style="display:none;"</neq>><a href="{:U('News/show',array('id'=>$vo['id']))}" title="{$vo['title']}"><img src="{:imgPath($vo['image'])}" alt="{$vo['title']}"></a></li>
						</volist>
					</ul>
					<h4>{$newsList4[0]['title']|str_cut=0,30}</h4>
				</div>
				<div class="listWarp">
					<ul class="indexNews">
						<li class="title">NEWS</li>
						<volist name="newsList4" id="vo">
						<li>
							<time>{$vo.create_time|date="Y.m.d",###}</time>
							<a href="{:U('News/show',array('id'=>$vo['id']))}" title="{$vo.title}">
								<span>●</span>
								{$vo.title|str_cut=0,20}
							</a>
						</li>
						</volist>
					</ul>
				</div>
			</div>
		</div>
		<div class="con">
			<div class="clearfix">
				<div class="picWarp">
					<ul class="list">
						
						<volist name="newsList5" id="vo">
							<li><a href="{:U('News/show',array('id'=>$vo['id']))}" title="{$vo['title']}"><img src="{:imgPath($vo['image'])}" alt="{$vo['title']}"></a></li>
						</volist>
					</ul>
					<h4>{$newsList5[0]['title']|str_cut=0,30}</h4>
				</div>
				<div class="listWarp">
					<ul class="indexNews">
						<li class="title">NEWS</li>
						<volist name="newsList5" id="vo">
						<li>
							<time>{$vo.create_time|date="Y.m.d",###}</time>
							<a href="{:U('News/show',array('id'=>$vo['id']))}" title="{$vo.title}">
								<span>●</span>
								{$vo.title|str_cut=0,20}
							</a>
						</li>
						</volist>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="ta-c">
		<a href="{:U('News/index')}" class="more style1">查看更多</a>
	</div>
</section>
<layout name="Home:Inc:footer" cache="0" />

<script src="__HOME__js/skippr/jquery.skippr.js"></script>
<script>
    $(document).ready(function() {
    	$("#random").skippr({
            speed: 500,
            navType: 'block',
            childrenElementType: 'div',
            arrows: true,
            autoPlay: true,
            autoPlayDuration: 5000
        });
    });

</script>


<script>

$(function(){
	//TAB
	$('.tabMenu li').filter('.menu').click(function(){
		var warp = $(this).parents('.tabWarp'),
			index = $(this).index();

		//清除高光
		$(this).parent().find('li').removeClass('active');

		//隐藏内容
		warp.find('.tabContent .con').hide();

		//当前添加高光
		$(this).addClass('active');

		//显示指写内容
		warp.find('.tabContent .con').eq(index).show();

	});
	
});
</script>
</body>
</html>
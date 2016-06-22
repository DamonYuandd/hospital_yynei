<div class="asideWarp">
	<volist name="rightAds" id="vo">
	 	<section class="asideSection">
			<a href="{$vo.url}" title="{$vo.title}"><img src="__PUBLIC__/images/advert/m_{$vo.image}" alt="{$vo.title}"></a>
		</section>
	</volist>
	

	<section class="asideSection">
		<header><h4>精彩专题</h4></header>
		<div class="monographicPic">
			<a class="pic1" href="{:U('Topic/monographicUndersized')}"><img src="__HOME__images/monographicPic1.jpg" alt="矮小"></a>
			<a class="pic2" href="{:U('Topic/monographicObesity')}"><img src="__HOME__images/monographicPic2.jpg" alt="肥胖"></a>
			<a class="pic3" href="{:U('Topic/monographicPrecocious')}"><img src="__HOME__images/monographicPic3.jpg" alt="性早熟"></a>
			<a class="pic4" href="{:U('Topic/monographicBoneage')}"><img src="__HOME__images/monographicPic4.jpg" alt="抵抗力差"></a>
		</div>
	</section>

	<section class="asideSection">
		<header>
			<h4 class="fl">精彩视频</h4>
			<div class="fr"><a>更多</a></div>
			
		</header>
		<div class="knowledgeVideoList">
			<ul class="imgList">
				<volist name="siftList" id="vo" offset="0" length="2" key="i">
					<figure <eq name="i" value="1"> class="first" </eq> <eq name="i" value="2"> class="last" </eq>>
						<a href="{:U('Childcase/newsVideoDetail',array('id' => $vo['id']))}" title="{$vo.title}">
							<figcaption>
								<span class="titleBg"></span>
								<h4 class="title">{$vo.title|str_cut=0,30}</h4>
							</figcaption>
							<img src="{:imgPath($vo['image'])}" alt="{$vo.title}" class="img" height="107">
						</a>
					</figure>
				</volist>
				
			</ul>
			<ul>
				<volist name="siftList" id="vo" offset="2" length="4" key="i">
					<li>
						<a href="{:U('Childcase/newsVideoDetail',array('id' => $vo['id']))}" title="{$vo.title}">
							<time>{$vo.create_time|date="Y-m-d",###}</time>
							<span class="icon"></span>
							{$vo.title|str_cut=0,20}
						</a>
					</li>
				 </volist>
			</ul>
		</div>
	</section>
</div>
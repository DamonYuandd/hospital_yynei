// JavaScript Document
Yang.addEvent(window, 'load', function(){
	new Banner('banner-warp');
});
/*幻灯片广告*/
function Banner(id){
	this.oWarp = document.getElementById(id);
	this.oAdvBox = Yang.getElementsByClassName('adv', 'ul', this.oWarp)[0];
	this.aLi = this.oAdvBox.getElementsByTagName('li');
	
	this.btn;
	
	this.viewW = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	
	this.iNow = 0;
	this.iIndex = this.aLi.length;
	this.autoTimer = null;
	this.init();
	
}
Banner.prototype.init = function(){
	
	var _this = this;

	for(var i = 0, len = this.aLi.length; i < len; i++){
		this.aLi[i].style.zIndex = len - i;
		this.aLi[i].style.width = this.viewW + 'px';
	}
	
	this.autoTimer = setInterval(function(){
		_this.iNow++;
		_this.toggleClass();
	}, 7000);	
	
	this.oWarp.onmouseover = function(){
		clearInterval(_this.autoTimer);
	}
	this.oWarp.onmouseout = function(){
		_this.autoTimer = setInterval(function(){
			_this.iNow++;
			_this.toggleClass();
		}, 7000);
	}
	
	//创建按钮
	this.clearBtn();
	
}
Banner.prototype.clearBtn = function(){
	var ul = document.createElement('ul');
	var html = '',
		_this = this;
		
	ul.className = 'btn';
	
	for(var i = 0, len = this.aLi.length; i < len; i++){
		html += '<a href="javascript:;"></a>'
	}
	ul.innerHTML = html;
	this.oWarp.appendChild(ul);
	
	//第一个按钮加高光
	ul.getElementsByTagName('a')[0].className = 'active';
	
	this.btn = ul.getElementsByTagName('a');
	for(var i = 0, len = this.btn.length; i < len; i++){
		this.btn[i].index = i;
		this.btn[i].onclick = function(ev){
			
			_this.iNow = this.index;
			_this.toggleClass();

			//清除事件流
			Yang.stopPP(ev);
			Yang.preventDefault(ev);
		}
	}
	
}

//切换高光
Banner.prototype.toggleClass = function(){
	if(this.iNow > this.btn.length-1){
		this.iNow = 0;
	}else if(this.iNow < 0){
		this.iNow = this.btn.length-1;
	}
	this.iIndex++;
	for(var i = 0, len = this.btn.length; i < len; i++){
		this.btn[i].className = '';
	}
	this.btn[this.iNow].className = 'active';
	this.next();
}

Banner.prototype.next = function(){
	this.aLi[this.iNow].style.opacity = 0;
	this.aLi[this.iNow].style.zIndex = this.iIndex;
	startMove(this.aLi[this.iNow],{'opacity': 100});
}

new Swiper('.indexBannerSwiper', {
    pagination: '.indexBannerSwiperpagination',
    nextButton: '.indexBannerSwiperNext',
    prevButton: '.indexBannerSwiperPrev'
});
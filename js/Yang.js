// JavaScript Document
(function(){
	
	
	//****************************************
	//******
	//新建一个命名空间
	if(!window.Yang){ window['Yang'] = {}; }
	
	
	//****************************************
	//******
	//确定当前的库是否被浏览器支持
	//方法:if(!isCompatible()){ return false; }
	function isCompatible(other){
		if(other === false || !Array.prototype.push || !Object.hasOwnProperty || !document.createElement || document.getElementsByTagName){
			return false;
		}
		return true;
	}
	window.Yang.isCompatible = isCompatible;
	
	
	//****************************************
	//******
	//获取ID对象--单个对象
	//方法：Yang.$('a');
	function $(id){
		return document.getElementById(id);
	}
	window.Yang.$ = $;
	
	
	//****************************************
	//******
	//获取ID对象--数组对象
	//方法：Yang.$$('a', 'b', 'c');
	function $$(){
		var elements = new Array();
		
		for(var i = 0; i < arguments.length; i++){
			var element = arguments[i];
			
			//如果参数是一个字符串
			if(typeof element == 'String'){
				element = document.getElementById(element);
			}
			
			//如果只有一个参数
			if(arguments.length == 1){
				return element;
			}else{
				elements.push(element);
			}
		}
		
		//全部参数循环结束，返回数组
		return elements;
	}
	window.Yang.$$ = $$;
	
	
	


	//****************************************
	//******
	//通过ID修改单个元素样式
	function setStyleById(element, styles) {
		
		// 循环遍历style对象并应用属性
		for (property in styles) {
			if(!styles.hasOwnProperty(property)) continue;
		
			if(element.style.setProperty) {
				//DOM2样式规范方式
				element.style.setProperty(
				uncamelize(property,'-'),styles[property],null);
			} else {
				//备用方法
				element.style[camelize(property)] = styles[property];
			}
		}
		return true;
	}
	window.Yang.setStyle = setStyleById;
	window.Yang.setStyleById = setStyleById;
	
	
	
	
	//****************************************
	//******
	//通过类名修改多个元素的样式
	function setStylesByClassName(parent, tag, className, styles) {
		if(!(parent = $(parent))) return false;
		var elements = getElementsByClassName(className, tag, parent);
		for (var e = 0 ; e < elements.length ; e++) {
			setStyleById(elements[e], styles);
		}
		return true;
	}
	window.Yang.setStylesByClassName = setStylesByClassName;
	
	
	
	
	//****************************************
	//******
	//通过标签名修改多个元素的样
	function setStylesByTagName(tagname, styles, parent) {
		parent = $(parent) || document;
		var elements = parent.getElementsByTagName(tagname);
		for (var e = 0 ; e < elements.length ; e++) {
			setStyleById(elements[e], styles);
		}
	}
	window.Yang.setStylesByTagName = setStylesByTagName;
		

	
	//****************************************
	//******
	//获取包含元素类名的数组
	function getClassName(element){
		return element.className.replace(/\s+/,' ').split(' ');
	}
	window.Yang.getClassName = getClassName;
	
	
	
	//****************************************
	//******
	//检测元素中的类名是否存在
	function hasClassName(element, className){
		var classes = getClassName(element);
		for(var i = 0; i < classes.length; i++){
			if(classes[i] === className){ return true };
		}
		return false;
	}
	window.Yang.hasClassName = hasClassName;
	
	
	
	
	//****************************************
	//******
	//添加类名class
	function addClassName(element, className){
		element.className += (element.className ? ' ' : '') + className;
		return true;
	}
	window.Yang.addClassName = addClassName;
	
	
	
	//****************************************
	//******
	//删除类名class
	function removeClassName(element, className){
		var classes = getClassName(element);
		var length = classes.length;
		for(var i = length - 1; i >= 0; i--){
			if(classes[i] === className){
				delete(classes[i]);
			}
		}
		element.className = classes.join(' ').replace(/\s+$/, '');
		return (length == classes.length ? false : true);
	}
	window.Yang.removeClassName = removeClassName;
	
	
	
	//****************************************
	//******
	//获取行间样式
	function getByStyle(sArrt, node){
		return node.currentStyle ? node.currentStyle[sArrt] : getComputedStyle(node, false)[sArrt];
	}
	window.Yang.getByStyle = getByStyle;
	
	
	
	
	//****************************************
	//******
	//获取元素尺寸 width, height, left, top
	function getElemSize(elem){
		return {
			'top' : elem.offsetTop,
			'left' : elem.offsetLeft,
			'width' : elem.offsetWidth,
			'height' : elem.offsetHeight
		}
	}
	
	
	
	//****************************************
	//******
	//切换类名toggleClass
	function toggleClass(element, className){
		var classes = getClassName(element);
		var hasClass = hasClassName(element, className);
		!hasClass ? addClassName.apply(this, arguments) : removeClassName.apply(this, arguments);;
	}
	window.Yang.toggleClass = toggleClass;
	
	
	
	//****************************************
	//******
	//添加样式表
	function addStyleSheet(url, media){
		media = media || 'screen';
		var link = document.createElement('line');
		link.setAttribute('rel', 'stylesheet');
		link.setAttribute('type', 'text/css');
		link.setAttribute('href', url);
		link.setAttribute('media', media);
		document.getElementsByTagName('head')[0].appendChild(link);
	}
	window.Yang.addStyleSheet = addStyleSheet;
	
	
	
	
	//****************************************
	//******
	//删除样式表
	function removeStyleSheet(url,media) {
		var styles = getStyleSheets(url,media);
		for(var i = 0 ; i < styles.length ; i++) {
			var node = styles[i].ownerNode || styles[i].owningElement;
			// 禁用样式表
			styles[i].disabled = true;
			// 移除节点
			node.parentNode.removeChild(node);
		}
	}
	window.Yang.removeStyleSheet = removeStyleSheet;
	
	
	
	
	//****************************************
	//******
	//注册事件
	//方法：Yang.addEvent(node, type, fn);
	function addEvent(node, type, fn){
		
		if(node.addEventListener){//W3C
			node.addEventListener(type, fn, false);
			return true;
		}else if(node.attachEvent){//IE
			node.attachEvent('on' + type, fn);
			return true;
		}else{
			node['on' + type] = fn;
		}
	}
	window.Yang.addEvent = addEvent;
	
	
	
	//****************************************
	//******
	//注册事件改变this指向
	//方法：Yang.addEvent(node, type, bindFunction(obj, fn));
	function bindFunction(obj, fun){
		return function(){
			fun.apply(obj, arguments);
		}
	}
	window.Yang.bindFunction = bindFunction;
	
	
	
	//****************************************
	//******
	//清除事件
	//方法：Yang.removeEvent(node, type, fn);
	function removeEvent(node, type, fn){
		if(node.removeEventListener){
			node.removeEventListener(type, fn, false);
			return true;
		}else if(node.detachEvent){
			node.detachEvent('on' + type, fn);
			return true;
		}else{
			node['on' + type] = null;
		}
	}
	window.Yang.removeEvent = removeEvent;
	
	
	
	//****************************************
	//******
	//预加载
	//方法：Yang.addLoadEvent(function(){});
	function addLoadEvent(loadEvent,waitForImages) {
		if(!isCompatible()) return false;
		
		//如果等待标记是true，则使用常规的注册事件方法
		if(waitForImages) {
			return addEvent(window, 'load', loadEvent);
		}
		
		//否则使用一些不同的方式包装loadEvent()方法
		
		// 以便为this关键字指定正确的内容，同时确保事件不会被执行两次
		var init = function() {
			
			//如果这个函数已经被调用过了，则退出（arguments.callee指向init函数）
			if (arguments.callee.done) return;
			
	
			//为本函数添加标记以便不会被调用两次
			arguments.callee.done = true;
	
			//在document的环境中运行载入事件
			loadEvent.apply(document,arguments);
		};
		
		//为DOMContentLoaded事件注册侦听器
		if (document.addEventListener) {
			document.addEventListener("DOMContentLoaded", init, false);
		}
		
		//为Safari，使用setInterval()函数检测 
		if (/WebKit/i.test(navigator.userAgent)) {
			var _timer = setInterval(function() {
				if (/loaded|complete/.test(document.readyState)) {
					clearInterval(_timer);
					init();
				}
			},10);
		}
		//对于IE（使用条件注释）
		//附加一个在载入过程最后执行的脚本，并检测该脚本是否载入完成
		/*@cc_on @*/
		/*@if (@_win32)
		document.write("<script id=__ie_onload defer src=javascript:void(0)><\/script>");
		var script = document.getElementById("__ie_onload");
		script.onreadystatechange = function() {
			if (this.readyState == "complete") {
				init();
			}
		};
		/*@end @*/
		return true;
	}
	window.Yang.addLoadEvent = addLoadEvent;
	
	
	
	//****************************************
	//******
	//获取className元素
	function getElementsByClassName(className, tag, parent){
		parent = parent || document;
		tag = tag || '*';
		//查找所有匹配的标签
		var allTags = (tag == '*' && parent.all) ? parent.all : parent.getElementsByTagName(tag);
		var aElements = new Array();
		
		//创建正则表达式，判断className是否正确
		className = className.replace(/\-/g, '\\-');
		var regex = new RegExp('(^|\\s)' + className + '(\\s|$)');
		
		var element;
		
		//检查每个元素
		for(var i = 0; i < allTags.length; i++){
			element = allTags[i];
			if(regex.test(element.className)){
				aElements.push(element);
			}
		}
		return aElements;
	}
	window.Yang.getElementsByClassName = getElementsByClassName;
	
	
	
	//****************************************
	//******
	//切换DOM元素 隐藏 或 显示 状态
	function toggleDisplay(node, value){
		if(node.style.display != 'none'){
			node.style.display = 'none';
		}else{
			node.style.display = value || '';
		}
		return true;	
	}
	window.Yang.toggleDisplay = toggleDisplay;
	
	
	
	//****************************************
	//******
	//在某个DOM元素之前插入
	function insertBefore(newChildNode, referenceNode){
		return referenceNode.parentNode.insertBefore(newChildNode, referenceNode);
	}
	window.Yang.insertBefore = insertBefore;
	
	
	
	//****************************************
	//******
	//在某个DOM元素之后插入
	function insertAfter(newChildNode, referenceNode){
		var parent = referenceNode.parentNode;
		//判断参考点父元素的最后一个节点是否与参考点是同一个节点，如果是就直接添加到最后
		if(parent.lastChild == referenceNode){
			parent.appencChild(newChildNode);
		}else{
			//否则在参考点的下一个兄弟节点后面插入节点
			parent.insertBefore(newChildNode, referenceNode.nextSibling);
		}
		return parent;
	}
	window.Yang.insertAfter = insertAfter;
	
	
	
	//****************************************
	//******
	//删除所有子节点
	function removeChild(parent){
		while(parent.firstChild){
			parent.firstChild.parentNode.removeChild(parent.firstChild);
		}
		return parent;
	}
	window.Yang.removeChild = removeChild;
	
	
	
		
	//****************************************
	//******
	//在某个DOM元素最前面插节点
	function prependChild(parent, newChildNode){
		if(parent.firstChild){
			//如果父元素存在子级节点，则在父元素的第一个子节点前面插入
			parent.insertBefore(newChildNode, parent.firstChild);
		}else{
			//否则直接添加子节点
			parent.appendChild(newChildNode);
		}
		return parent;
	}
	window.Yang.prependChild = prependChild;
	
	
	
	//****************************************
	//******
	//在某个DOM元素最后面插节点
	function addendChild(parent, newChild){
		return parent.addendChild(newChild);
	}
	
	
	
	//****************************************
	//******
	//获取浏览器窗口大小
	function getBrowserWindowSize(){
		var de = document.documentElement;
		return {
			'width': window.innerWidth || (de && de.clientWidth) || document.body.clientWidth,
			'height': window.innerHeight || (de && de.clientHeight) || document.body.clientHeight
		}
	}
	window.Yang.getBrowserWindowSize = getBrowserWindowSize;
	
	
	
	//****************************************
	//******
	//获取事件
	function getEventObject(ev){
		return ev || window.event;
	}
	window.Yang.getEventObject = getEventObject;
	
	
	
	//****************************************
	//******
	//阻止冒泡
	function stopPP(ev){
		var oEvent = getEventObject(ev);
		oEvent.stopPropagation ? oEvent.stopPropagation() : (oEvent.cancelBubble = true);
	}
	window.Yang.stopPP = stopPP;
	
	
	
	//****************************************
	//******
	//阻止对象默认事件
	function preventDefault(ev){
		var oEvent = getEventObject(ev);
		oEvent.preventDefault ? oEvent.preventDefault() : (oEvent.returnValue = false);
	}
	window.Yang.preventDefault = preventDefault;
	
	
	
	//****************************************
	//******
	//获取事件对象目标
	function getTarget(ev){
		var oEvent = getEventObject(ev);
		var target = oEvent.target || oEvent.scrElement;    //target->FF, scrElement->IE
		return target;
	}
	window.Yang.getTarget = getTarget;
	
	
	
	//****************************************
	//******
	//事件委托
	function delegation(ev){
		
		var oTarget = getTarget(ev);
		var targetNode = oTarget.nodeName.toLowerCase();
		return {'obj':oTarget, 'node':targetNode};
		
	}
	window.Yang.delegation = delegation;
	
	
	
	
	
	
	//****************************************
	//******
	//获取目标元素信息
	function getTargetElem(ev){
		var oEvent = getEventObject(ev);
		if(oEvent.relatedTarget){
			return oEvent.relaedTarget;
		}else if(oEvent.formElement){
			return oEvent.formElement;
		}else if(oEvent.toElement){
			return oEvent.toElement;
		}else{
			return null;
		}
	}
	window.Yang.getTargetElem = getTargetElem;
	
	
	
	//****************************************
	//******
	//获取鼠标按了哪个键
	function getMouseButton(ev){
		var oEvent = getEventObject(ev);
		var buttons = {
			'left' : false,
			'middle' : false,
			'right' : false
		};
		if(oEvent.toString && oEvent.toString().indexOf('MouseEvent') != -1){
			switch(oEvent.button){
				case 0:
					buttons.left = true;
					break;
				case 1:
					buttons.middle = true;
					break;
				case 2:
					buttons.right = true;
					break;
				default:
					break;
			}
		}else if(oEvent.button){
			switch(oEvent.button){
				case 1:
					buttonts.left = true;
					break;
				case 2:
					buttons.right = true;
					break;
				case 3:
					buttons.left = true;
					buttons.right = true;
					break;
				case 4:
					buttons.middle = true;
					break;
				case 5:
					buttons.left = true;
					button.middle = true;
					break;
				case 6:
					buttons.middle = true;
					buttons.right = true;
					break;
				case 7:
					buttons.left = true;
					buttons.middle = true;
					buttons.right = true;
					break;
				default:
					break;
			}	
		}else{
			return false;
		}
		return buttons;
	}
	window.Yang.getMouseButton = getMouseButton;
	
	
	
	//****************************************
	//******
	//获取鼠标在文档中的位置(包含滚动条)
	function getMousePosition(ev){
		var oEvent = getEventObject(ev);
		var x = oEvent.pageX || oEvent.clientX + (document.documentElement.scrollLeft || document.body.scrollLeft);
		var y = oEvent.pageY || oEvent.clientY + (document.documentElement.scrollTop || document.body.scrollTop);
		return {'x':x, 'y':y};
	}
	window.Yang.getMousePosition = getMousePosition;
	
	
	
	//****************************************
	//******
	//获取键盘按下的编码
	function getKeyCode(ev){
		var oEvent = getEventObject(ev);
		var code = oEvent.keyCode;
		var value = String.fromCharCode(code);
		return {'code':code, 'value':value};
	}
	window.Yang.getKeyCode = getKeyCode;
	
	

	//****************************************
	//******
	//判断是否为IE浏览器
	function isIE(){
		if (!!window.ActiveXObject || "ActiveXObject" in window){
			return true;
		}else {
			return false;
		}
	}
	window.Yang.isIE = isIE;
	
	
	
	//****************************************
	//******
	//获取节点属性
	window.Yang.node = {
    ELEMENT_NODE                : 1,
    ATTRIBUTE_NODE              : 2,
    TEXT_NODE                   : 3,
    CDATA_SECTION_NODE          : 4,
    ENTITY_REFERENCE_NODE       : 5,
    ENTITY_NODE                 : 6,
    PROCESSING_INSTRUCTION_NODE : 7,
    COMMENT_NODE                : 8,
    DOCUMENT_NODE               : 9,
    DOCUMENT_TYPE_NODE          : 10,
    DOCUMENT_FRAGMENT_NODE      : 11,
    NOTATION_NODE               : 12
	
	
	
};
	
	
})();
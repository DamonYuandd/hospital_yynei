// JavaScript Document


$(document).ready(function(){
    // All sides
    var sides = ["left", "top", "right", "bottom"];
    $("h1 span.version").text($.fn.sidebar.version);
    
    // Initialize sidebars
    for (var i = 0; i < sides.length; ++i) {
        var cSide = sides[i];
        $(".sidebar." + cSide).sidebar({side: cSide});
    }
    
    // ajax 调用数据
    $(".btn[data-action]").on("click", function () {
        var action = $(this).attr("data-action"),
        	side = $(this).attr("data-side"),
        	id = $(this).attr("data-id"),
        	type = $(this).attr("data-type");
   
        $(".sidebar." + side).trigger("sidebar:" + action);

        data(id, type);
        
    });

    //关闭数据
    $('.sidebarsMask').click(function(){
        $(this).hide();
        $('#sidebarContent').html('');
        $('#sidebarTitle').html('');
    });


    fnTouchEnd('#categoryEv', function(){
		$('.mobileNav').addClass('show');
		$('#navMask').addClass('show');
        setTimeout(function(){
            $('#navMask').addClass('showMask');
        }, 50);
	})

	fnTouchEnd('#navMask', function(){
		$('.mobileNav').removeClass('show');
        $('#navMask').removeClass('showMask');
        setTimeout(function(){
            $('#navMask').removeClass('show');
        }, 500);
		
	})


});



function fnTouchEnd(node, func) {
    $(node).bind('touchend mouseup', function (event) {
        if (func !== undefined) {
            func($(this));
        }
        // 取消设备默认点击反馈
        event.preventDefault();
    });
};

function data(id, type) {

    $('.sidebarsMask').show();     //遮罩
    $('.sidebarSpinner').show();   //加载动画
    $('#sidebarContent').html(''); //title
    $('#sidebarTitle').html('');   //content

    $.ajax( {  
        url:'data.php',// 跳转到 action  
        data:{  
                 type : type,  
                 id : id
        },  
        type:'post',  
        cache:false,  
        dataType : 'html', 
        success:function(data) {



            var data = JSON.parse(data);
            var content = html_decode(data[0].content);

            if(data){ 

                $('#sidebarTitle').html(data[0].title);
                $('#sidebarContent').html(content);

                var html = $('#sidebarContent').text();
                $('#sidebarContent').html(html);

                $('.sidebarSpinner').hide();


            }else{  
                $('.sidebarSpinner').hide();
            }  
         },  
         error: function(XMLHttpRequest, textStatus, errorThrown) {
            $('.sidebarSpinner').hide();
         } 
    });

};

//解码
function html_decode(str){
    var s = "";
    if (str.length == 0) return "";
        s = str.replace(/>/g, "&");
        s = s.replace(/</g, "<");
        s = s.replace(/>/g, ">");
        s = s.replace(/ /g, " ");
        s = s.replace(/'/g, "\'");
        s = s.replace(/"/g, "\"");
        s = s.replace(/<br>/g, "\n");
    return s;
}


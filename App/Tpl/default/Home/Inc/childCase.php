
<script>
$(function(){



	$(document).on('click', '.loadNewsList', function(){


		var type = $(this).attr('data-type'),   //获取类型
			page = $(this).attr('data-page');   //获取分页

			//判断是否get到分页，如果没有，即点击的是大类，则进行状态切换。否则就是分类，不进行状态切换
			if(!page){
				$('.childCaseNewsWarp .menu a').removeClass('active');
				$(this).addClass('active');

				//获取分类的第一篇文章
				 $.ajax({
		             type: "POST",
		             url: "{:U('Childcase/getFirstArt')}",
		             data: {type:type},
		             dataType: "json",
		             success: function(data){
			             		 var h = '<a href="'+data.link+'" title="'+data.title+'">'
			 							 +'<img src="'+data.img+'" alt="" class="img" style="width: 100%;"><span class="bg"></span><h4 class="title">'
										 +data.title+'</h4></a>';
		                         $('.leftWarp').html(h);   //清空resText里面的所有内容
		                      }
		         });
				
			}

			loadNewsListFn(type, page);

	})

	$(document).on('click', '.newsDetail', function(){


		/*var id = $(this).attr('data-id');

		$('#spinner2').show();

		$.ajax( {  
		    url:'{:U('Childcase/showArt')}',// 跳转到 action  
		    data:{  
		             id : id
		    },  
		    type:'post',  
		    cache:false,  
		    dataType:'json',  
		    success:function(data) {
			    if(data.status == 1){ 
		    		$('#spinner2').hide();
		    		var ht = '<a title="'+data.data.title+'" href="'+data.data.link+'">';
		    		if(data.data.image != null){
		    			ht += '<img class="img" alt="" src="/Public/images/news/m_'+data.data.image+'">';
		    		}else{
		    			ht += '<img class="img" alt="" src="/images/notImage.jpg">';
			    	}
		    		ht += '<span class="bg"></span>';
		    		ht += '<h4 class="title">'+data.data.title+'</h4></a> ';
		    		$('.leftWarp').html(ht);
			    }
		     },  
		     error : function() {  
		    	 $('#spinner2').hide();
		     }  
		});

*/

	})




	loadNewsListFn();



})

function loadNewsListFn(typeNum, pageNum){

	var nowPage = $('#nowPage').val();
	var total = $('#total').val();
	var pageNumC =pageNum;
	if(pageNum == '-1'){
		if(nowPage-1 < 0){
			pageNumC = 0
		}else{
			pageNumC = parseInt(nowPage)-1;
		}
	}

	if(pageNum == '+1'){
		if(parseInt(nowPage)+1 == total){
			pageNumC = nowPage
		}else{
			pageNumC = parseInt(nowPage)+1;
		}
	}
	//return false;
	var type = typeNum || 1,                //获取类型
		url = '{:U('Childcase/ajaxChildNews')}',        //指向页面
		page = pageNumC || 0,                //获取分类
		data = {"type":type,"page":page};                 //data


	//加载提示	
	$('#spinner1').show();

	$("#childCaseNewsList").load(url, data, function(response, status, xhr){

		if(status == 'success'){
			$("#childCaseNewsList").html('');
			$("#childCaseNewsList").html(response);
			$('#spinner1').hide();
		}else {
			alert('通讯有误！！');
			$('#spinner1').hide();

		}

	});
}
</script>
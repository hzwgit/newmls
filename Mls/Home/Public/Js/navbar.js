$(function(){	
	//获取导航栏与浏览器顶部距离
	var nTop = $('#navbar').offset().top;
	$(window).scroll(function (){
		//获取滚动条与浏览器顶部距离
		var sTop = $(window).scrollTop();
		if(sTop > nTop){
			//$('#navbar').offset().top = $(window).scrollTop();
			$('#navbar').css('position','fixed');
		}else{
			$('#navbar').css('position','relative');
		}
	});
})

$(function(){	
	//��ȡ���������������������
	var nTop = $('#navbar').offset().top;
	$(window).scroll(function (){
		//��ȡ���������������������
		var sTop = $(window).scrollTop();
		if(sTop > nTop){
			//$('#navbar').offset().top = $(window).scrollTop();
			$('#navbar').css('position','fixed');
		}else{
			$('#navbar').css('position','relative');
		}
	});
})

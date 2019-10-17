$('.check_item').click(function(){
	if($(this).find('img').hasClass('active')){
		$(this).find('img').removeClass('active');
	}else{
		$(this).find('img').addClass('active');
	}
});
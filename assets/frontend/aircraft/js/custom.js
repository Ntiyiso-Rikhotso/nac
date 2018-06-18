
jQuery(document).ready(function(){
	$('.action-button').click(function(a){
		alert(JSON.stringify(a));
		a.preventDefault();
		
		$div = $(a).closest('div').find('.main');
		if($div.hasClass('hidden')){
			$div.removeClass('hidden')
		}else{
			$div.addClass('hidden');
		}
	})
	
	$('button.accordion').click(function(a){
		a.preventDefault();
		
		$div = $(a).closest('div').find('.sub');
		if($div.hasClass('hidden')){
			$div.removeClass('hidden').slideDown()
		}else{
			$div.addClass('hidden');
		}
	})

	$('body .rev_slider_wrapper').css({height: '3000px'});
	///alert(1);
});
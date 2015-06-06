/**
 * 首页焦点图
 */
$(function() {
	var windowWidth = $( window).width();
	var liNum       = $('.idx-foc-tmp ul li').length;
	var urlWidth    = windowWidth * liNum;
	$('.idx-foc-tmp').css("width", $( window ).width()+"px" );
	$('.idx-foc-tmp ul li').css("width", $( window ).width()+"px" );
	
	$('.idx-foc-tmp ul li').each(function() {
		$(this).css({
			"background-image" : "url("+$(this).attr('back-img')+")",
		});
	})		
});
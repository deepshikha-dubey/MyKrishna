  $(document).ready(
function(){
	$('.div1 img:gt(0)').hide();
	setInterval(
	function()
	{
	$
	('.div1 :first-child').fadeOut().next('img').fadeIn().end().appendTo('.div1');}, 3000);
}); 

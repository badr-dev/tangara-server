if (typeof jQuery === 'undefined') { throw new Error('Tangara\'s JavaScript requires jQuery') }

(function($){
	$('#icon-close').click(function(){
		console.log("close");
		$('#local-tuto').animate({
			left: '-285px'
			}, 200);
		$('#local-frame').animate({
			left: '0px'
			},200);
	 });
	 
      $('#icon-open').click(function(){
	  console.log("open");
		  $('#local-tuto').animate({
				left: '0px'
				}, 200);
		  $('#local-frame').animate({
			  left: '285px'
			  },200);
	 });
	//console.log("enterede");
	test = function() {
console.log("bravoooo");
};
}(jQuery));

test = function() {
console.log("bravoooo");
};
//console.log("LOADED");
$(document).ready(function() {
	$("a").hover(function() {
		$(this).css("color", "#ffffff");
		$(this).css("background-color", "#000000");
	},function() {
		$(this).css("color", "#000000");
		$(this).css("background-color", "#ffffff")
	});
});
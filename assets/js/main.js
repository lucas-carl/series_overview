$(function() {
	homeSpoiler();
});

function homeSpoiler() {
	$(".thumb-card").click(function() {
		$(".thumb-card").children(".card-context").addClass("hidden");
		$(this).children(".card-context").removeClass("hidden");
	});
}

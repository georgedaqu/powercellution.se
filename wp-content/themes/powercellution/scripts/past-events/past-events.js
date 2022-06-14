jQuery(document).ready(function ($) {
	console.log('works');
	$("#load-button").click(function () {

		$.ajax({
			type: "POST",
			url: "/powercell/wp-admin/admin-ajax.php",
			data: {
				action: "past_events",
			},
			success: function (res) {
				// $('#events_listing_space_id').remove();
				$("#events_listing_space_id").prepend(res);
				// $(".artform").removeAttr('disabled');
			},
			// error: function() {
			// 	$(".artform").removeAttr('disabled');
			// 	$('#loading-js').remove();
			// 	$("#recipes-wrap-js").prepend('<div id="loading-js"><h1 style="color:white">Something went wrong. Please, reload the page.<h1></div>');
			// },
		});
	});
});

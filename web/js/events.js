$(document).ready(function() {


});
// $('.sk').hide();
//
// $( window ).load(function() {
// 	// $('.sk').show();
// 	alert('123')
// });
//
window.onload=function() {
	$('.sk').addClass('show');
	$('#fullpage').fullpage({
		navigation: true,
        scrollingSpeed: 1200,
		afterRender: function () {
			$('.init_slide').addClass('active');
			setTimeout(function () {
				$('.init_btn').each(function (index) {
					var _this = $(this);
					setTimeout(function () {
						$(_this).addClass('active');
					}, index * 200)
				});
			}, 1000);

		},
		onLeave: function (index, nextIndex, direction) {
			var _this = $(this);
			var _indx = index - 1;
			if ($(this).next().find('.simlpe_slide').length && !$(this).next().find('.simlpe_slide').hasClass('active')) {

				setTimeout(function () {
					$(_this).next().find('.simlpe_slide').addClass('active');
				}, 100)
			}

			if (nextIndex == 2) {
				console.log(index);
				$('.bigNumbers').addClass('show_t');
			}

			// if(nextIndex > 2){
			//
			// }

				// setTimeout(function () {
					$('.big_n').eq(_indx).addClass('show_n');
					$('.big_n').eq(_indx - 1).addClass('leave_n');

					setTimeout(function () {
						$('.big_n').eq(_indx - 1).removeClass('leave_n').removeClass('show_n');
					}, 1000)
				// }, 100)

		}

	});
}
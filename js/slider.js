		$(document).ready(function () {
			$('#first-block__slider').slick({
				arrows: false,
				dots: true,
				vertical: true,
				verticalSwiping: true,
				appendDots: $('#first-block-slider-dots'),
				autoplay: true
			});

			$("#block-about-profession__slider").slick({
				arrows: false,
				autoplay: true,
			});
			$("#block-about-profession__slider").on('beforeChange', function (event, slick, currentSlide, nextSlide) {
				$('#block-about-profession .slider__indicator').removeClass('active');
				$(`#block-about-profession .slider__indicator[data-index=${nextSlide}]`).addClass('active');
				$('.slick-current p').removeClass('animate__animated animate__pulse');
			});
			$("#block-about-profession__slider").on('afterChange', function (event, slick, currentSlide, nextSlide) {
				$('.slick-current p').addClass('animate__animated animate__pulse');
			});
			$("#block-about-profession .slider__indicator").click(function (e) {
				e.preventDefault();
				slideIndex = $(this).data('index');
				$('#block-about-profession__slider').slick('slickGoTo', parseInt(slideIndex));
			});

			$('#block-photo__slider').slick({
				rows: 2,
				slidesPerRow: 4,
				dots: true,
				arrows: false,
				appendDots: $('#block-photo-dots'),
				autoplay: true,
				responsive: [
					{
						breakpoint: 992,
						settings: {
							rows: 2,
							slidesPerRow: 2,
						}
					},
					{
						breakpoint: 768,
						settings: {
							rows: 2,
							slidesPerRow: 2,
							arrows: false,
						}
					},
					{
						breakpoint: 480,
						settings: {
							rows: 2,
							slidesPerRow: 2,
							arrows: false,
							dots: false,
						}
					}
				]
			});

			$('#block-video__slider').slick({
				dots: true,
				appendDots: $('#block-video-dots'),
				responsive: [{
					breakpoint: 768,
					settings: {
						arrows: false,
					}
				}],
			});
		});
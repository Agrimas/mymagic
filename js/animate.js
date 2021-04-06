'use strict';
$(document).ready(() => {
	// Сжатие меню
	function showMenu() {
		$('#header').animate({
			height: "100px",
		}, 300, 'linear', () => {
			$("#second-row-navbar").fadeIn(400, 'linear');
			$('#menu_phone').css('display', 'none');
		}).stop(true, true);
	}

	function hideMenu() {
		$('#second-row-navbar').fadeOut(400, 'linear', () => {
			$("#header").css('height', '50px');
			$('#menu_phone').css('display', 'block');
		}).stop(true, true);;
	}

	function onMouseMenu() {
		$('#header').mouseenter(() => {
			showMenu()

		});

		$('#header').mouseleave(() => {
			hideMenu();
		});

	}
	function offMouseMenu() {
		$('#header').off('mouseenter');

		$('#header').off('mouseleave');
	}

	function resizeFunc() {
		if (window.innerWidth < 992) {
			$("#header").css('height', 'auto');
			$('#second-row-navbar').css('display', 'none');
			$('#menu_phone').css('display', 'none');
			$('#header').off('mouseenter');
			$('#header').off('mouseleave');
		} else {
			if (pageYOffset > 0) {
				offMouseMenu();
				onMouseMenu();
				hideMenu();
			} else {
				offMouseMenu();
				showMenu();
			}
		}
	}

	$().on("click", function (event) {
		console.log(event.target.nodeName + " clicked");
	});

	window.addEventListener('scroll', function () {
		if ($(window).width() >= 992) {
			if (pageYOffset > 0) {
				offMouseMenu();
				onMouseMenu();
				hideMenu();
			} else {
				offMouseMenu();
				showMenu();
			}
		}
	});

	let timer = setTimeout(() => { }, 10);
	window.addEventListener('resize', (e) => {
		clearTimeout(timer);
		timer = setTimeout(() => {
			resizeFunc();//Выполняемая функция
		}, 500);
	})

	// Плавный скролл
	const smoothLinks = $('.nav-link , .logo-link');
	for (let smoothLink of smoothLinks) {
		smoothLink.addEventListener('click', function (e) {
			e.preventDefault();
			const id = smoothLink.getAttribute('name');
			document.querySelector(id).scrollIntoView({
				behavior: 'smooth',
				block: 'center'
			});
		});
	};

	// Кнопка вверх
	$('body').append('<div class="upbtn"></div>');
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('.upbtn').css({ bottom: '80px' })
		} else {
			$('.upbtn').css({ bottom: '-80px' })
		}
	});
	$('.upbtn').on('click', function () {
		$('html, body').animate({ scrollTop: 0 }, 500); return false
	});

	// Анимации кнопок
	function setAnimate(elem) {
		elem.click(function (e) {
			e.preventDefault();
			$(this).addClass('animate__animated animate__pulse');
			setTimeout(
				() => {
					$(this).removeClass('animate__animated animate__pulse');
				}
				, 1000);
		});
	}

	const animateElems = [
		$("#block-about-profession .slider__indicator"),
		$("#block-photo__slider .slick-arrow"),
		$("#block-video__slider .slick-arrow"),
		$('button')
	]
	animateElems.forEach((elem) => {
		setAnimate(elem);
	})
})
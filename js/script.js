$(document).ready(function () {
	// Owl init
	$(".owl-carousel").owlCarousel({
		'responsive': {
			'0': {'items': 1},
			'476': {'items': 1},
			'768': {'items': 1},
			'992': {'items': 1},
			'1200': {'items': 1}
		},
		'autoplay': true,
		'autoplayTimeout': 3000,
		'dots': true,
		// 'nav': true
	});

	$(".partners-carousel").owlCarousel({
		'responsive': {
			'0': {'items': 1},
			'476': {'items': 1},
			'768': {'items': 1},
			'992': {'items': 1},
			'1200': {'items': 1}
		},
		'autoplay': true,
		'autoplayTimeout': 3000,
		'dots': true,
		'nav': true
	});

	let sandwitch = function () {
		$('.sandwitch-wrap').on('click', function () {
			$('#bs-example-navbar-collapse-1').toggleClass('active');

			$(this).toggleClass('sandwitch--active');
			$(this).find('.sandwitch').toggleClass('sandwitch--active');
		});
	};
	sandwitch();

	let closeMenuAfterClick = function () {
		$('#menu-menu-1 li a').on('click', function () {
			$('.header-bottom').removeClass('active');
			$('.sandwitch-wrap').removeClass('sandwitch--active');
			$('.sandwitch').removeClass('sandwitch--active');
		});
	};
	closeMenuAfterClick();

	let menuFirstItemActive = function () {
		if ($(window).width() < 768) {
			if (!$('#menu-menu-1 li:nth-child(2)').hasClass('current-menu-item')) {
				$('#menu-menu-1 li:first-child').addClass('current-menu-item');
			}
		}

		// if(!$('#menu-menu-1 li:nth-child(2)').hasClass('current-menu-item')){
		// 	$('#menu-menu-1 li:nth-child(3)').removeClass('current-menu-item');
		// 	$('#menu-menu-1 li:nth-child(4)').removeClass('current-menu-item');
		// }
	};
	// menuFirstItemActive();

	let activeMenuItem = function () {
		let url = location.href;
		console.log(url);
		if ($(window).width() > 768) {
			$('#menu-menu-1 li').removeClass('current-menu-item');
			if ($(url.includes('about'))) {
				console.log(url.includes('about'));
				// $('#menu-menu-1 li a[href="https://egc.md/#about"]').parent('li').addClass('current-menu-item');
			}
		}
	};
	activeMenuItem();
});
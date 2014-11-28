(function($) {
	"use strict";
	var fn = function() {

		// Shrink header on scroll
		// ---------------------------------------------------------------------------------------
		function handleAnimatedHeader() {
				var header = $('.header');
				var newScroll = null;
				var scrollMinHeight = 500;

				function refresh() {
					var scroll = $(window).scrollTop();

					if (scroll > scrollMinHeight) {
						if (scroll < newScroll) {
							header.addClass('shrink fixed');
						} else {
							header.removeClass('shrink fixed');
						}
					}
					if (scroll < 20) {
						header.removeClass('shrink fixed');
					}
					newScroll = scroll;

				};


				// $(window).load(function () { refresh(); });
				$(window).scroll(function () { refresh(); });

				// $(window).on('touchstart',function(){ refresh(); });
				// $(window).on('scrollstart',function(){ refresh(); });
				// $(window).on('scrollstop',function(){ refresh(); });
				// $(window).on('touchmove',function(){ refresh(); });

		}

		// prevent empty links
		// ---------------------------------------------------------------------------------------
		function handlePreventEmptyLinks() {
				$('a[href=#]').click(function (event) {
						event.preventDefault();
				});
		}


		// Add some class
		// ---------------------------------------------------------------------------------------
		function handleChangeClass() {
			$('ul li:first-child, ol li:first-child').addClass('firstItem');
			$('ul li:last-child, ol li:last-child').addClass('lastItem');
			var visible = false;
			var visibleMobMenu = false;

			$('body').click(function(e) {

				// mega menu
				if ($(e.target).parents().filter(".site-search").length != 0 && !visible) {
					$('.form-control-search').fadeToggle().focus();
					$('.js-trigger-search .fa-search, .js-trigger-search .fa-close').toggleClass('hide');
					visible = true;
				} else if ($(e.target).hasClass(".sh-dottes") && visible || $(e.target).parents().filter(".js-trigger-search").length != 0 && visible || !$(e.target).parents().filter(".site-search").length != 0 && visible) {
					$('.form-control-search').fadeToggle().blur();
					$('.js-trigger-search .fa-search, .js-trigger-search .fa-close').toggleClass('hide');
					visible = false;
				}

				// mobile menu
				if ($(e.target).is("#js-trigger-mobile-menu") && !visibleMobMenu) {
					$("#js-trigger-mobile-menu").toggleClass('in');
					$('.h-right-bar').toggleClass('in');
					visibleMobMenu = true;
				} else if ($(e.target).is("#js-trigger-mobile-menu") && visibleMobMenu || !$(e.target).parents().filter(".h-right-bar").length != 0 && visibleMobMenu) {
					$("#js-trigger-mobile-menu").toggleClass('in');
					$('.h-right-bar').toggleClass('in');
					visibleMobMenu = false;
				}

				e.preventDefault();
			});




			// mobile menu
			$('.h-right-bar .has-ul-child > a').click(function(e) {
				if ($(".h-right-bar").hasClass("in")) {
					$(this).parent().toggleClass('active_item_mobile');
					$(this).next().stop().slideToggle("easeInOutCirc");
					e.preventDefault();
				}
			});


		}

		// Check of Retina
		// ---------------------------------------------------------------------------------------
		function handleRetina() {
			String.prototype.filename=function(extension){
				var s= this.replace(/\\/g, '/');
				s= s.substring(s.lastIndexOf('/')+ 1);
				return extension ? s.replace(/[?#].+$/, ''): s.split()[0];
			}

			if (window.devicePixelRatio > 1.5) {
				var lowresImages = $('img.rtn_img');
				lowresImages.each(function(i) {
					var lowres = $(this).attr('src');
					var highres = lowres.filename();
					$(this).attr('src', "img/retina/"+highres);
				});
			}
		}

		// Page Onload
		// ---------------------------------------------------------------------------------------
		// jQuery(window).load(function() {
		// 	// $('.header, .super-header').fadeTo(300, 1);
		// });

		// MegaHeader
		// ---------------------------------------------------------------------------------------
		function handleMegaHeader() {
			var visible = false;
			var elemTrigger = '#js-sh-line';
			$('body').click(function(e) {
				if ($(e.target).parents().filter(".super-header").length != 0 && !visible) {
					$('.super-header').addClass('in');
					checkValue();
				} else if ($(e.target).is(elemTrigger) && visible || $(e.target).parents().filter(elemTrigger).length != 0 && visible || !$(e.target).parents().filter(".super-header").length != 0 && visible) {
					$('.super-header').removeClass('in');
					checkValue();
				}
				e.preventDefault();
			});

			// set header on position
			$('.super-header .no-target-block_empty').css(
			{
				'display': 'block',
				'marginTop': -$('.super-header .no-target-block_empty').innerHeight(),
			});

			// change marginTop on event resize
			var oldwidth = $('.container:first-of-type').width();
			$(window).resize(function () {
				var nw = $('.container:first-of-type').width();
				if (oldwidth != nw) {
					$('.super-header .no-target-block_empty').css('marginTop', -$('.super-header .no-target-block_empty').innerHeight());
					oldwidth = nw;
				};
			});

			function checkValue() {
				var value;
				if (!visible) {
					value = 0;
				} else {
					value = -$('.super-header .no-target-block_empty').outerHeight();
				}

				$(elemTrigger).prev().stop().animate({
					marginTop: value,
				},
				{
					duration: 600,
					easing: 'easeInOutCirc',
					complete: function() {
						if (!visible) {
							visible = true;
						} else {
							visible = false;
						}
					}
				});
			}

		}

		return {
			init: function() {
				handleAnimatedHeader();
				handleChangeClass();
				handleMegaHeader();
				handlePreventEmptyLinks();
				handleRetina();
			},


			// Сhange Class
			// ---------------------------------------------------------------------------------------
			initChangeClass: function() {
				$('ul li:first-child, ol li:first-child').addClass('firstItem');
				$('ul li:last-child, ol li:last-child').addClass('lastItem');
			},


			// RevSlider
			// ---------------------------------------------------------------------------------------
			initSlider: function() {
				var revapi;
				var goSlide = false;

				revapi = $('.rev_banner').show().revolution(
				{
					delay: 520000,
					startwidth: 1170,
					startheight: 640,
					hideThumbs: 10,
					fullWidth: "off",
					fullScreen: "on",
					navigationVAlign: "bottom",
					navigationHOffset: 0,
					navigationVOffset: 20,
					fullScreenAlignForce: "on",
					fullScreenOffsetContainer: ".revo-pag",
					// parallax:"scroll",
					// parallaxBgFreeze:"on",
					// parallaxLevels:[10,20,30,40,50,60,70,80,90,100]
				});

				// onloaded
				revapi.bind("revolution.slide.onloaded", function(e,data) {
					var maxSlides = revapi.revmaxslide();
					var getMargin;


					for (var i = 1; i <= maxSlides; i++) {
						$('#revo-pag li a').eq(i-1).attr('revSlide', i);
						$('#js-mobile-pagination').append('<li><a href="#" revSlide="'+i+'"></a></li>');
						if (i==1) {
							$("#js-mobile-pagination li:first-child").addClass('current-slide');
						}
					}

					if (maxSlides > 1) {
						getMargin = $('#js-mobile-pagination li + li').css("marginLeft").replace("px", "");
					}

					$('#revo-pag li a, #js-mobile-pagination li a').click(function() {
						if (goSlide) {
							revapi.revshowslide($(this).attr('revSlide'));
							moveArr($(this).parent().position().left + $(this).parent().width()/2);
							$(this).parent().addClass('current-slide').siblings('.current-slide').removeClass('current-slide');
						};
					});

					changeMarginBullet();
					$(window).resize(function () {
						changeMarginBullet();
					});

					// change marginLeft on event resize
					function changeMarginBullet() {
							var nw = $('#js-mobile-pagination').width()+60;
							var oldwidth = $(window).width();
							if (oldwidth < nw && getMargin >= 25) {
								$('#js-mobile-pagination li:gt(0)').css('marginLeft', getMargin-=10);
								return changeMarginBullet();
							}
					}

					// hide preloader
					$('#js-mobile-pagination').fadeIn();
					$('.shadow-preloader').addClass("goAwayCircles");
					setTimeout(function() {
						$('.live-prealoder').fadeOut();
					}, 200);
				});

				// clone pagination for mobile
				revapi.bind("revolution.slide.onafterswap", function(e,data) {
					goSlide = true;
				});

				revapi.bind("revolution.slide.onbeforeswap", function(e,data) {
					goSlide = false;
				});


				// onchange
				revapi.bind("revolution.slide.onchange", function(e,data) {
					var current = data.slideIndex-1;
					moveArr($("#revo-pag li").eq(current).position().left + $("#revo-pag li").eq(current).width()/2);
					$("#revo-pag li").eq(current).addClass('current-slide').siblings('.current-slide').removeClass('current-slide');
					$("#js-mobile-pagination li").eq(current).addClass('current-slide').siblings('.current-slide').removeClass('current-slide');
				});

				// moveMagicArr
				function moveArr(pos) {
					if (pos == 0) {
						pos = $('#revo-pag li:eq(0)').width() / 2
					}
					$("#js-arr-magic").smooth({
							transform: "translate3d("+pos+"px,0,0)",
						},{
						duration: 1000,
						easing: "swing"
					});
				}
			},


			// InitCarousel
			// ---------------------------------------------------------------------------------------
			initCarousel: function() {
				$('.carousel-slider').flexslider({
					animation: "slide",
					animationLoop: false,
					itemWidth: 378,
					maxItems: 3,
					minItems: 1,
					move: 2,
					controlNav: false,
					prevText: "", //String: Set the text for the "previous" directionNav item
					nextText: "",
					slideshow: false
				});

			},


			// InitParallax
			// ---------------------------------------------------------------------------------------
			initParallax: function() {
				// $('#js-parallax-back').parallax("50%", -0.1, true);

				// init slider bg parallax
				// var duration = $("#has-ctxParallax .defaultimg").height() + $(window).height();
				// var bgPosMovement = "0 " + (-duration*0.3) + "px";
				// var controller2 = new ScrollMagic({globalSceneOptions: {triggerHook: "onEnter", duration: duration}});
				// new ScrollScene({triggerElement: "#trigger-parallax_1"})
				// 				.setTween(TweenMax.to("#has-ctxParallax .defaultimg", 1, {backgroundPosition: bgPosMovement + '!important', ease: Linear.easeNone}))
				// 				.addTo(controller2)
				// 				.addIndicators({zindex: 1});


				// init slider content parallax
				// var controller = new ScrollMagic();

				// // build tween
				// var tween = TweenMax.from("#has-ctxParallax .tp-parallax-container", 0.5, {autoAlpha: 0, transform: "translateY(0)"});
				// var tween = TweenMax.to("#has-ctxParallax .tp-parallax-container", 0.5, {autoAlpha: 0, transform: "translateY(0)"});

				// // build scene
				// var scene = new ScrollScene({triggerElement: "#trigger-parallax_1", duration: 1200, triggerHook: "onLeave"})
				// 				.setTween(tween)
				// 				.addTo(controller);

				// // show indicators (requires debug extension)
				// scene.addIndicators();

				// parallax in slider
				var controller = new ScrollMagic({
				    globalSceneOptions: {
				        triggerHook: "onLeave"
				    }
				});

				// pinani
				var pinani = new TimelineMax()
			    // panel wipe uno
			    .add([
			    		TweenMax.to("#has-ctxParallax .defaultimg", 0.5, {transform: "translate3d(0,250px,0)"}),
			    		TweenMax.to("#has-ctxParallax .tp-parallax-container", 0.5, {autoAlpha: 0, transform: "translate3d(0,350px,0)"}),
			    	])

				// panel section pin
				var scene = new ScrollScene({
				        triggerElement: "#trigger-parallax_1",
				        duration: 900
				    })
				    .setTween(pinani)
				    // .setPin("#lalala")
				    .addTo(controller);

				scene.addIndicators();


				// bg-parallax
				var duration = $("#js-parallax-back").height() + $(window).height();
				var bgPosMovement = "0 " + (-duration*0.3) + "px";
				var controller2 = new ScrollMagic({globalSceneOptions: {triggerHook: "onEnter", duration: duration}});
				var scene2 = new ScrollScene({triggerElement: "#trigger-parallax_2"})
								.setTween(TweenMax.to("#js-parallax-back", 1, {backgroundPosition: bgPosMovement, ease: Linear.easeNone}))
								.addTo(controller2)
								.addIndicators({zindex: 1});



			},


			// InitWaves
			// ---------------------------------------------------------------------------------------
			initWaves: function() {
				Waves.displayEffect();
			},


			// Init Superfish Menu
			// ---------------------------------------------------------------------------------------
			initSuperFish: function() {
				var mediaPoint = 1179;
				var settingsMenu =
				$('#js-primary-list').superfish({
					cssArrows:     false,
					delay:   			 300,
					animation:     {height: 'show', opacity:'show'}
				});
				var primaryFishMenu = $('#js-primary-list').superfish({
																cssArrows:     false,
																delay:   			 300,
																animation:     {height: 'show', opacity:'show'}
															});
				var deleteMenuFun = false;
				// initMenu
				initMenu();


				$(window).resize(function() {
					// initMenu
					initMenu();
				});

				function initMenu() {
					if ($(window).width() <= mediaPoint && !deleteMenuFun) {
						primaryFishMenu.superfish('destroy');
						deleteMenuFun = true;
					} else if ($(window).width() >= mediaPoint+1 && deleteMenuFun) {
						primaryFishMenu = $('#js-primary-list').superfish({
																cssArrows:     false,
																delay:   			 300,
																animation:     {height: 'show', opacity:'show'}
															});
						deleteMenuFun = false;
					}
				}


			}




		};
	}();

	$(document).ready(function() {
		fn.init();
		fn.initChangeClass();
		fn.initSlider();
		fn.initCarousel();
		fn.initWaves();
		fn.initSuperFish();
		fn.initParallax();

		// $( "#draggable" ).draggable();
	});

	// jQuery(document).load(function(){ fn.onResize(); });
	// jQuery(window).resize(function(){ theme.onResize(); });
	// jQuery(window).load(function(){ theme.onResize(); });



})(jQuery);

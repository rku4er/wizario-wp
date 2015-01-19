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
				}


			$(window).load(function () { refresh(); });
			$(window).scroll(function () { refresh(); });
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

				//e.preventDefault();
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
		function handleAnimations() {


			function thegravity_fade_texts() {
		    setTimeout(function() {
			    $(".fadeFromTop").smooth({
			    		transform: "translate3d(0,0,0)",
			    		opacity: 1
			    	},{
			    	 duration: 1000,
			    	 easing: "swing",
			    });
		    }, 1000);

		    setTimeout(function() {
			    $(".fadeFromBottom").smooth({
			    		transform: "translate3d(0,0,0)",
			    		opacity: 1
			    	},{
			    	 duration: 1000,
			    	 easing: "swing",
			    });
		    }, 1000);

		    setTimeout(function() {
			    $(".fastFadeFromTop").smooth({
			    		transform: "translate3d(0,0,0)",
			    		opacity: 1
			    	},{
			    	 duration: 1000,
			    	 easing: "swing",
			    });
		    }, 300);

			}

	    var pagetitle = jQuery('.blog-header');
      if (pagetitle.length) {
          var images = jQuery('img, .blog-header');
          jQuery.each(images, function() {
              var el = jQuery(this),
              image = el.css('background-image').replace(/"/g, '').replace(/url\(|\)$/ig, '');
              if(image && image !== '' && image !== 'none')
                  images = images.add(jQuery('<img>').attr('src', image));
              if(el.is('img'))
                  images = images.add(el);
          });
          images.imagesLoaded(thegravity_fade_texts);
      } else {
          thegravity_fade_texts();
      }
		}


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
				//e.preventDefault();
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


		// FilterIzotope
		// ---------------------------------------------------------------------------------------
		function handleFilter() {
			var $container = $("#portfolio");


			$container.isotope({
				itemSelector: '.item',
				resizable: true,
			});

			if($('#portfolio').attr('data-fade') == 1) {
				$('#portfolio.portfolio-items .item').css('opacity',0);
				$('#portfolio.portfolio-items .item').each(function(i){
					$(this).delay(i * 150).animate({'opacity':1},350);
				});
			}

			$('#portfolio-filters li a').click(function(){
				var selector = $(this).attr('data-filter');
				$container.isotope({ filter: selector });
				$('#portfolio-filters li a').removeClass('active');
				$(this).addClass('active');
				return false;
			});
		}


		// Smart Sidebar Stack
		// ---------------------------------------------------------------------------------------
		function handleStack() {

			$(window).scroll(function (a,b) {
				if ($('div').is('.js-smart-stack')) {
			  var obj = $('.js-trigger-smart-stack'),
			      objPull = $('.header').height(),
			      rblock = obj.find('.js-smart-stack'),
			      offset = obj.offset(),
			      scrollTop = $(window).scrollTop(),
			  		objWidth = rblock.width(),
			  		objHeight = obj.outerHeight(),
			  		rblockHeight = rblock.outerHeight(),
			  		posTop = rblock.position();

				  if(scrollTop - offset.top > 0 && scrollTop-offset.top < objHeight - rblockHeight) {
				  	rblock.css({
				  		'width': objWidth,
				  		'position': 'fixed',
				  		'bottom': 'auto',
				  		'top': 63,
				  	});
				  } else if (scrollTop > offset.top) {
				  	rblock.css({
				  		'width': 'auto',
				  		'position': 'absolute',
				  		'bottom': 'auto',
				  		'top': objHeight-rblockHeight,
				  	});
				  } else {
				  	rblock.css({
				  		'width': 'auto',
				  		'position': 'static',
				  		'bottom': 'auto',
				  		'top': 'auto',
				  	});
				  }
			  }
			});

		}

		function handleTogglePanel() {
			$("#accordion-toggle .panel-collapse").collapse({
			  toggle: true
			});
		}

		function handleProgressbar() {
			$('.js-progressbar').each(function(){
          var $this = $(this);
          var value = parseInt($this.attr('data-graph-percent'));

          var $graph = $this.progressbar({
              value: 1,
               create: function(event, ui){

                  var $r3 = $('<div>').addClass('graph-percent').append($('<i class="icon-caret-right"></i>'));

                  $r3.find('i').after(
                      $('<span>').append(
                          $('<span>').text(
                              $this.progressbar('option', 'value') + '%'
                          )
                      )
                  );

                  $(this).find('.ui-progressbar-value').append($r3);

              },
              change: function(event, ui){
                  $(this).find('.ui-progressbar-value .graph-percent span span').text(
                      $this.progressbar('option', 'value') + '%'
                  )
              }
          });
          var graph_progress = setInterval(function() {
              var cur_value = $graph.progressbar('option', 'value');


              var percent = !isNaN(cur_value) ? (cur_value + 1) : 1;
              if (percent > value) {
                  clearInterval(graph_progress);
                  $graph.progressbar({
                      value : value
                  });
              } else {
                  $graph.progressbar({
                      value : percent
                  });
              }
          }, 1 - Math.sin(Math.acos(value)));
      });
		}





		return {
			init: function() {
				handleAnimatedHeader();
				handleChangeClass();
				handleMegaHeader();
				//handlePreventEmptyLinks();
				handleRetina();
				handleFilter();
				handleAnimations();
				handleStack();
				handleTogglePanel();
				handleProgressbar();
			},


			// Сhange Class
			// ---------------------------------------------------------------------------------------
			initChangeClass: function() {
				$('ul li:first-child, ol li:first-child').addClass('firstItem');
				$('ul li:last-child, ol li:last-child').addClass('lastItem');
			},

			initPieChart: function() {
				var doughnutData = [
						{
							value: 60,
							color:"#ff9900",
							highlight: "#d78203",
							label: "Red"
						},
						{
							value: 300,
							color: "#34d5b6",
							highlight: "#20c1a2",
							label: "Grey"
						},
						{
							value: 120,
							color: "#96d534",
							highlight: "#77b21c",
							label: "Dark Grey"
						}

					];

					function hasClassName(classname,id) {
					  return  String ( ( document.getElementById(id)||{} ) .className )
					         .split(/\s/)
					         .indexOf(classname) >= 0;
					}


					if (hasClassName('','chart-area')) {
						window.onload = function() {
							var ctx = document.getElementById("chart-area").getContext("2d");
							var myDoughnut = new Chart(ctx).Doughnut(doughnutData, {
								responsive : true,
								animationEasing : "ease",
								segmentShowStroke : false,
								animationSteps: 40,
							});
						}
					}


					$('.chart').easyPieChart({
							lineWidth: 30,
							barColor: "#34d5b6",
							trackColor: "#f3f3f3",
							scaleLength: 0,
							size: 210,
							lineCap: "square",
							onStep: function(from, to, currentValue) {
								$(this.el).find('.percent').text(Math.round(currentValue));
							}
					});

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
						$('#rev-loader').fadeOut();
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
				var $window = $(window),
				    flexslider;

				// tiny helper function to add breakpoints
				function getGridSize() {
				  return (window.innerWidth < 500) ? 1 :
				         (window.innerWidth < 1179) ? 2 : 3;
				}

				$('.carousel-slider').flexslider({
					animation: "slide",
					animationLoop: false,
					itemWidth: 377,
					minItems: getGridSize(),
					maxItems: getGridSize(),
					move: 1,
					controlNav: false,
					prevText: "",
					nextText: "",
					slideshow: false,
				});

				$window.resize(function() {
				  var gridSize = getGridSize();

				  if(typeof flexslider !== 'undefined'){
					flexslider.vars.minItems = gridSize;
				  	flexslider.vars.maxItems = gridSize;
				  }

				});
			},


			// InitParallax
			// ---------------------------------------------------------------------------------------
			initParallax: function() {
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
			    		TweenMax.to("#has-ctxParallax .blog-bg", 0.5, {transform: "translate3d(0,250px,0)"}),
			    		TweenMax.to("#has-ctxParallax .fadeInTop", 0.3, {transform: "translate3d(0,100px,0)"}),
			    		TweenMax.to("#has-ctxParallax .tp-parallax-container", 0.5, {autoAlpha: 0, transform: "translate3d(0,350px,0)"}),
			    	])

				// panel section pin
				var scene = new ScrollScene({
				        triggerElement: "#trigger-parallax_1",
				        duration: 900
				    })
				    .setTween(pinani)
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
			},


			// Init Single Slider
			// ---------------------------------------------------------------------------------------
			initSingleSlider: function() {
				$('.single-slider').flexslider({
				  animation: "slide",
				  directionNav: false,
				  slideshow: false
				});
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
		fn.initSingleSlider();
		fn.initPieChart();

		// $( "#draggable" ).draggable();
	});




})(jQuery);

(function($){
"use strict"; // Start of use strict
//Document Ready
jQuery(document).ready(function(){
	$('img.lazy').lazyload();
	$('input').iCheck({
	    checkboxClass: 'icheckbox_square-green',
	    radioClass: 'iradio_square-green',
	    increaseArea: '20%' // optional
	  });
	//Back To Top
	$('.back-to-top').on('click',function(event){
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow');
	});
	//Menu Responsive
	if($(window).width()<768){
		$('body').on('click',function(event){
			$('.main-nav>ul').slideUp('slow');
		});
		$('.toggle-mobile-menu').on('click',function(event){
			event.preventDefault();
			event.stopPropagation();
			$('.main-nav>ul').slideToggle('slow');
		});
		$('.main-nav li.menu-item-has-children>a').on('click',function(event){
			event.preventDefault();
			event.stopPropagation();
			$(this).next().slideToggle('slow');
		});

		$('.top-info li.has-child>a').on('click',function(event){
			event.preventDefault();
			event.stopPropagation();
			$(this).next().toggle();
		})
	}
	
	//Accordions
	if($('.accordion-box').length >0){
		$('.accordion-box').each(function(){
			$('.title-accordion').click(function(){
				$(this).parent().parent().find('.item-accordion').removeClass('active');
				$(this).parent().addClass('active');
				$(this).parent().parent().find('.desc-accordion').stop(true,true).slideUp();
				$(this).next().stop(true,true).slideDown();
			});
		});
	}
	//Toggle Filter
	$('body').on('click',function(){
		$('.box-product-filter').slideUp('slow');
	});
	$('.toggle-link-filter').on('click',function(event) {
		event.stopPropagation();
		event.preventDefault();
		$('.box-product-filter').slideToggle('slow');
	});
	//Product Quick View
	$('.quickview-link').each(function(){
		$(this).fancybox();
	});
	$('.team-gallery-thumb').each(function(){
		$(this).fancybox();
	});
	//Faqs Widget
	$('.list-post-faq li h3').on('click',function(event) {
		$('.list-post-faq li').removeClass('active');
		$(this).parent().addClass('active');
	});
	//World Hover Dir
	$('.world-ad-box').each( function() {
		$(this).hoverdir(); 
	});
	//Close Adv
	$('.adv-close-link').on('click',function(event) {
		event.preventDefault();
		$('.adv-close').slideUp('slow');
	});
	//Category Hover
	$('.list-category-hover>li:gt(12)').hide();
	$('.expand-list-link').on('click',function(event) {
		event.preventDefault();
		$(this).toggleClass('expanding');
		$('.list-category-hover>li:gt(12)').slideToggle('slow');
	});
	$('.list-category-hover a').on('mouseover',function() {
		var id_hv = $(this).attr('data-id');
		/* console.log(id_hv); */
		$('.inner-right-category-hover').each(function(){
			if($(this).attr('id')==id_hv){
				$(this).addClass('active');
			}else{
				$(this).removeClass('active');
			}
		})
		
	});
	//Category Toggle 
	// $('.list-category-dropdown >li:gt(9)').hide();
	// $('.expand-category-link').on('click',function(event) {
	// 	event.preventDefault();
	// 	$(this).toggleClass('expanding');
	// 	$('.list-category-dropdown >li:gt(9)').slideToggle('slow');
	// });

	//Category Toggle Home 8
	// $('.list-category-dropdown8 >li:gt(10)').hide();
	// $('.expand-category-link8').on('click',function(event) {
	// 	event.preventDefault();
	// 	$(this).toggleClass('expanding');
	// 	$('.list-category-dropdown8 >li:gt(10)').slideToggle('slow');
	// });

	$('.category-dropdown').each(function(){
		var items = $(this).data('items');
		if( typeof(items) == 'undefined'){
			items = 10;
		}
		items = items -1;
		$(this).find('.list-category-dropdown >li:gt('+items+')').hide();
	});

	$('.expand-category-link').on('click',function(event) {
		
		event.preventDefault();
		$(this).toggleClass('expanding');
		var wapper = $(this).closest('.category-dropdown');
		var items = wapper.data('items');
		if( typeof(items) == 'undefined'){
			items = 10;
		}
		items = items -1;
		wapper.find('.list-category-dropdown >li:gt('+ items +')').slideToggle('slow');
	});
	

	//Outlet mCustom Scrollbar
	if($('.list-outlet-brand').length>0){
		$(".list-outlet-brand").mCustomScrollbar();
	}
	//Deal Count Down
	if($('.super-deal-countdown').length>0){
		$(".super-deal-countdown").TimeCircles({
			fg_width: 0.01,
			bg_width: 1.2,
			text_size: 0.07,
			circle_bg_color: "#ffffff",
			time: {
				Days: {
					show: true,
					text: "Days",
					color: "#f9bc02"
				},
				Hours: {
					show: true,
					text: "Hour",
					color: "#f9bc02"
				},
				Minutes: {
					show: true,
					text: "Mins",
					color: "#f9bc02"
				},
				Seconds: {
					show: true,
					text: "Secs",
					color: "#f9bc02"
				}
			}
		}); 
	}
	if($('.top-toggle-coutdown').length>0){
		$(".top-toggle-coutdown").TimeCircles({
			fg_width: 0.03,
			bg_width: 1.2,
			text_size: 0.07,
			circle_bg_color: "rgba(27,29,31,0.5)",
			time: {
				Days: {
					show: true,
					text: "day",
					color: "#fbb450"
				},
				Hours: {
					show: true,
					text: "hou",
					color: "#fbb450"
				},
				Minutes: {
					show: true,
					text: "min",
					color: "#fbb450"
				},
				Seconds: {
					show: true,
					text: "sec",
					color: "#fbb450"
				}
			}
		}); 
	}
	if($('.hot-deal-tab-countdown').length>0){
		$(".hot-deal-tab-countdown").TimeCircles({
			fg_width: 0,
			bg_width: 1,
			text_size: 0.07,
			time: {
				Days: {
					show: true,
					text: "D",
				},
				Hours: {
					show: true,
					text: "H",
				},
				Minutes: {
					show: true,
					text: "M",
				},
				Seconds: {
					show: true,
					text: "S",
				}
			}
		}); 
	}
	if($('.hotdeal-countdown').length>0){
		$(".hotdeal-countdown").TimeCircles({
			fg_width: 0,
			bg_width: 1,
			text_size: 0.07,
			time: {
				Days: {
					show: true,
					text: "D",
				},
				Hours: {
					show: true,
					text: "H",
				},
				Minutes: {
					show: true,
					text: "M",
				},
				Seconds: {
					show: true,
					text: "S",
				}
			}
		}); 
	}
	if($('.hotdeal-countdown5').length>0){
		$(".hotdeal-countdown5").TimeCircles({
			fg_width: 0,
			bg_width: 1,
			text_size: 0.07,
			circle_bg_color: "#f4f4f4",
			time: {
				Days: {
					show: false,
					text: "Days",
					color: "#e62e04"
				},
				Hours: {
					show: true,
					text: "Hour",
					color: "#e62e04"
				},
				Minutes: {
					show: true,
					text: "Mins",
					color: "#e62e04"
				},
				Seconds: {
					show: true,
					text: "Secs",
					color: "#e62e04"
				}
			}
		}); 
	}
	if($('.dealoff-countdown').length>0){
		$(".dealoff-countdown").TimeCircles({
			fg_width: 0,
			bg_width: 1,
			text_size: 0.07,
			circle_bg_color: "#fff",
			time: {
				Days: {
					show: false,
					text: "d",
				},
				Hours: {
					show: true,
					text: "h",
				},
				Minutes: {
					show: true,
					text: "m",
				},
				Seconds: {
					show: true,
					text: "s",
				}
			}
		}); 
	}
	if($('.great-deal-countdown').length>0){
		$(".great-deal-countdown").TimeCircles({
			fg_width: 0,
			bg_width: 1,
			text_size: 0.07,
			circle_bg_color: "#fff",
			time: {
				Days: {
					show: true,
					text: "d",
				},
				Hours: {
					show: true,
					text: "h",
				},
				Minutes: {
					show: true,
					text: "m",
				},
				Seconds: {
					show: true,
					text: "s",
				}
			}
		}); 
	}
	if($('.deal-countdown8').length>0){
		$(".deal-countdown8").TimeCircles({
			fg_width: 0.01,
			bg_width: 1.2,
			text_size: 0.07,
			circle_bg_color: "#fafafa",
			time: {
				Days: {
					show: true,
					text: "D",
					color: "#e62e04"
				},
				Hours: {
					show: true,
					text: "H",
					color: "#e62e04"
				},
				Minutes: {
					show: true,
					text: "M",
					color: "#e62e04"
				},
				Seconds: {
					show: true,
					text: "S",
					color: "#e62e04"
				}
			}
		}); 
	}
	if($('.supperdeal-countdown').length>0){
		$(".supperdeal-countdown").TimeCircles({
			fg_width: 0.03,
			bg_width: 1.2,
			text_size: 0.07,
			circle_bg_color: "#5f6062",
			time: {
				Days: {
					show: true,
					text: "day",
					color: "#c6d43a"
				},
				Hours: {
					show: true,
					text: "hou",
					color: "#c6d43a"
				},
				Minutes: {
					show: true,
					text: "min",
					color: "#c6d43a"
				},
				Seconds: {
					show: true,
					text: "sec",
					color: "#c6d43a"
				}
			}
		}); 
	}
	//Tab Control
	$('.title-tab-product li a').on('click',function(event) {
		event.preventDefault();
		$('.title-tab-product li').removeClass('active');
		$(this).parent().addClass('active');
		$('.content-tab-product .tab-pane').each(function(){
			if($(this).attr('id')==$('.title-tab-product li.active a').attr('data-id')){
				$(this).slideDown();
			}else{
				$(this).slideUp();
			}
		});
	});
	//Close Service Box
	$('.close-service-box').on('click',function(event) {
		event.preventDefault();
		$('.list-service-box').slideUp('slow');
	});
	//Close Top Toggle
	$('.close-top-toggle').on('click',function(event) {
		event.preventDefault();
		$('.top-toggle').slideUp('slow');
	});
	//Detail Gallery
	if($('.detail-gallery').length>0){
		$(".detail-gallery .carousel").jCarouselLite({
			btnNext: ".gallery-control .next",
			btnPrev: ".gallery-control .prev",
			speed: 800,
			visible:4,
		});
		//Elevate Zoom
		$('.detail-gallery .mid img').elevateZoom({
			zoomType: "inner",
			cursor: "crosshair",
			zoomWindowFadeIn: 500,
			zoomWindowFadeOut: 750
		});
		$(".detail-gallery .carousel a").on('click',function(event) {
			event.preventDefault();
			$(".detail-gallery .carousel a").removeClass('active');
			$(this).addClass('active');
			$(".detail-gallery .mid img").attr("src", $(this).find('img').attr("src"));
			var z_url = $('.detail-gallery .mid img').attr('src');
			$('.zoomWindow').css('background-image','url("'+z_url+'")');
		});
	}
	//Sort Pagi Bar
	$('body').on('click',function(){
		$('.product-order-list').slideUp();
		$('.per-page-list').slideUp();
	});
	$('.product-order-toggle').on('click',function(event){
		event.stopPropagation();
		event.preventDefault();
		$('.product-order-list').slideToggle();
	});
	$('.per-page-toggle').on('click',function(event){
		event.stopPropagation();
		event.preventDefault();
		$('.per-page-list').slideToggle();
	});
	//Attr Product
	$('body').on('click',function(){
		$('.list-color').slideUp();
		$('.list-size').slideUp();
	});
	$('.toggle-color').on('click',function(event){
		event.stopPropagation();
		event.preventDefault();
		$('.list-color').slideToggle();
	});
	$('.toggle-size').on('click',function(event){
		event.stopPropagation();
		event.preventDefault();
		$('.list-size').slideToggle();
	});
	$('.list-color a').on('click',function(event){
		event.preventDefault();
		$('.list-color a').removeClass('selected');
		$(this).addClass('selected');
		$('.toggle-color').text($(this).text());
	});
	$('.list-size a').on('click',function(event){
		event.preventDefault();
		$('.list-size a').removeClass('selected');
		$(this).addClass('selected');
		$('.toggle-size').text($(this).text());
	});
	
	//Qty Up-Down
	$('.info-qty').each(function(){
		var qtyval = parseInt($(this).find('.qty-val').text(),10);
		$('.qty-up').on('click',function(event){
			event.preventDefault();
			qtyval=qtyval+1;
			$(this).prev().text(qtyval);
		});
		$('.qty-down').on('click',function(event){
			event.preventDefault();
			qtyval=qtyval-1;
			if(qtyval>0){
				$(this).next().text(qtyval);
			}else{
				qtyval=0;
				$(this).next().text(qtyval);
			}
		});
	});
	//Rev Slider
	if($('.rev-slider').length>0){
		$('.rev-slider').revolution({
			startwidth:1170,
			startheight:410,			 
		});
	}
	$('body').on('click',function(){
		$('.list-category-toggle').slideUp();
	});

	$('.category-toggle-link').on('click',function(event){
		event.stopPropagation();
		event.preventDefault();
		$('.list-category-toggle').slideToggle();
	});
	$('.title-category-dropdown').on('click',function(){
		$(this).next().slideToggle();
	});
	//Widget Shop
	$('.widget.widget-vote a').on('click',function(event){
		event.preventDefault();
		$(this).toggleClass('active');
	});
	$('.widget-filter .widget-title').on('click',function(event){
		$(this).toggleClass('active');
		$(this).next().slideToggle('slow');
	});
	$('.list-color-filter a').on('click',function(event){
		event.preventDefault();
		$(this).toggleClass('active');
	});
	if($('.range-filter').length>0){
		$( ".range-filter #slider-range" ).slider({
			range: true,
			min: 0,
			max: 500,
			values: [ 70, 350 ],
			slide: function( event, ui ) {
			$( "#amount" ).html( "<span>" + ui.values[ 0 ] + "</span>" + " - " + "<span>" + ui.values[ 1 ] + "</span>" );
			}
		});
		$( ".range-filter #amount" ).html( "<span>" + $( "#slider-range" ).slider( "values", 0 )+ "</span>" + " - " + "<span>" + $( "#slider-range" ).slider( "values", 1 ) + "</span>" );
	}
	//End Widget Shop
	//Sticker Slider
	if($('.bxslider-ticker').length>0){
		$('.bxslider-ticker').bxSlider({
			maxSlides: 2,
			minSlides: 1,
			slideWidth: 400,
			slideMargin: 10,
			ticker: true,
			tickerHover:true,
			useCSS:false,
			speed: 50000,
		});
	}
	//Hot Deal Slider Home 12
	if($('.hot-deal-tab-slider12 .hot-deal-slider').length>0){
		$('.hot-deal-tab-slider12 .hot-deal-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items:5,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 3], 
				[992, 4], 
				[1200, 5] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Hot Deal Slider
	if($('.hot-deal-slider').length>0){
		$('.hot-deal-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items:4,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 2], 
				[992, 4], 
				[1200, 4] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Product Best Seller
	if($('.product-bestseller-slider').length>0){
		$('.product-bestseller-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items:1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}		
	//From Blog Slider
	if($('.from-blog-slider').length>0){
		$('.from-blog-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items:1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Testimonial Slider
	if($('.testimo-slider').length>0){
		$('.testimo-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items:1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Product Upsell
	if($('.upsell-detail').length>0){
		$('.upsell-detail-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 3,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 2], 
				[992, 3], 
				[1200, 3] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Product Tab
	if($('.product-tab-slider').length>0){
		$('.product-tab-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 3,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 2], 
				[992, 3], 
				[1200, 3] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Banner Shop Slider
	if($('.banner-shop-slider').length>0){
		$('.banner-shop-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Category Filter
	if($('.category-filter-slider').length>0){
		$('.category-filter-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 2,
				itemsCustom: [ 
				[0, 2], 
				[480, 2], 
				[768, 2], 
				[992, 2], 
				[1200, 2] 
				],
				autoPlay:true,
				pagination: false,
				navigation: false,
			});
		});
	}	
	//Category Brand
	if($('.category-brand-slider').length>0){
		$('.category-brand-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 2], 
				[480, 2], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: false,
				navigation: true,
				autoPlay:true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Widget Adv
	if($('.widget-adv').length>0){
		$('.widget-adv').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: true,
				navigation: false,
			});
		});
	}			
	//Paginav Featured Slider
	if($('.paginav-featured-slider').length>0){
		$('.paginav-featured-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: true,
				navigation: false,
			});
		});
	}				
	//Testimo Home 3
	if($('.tab-testimo-slider').length>0){
		$('.tab-testimo-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: true,
				navigation: false,
			});
		});
	}						
	//Outlet Slider
	if($('.outlet-slider').length>0){
		$('.outlet-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: true,
				navigation: false,
			});
		});
	}							
	//Gift Slider 
	if($('.gift-icon-slider').length>0){
		$('.gift-icon-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: true,
				navigation: false,
				addClassActive:true,
			});
		});
	}		
	//Category Best Sellser
	if($('.cat-bestsale-slider').length>0){
		$('.cat-bestsale-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}		
	//Best Seller Right
	if($('.best-seller-right').length>0){
		$('.best-seller-right').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Featured Product Category
	if($('.featured-product-category').length>0){
		$('.featured-product-category').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 3,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 1], 
				[992, 2], 
				[1200, 3] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Slider Cat Parent
	if($('.slider-cat-parent').length>0){
		$('.slider-cat-parent').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 3,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 2], 
				[992, 2], 
				[1200, 3] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Brand Cat
	if($('.brand-cat-slider').length>0){
		$('.brand-cat-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 3,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 1], 
				[992, 2], 
				[1200, 3] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//The New Slider
	if($('.thenew-slider').length>0){
		$('.thenew-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: false,
				navigation: true,
				autoPlay:true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Manufacture Slider
	if($('.manufacture-slider').length>0){
		$('.manufacture-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 6,
				itemsCustom: [ 
				[0, 2], 
				[480, 3], 
				[768, 4], 
				[992, 5], 
				[1200, 6] 
				],
				pagination: false,
				navigation: false,
				autoPlay:true
			});
		});
	}	
	//The New Slider
	if($('.best-seller3').length>0){
		$('.best-seller3').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 4,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 2], 
				[992, 3], 
				[1200, 4] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Popualar Category Slider
	if($('.popular-cat-slider.popular-cat-slider11').length>0){
		$('.popular-cat-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 5,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 3], 
				[992, 4], 
				[1200, 5] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Popualar Category Slider
	if($('.popular-cat-slider.popular-cat-slider12').length>0){
		$('.popular-cat-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 5,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 3], 
				[992, 4], 
				[1200, 5] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Popualar Category Slider
	if($('.popular-cat-slider.slider-home5').length>0){
		$('.popular-cat-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 4,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 2], 
				[992, 3], 
				[1200, 4] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	if($('.popular-cat-slider.slider-home6').length>0){
		$('.popular-cat-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 4,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 2], 
				[992, 3], 
				[1200, 4] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Popualar Category Slider
	if($('.popular-cat-slider').length>0){
		$('.popular-cat-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 4,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 2], 
				[992, 3], 
				[1200, 4] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Deal Of The day
	if($('.dealoff-theday-slider').length>0){
		$('.dealoff-theday-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 5,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 3], 
				[992, 4], 
				[1200, 5] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Simple Owl Slider
	if($('.simple-owl-slider').length>0){
		$('.simple-owl-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}		
	//Owl Direct Nav
	if($('.owl-directnav').length>0){
		$('.owl-directnav').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}		
	//Best Seller Slider
	if($('.best-seller-slider').length>0){
		$('.best-seller-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 3,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 2], 
				[992, 3], 
				[1200, 3] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<span class="lnr lnr-chevron-left"></span>','<span class="lnr lnr-chevron-right"></span>']
			});
		});
	}		
	//Popular Category
	if($('.pop-cat-slider').length>0){
		$('.pop-cat-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 9,
				itemsCustom: [ 
				[0, 3], 
				[480, 4], 
				[768, 7], 
				[992, 8], 
				[1200, 9] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<span class="lnr lnr-chevron-left"></span>','<span class="lnr lnr-chevron-right"></span>']
			});
		});
	}		
	//Single Relared Post
	if($('.single-related-post-slider').length>0){
		$('.single-related-post-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 2], 
				[992, 3], 
				[1200, 3] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<span class="lnr lnr-chevron-left"></span>','<span class="lnr lnr-chevron-right"></span>']
			});
		});
	}		
	//Great Deal category
	if($('.great-deal-cat-slider').length>0){
		$('.great-deal-cat-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 5,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 3], 
				[992, 4], 
				[1200, 5] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}			
	//Category Brand Slider
	if($('.cat-brand-slider').length>0){
		$('.cat-brand-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 2,
				itemsCustom: [ 
				[0, 2], 
				[480, 2], 
				[768, 2], 
				[992, 2], 
				[1200, 2] 
				],
				pagination: false,
				navigation: true,
				autoPlay:true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}		
	//Single Relared Post
	if($('.fromblog-slider').length>0){
		$('.fromblog-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 2,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 2], 
				[992, 2], 
				[1200, 2] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<span class="lnr lnr-chevron-left"></span>','<span class="lnr lnr-chevron-right"></span>']
			});
		});
	}	
	//Mega Hot Deal
	if($('.mega-hot-deal-slider').length>0){
		$('.mega-hot-deal-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Mega New Arrival
	if($('.mega-new-arrival-slider').length>0){
		$('.mega-new-arrival-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 2,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 2], 
				[992, 2], 
				[1200, 2] 
				],
				pagination: false,
				navigation: true,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
			});
		});
	}	
	//Testimonial Slider
	if($('.testimonial-slider').length>0){
		$('.testimonial-slider').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 1], 
				[768, 1], 
				[992, 1], 
				[1200, 1] 
				],
				pagination: true,
				navigation: false,
			});
		});
	}	
	//Customer Slider
	if($('.customer-saying').length>0){
		$('.customer-saying').each(function(){
			$(this).find('.wrap-item').owlCarousel({
				items: 1,
				itemsCustom: [ 
				[0, 1], 
				[480, 2], 
				[768, 2], 
				[992, 3], 
				[1200, 3] 
				],
				pagination: false,
				navigation: false,
				autoPlay:true
			});
		});
	}
	//Blog Masonry 
	if($('.masonry-list-post').length>0){
		$('.masonry-list-post').masonry({
			// options
			itemSelector: '.item-post-masonry',
		});
	}
});
//Window Load
jQuery(window).load(function(){ 
	
});
})(jQuery); // End of use strict
$(document).ready(function(){
	$('a.addcart-link').click(function() {
	    var product_id = $(this).data('id');
	    add_product_to_cart(product_id);
	});
	$.ajaxSetup({
	      headers: {
	          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	      }
	  }); 
});

function add_product_to_cart(product_id) {
$.ajax({
  url: $('#route-add-cart').val(),
  method: "POST",
  data : {
    id: product_id
  },
  success : function(data){
    location.href = $('#route-cart').val();
  },
  error : function(e) {
    
  }
});
}

window.fbAsyncInit = function() {
  FB.init({
    appId      : $('#fb-app-id').val(),
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.7' // use graph api version 2.7
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$(document).ready(function() {
  $('.login-by-facebook-popup').click(function() {
    FB.login(function(response){
      if(response.status == "connected")
      {
         // call ajax to send data to server and do process login
        var token = response.authResponse.accessToken;
        $.ajax({
          url: $('#route-ajax-login-fb').val(),
          method: "POST",
          data : {
            token : token
          },
          success : function(data){
            if(!data.success) {
              location.reload();
            } else {
              location.href = $('#route-cap-nhat-thong-tin').val();
            }
          }
        });

      }
    }, {scope: 'public_profile,email'});
  });  
});
$(document).on('keypress', '#popup-login-email, #popup-login-password', function(e){
if(e.keyCode==13){
  $('#login_popup_submit').click();
}
});
$(document).on('keypress', '#popup-register-email, #popup-register-password, #popup-register-name', function(e){
  if(e.keyCode==13){
    $('#register_popup_submit').click();
  }
});
$(document).ready(function () {
	$('#login_popup_submit_1').click(function() {		
        var $form = $(this).parents('form');        
        var error = [];
        var list_check = ['login_email', 'login_password'];
        var login_email    = $form.find('#login_email').val();
        var login_password = $form.find('#login_password').val();
        if(!login_email) {
          error.push('login_email');
        }

        if(!validateEmail(login_email))
        {
          error.push('login_email');
        }

        if(!login_password) {
          error.push('login_password');
        }

        for(i in list_check) {
          $('#'+list_check[i]).parent().removeClass('has-error');
          $('#'+list_check[i]).next().hide();
        }

        if(error.length) {
          for(i in error) {
            $('#'+error[i]).parent().addClass('has-error');
            $('#'+error[i]).next().show();
          }
          return false;
        }

        if(!error.length)
        {
            $.ajax({
              url: $('#route-auth-login-ajax').val(),
              method: "POST",
              data : {
                email: login_email,
                password: login_password
              },
              success : function(data){
               if(data.error == 1)
               {
                  $('#login_popup_form #error_captcha').html('Email hoặc mật khẩu không đúng.')
               }
               else {
                    location.reload();
               }
              }
            });
        }

    });
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#newsletter_email').bind('keypress', function(e) {
      if(e.keyCode==13){
        $('.btn-get-newsletter').click();
      }
    });
    $('#reg_success').bind('keypress', function(e) {
      if(e.keyCode==13){
        $('#btnRegTin').click();
      }
    }); 
    $('#btnRegTin').click(function() {
        var email = $.trim($('#reg_success').val());        
        if(validateEmail(email)) {
            $.ajax({
              url: $('#route-register-newsletter').val(),
              method: "POST",
              data : {
                email: email,
              },
              success : function(data){
                if(+data){
                  swal('', 'Đăng ký nhận bản tin thành công.', 'success');
                }
                else {
                  swal('', 'Địa chỉ email đã được đăng ký trước đó.', 'error');
                }
                $('#reg_success').val("");
              }
            });
        } else {
            swal({ title: '', text: 'Vui lòng nhập địa chỉ email hợp lệ.', type: 'error' });
        }
    });
    $('.btn-get-newsletter').click(function() {
        var email = $.trim($('#newsletter_email').val());
        var $email = $(this).parent().prev();
        if(validateEmail(email)) {
            $.ajax({
              url: $('#route-register-newsletter').val(),
              method: "POST",
              data : {
                email: email,
              },
              success : function(data){
                if(+data){
                  swal('', 'Đăng ký nhận bản tin thành công.', 'success');
                }
                else {
                  swal('', 'Địa chỉ email đã được đăng ký trước đó.', 'error');
                }
                $email.val("");
              }
            });
        } else {
            swal({ title: '', text: 'Vui lòng nhập địa chỉ email hợp lệ.', type: 'error' });
        }
    });

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    $('#login_popup_submit').click(function() {
        var $form = $(this).parents('form');        
        var error = [];
        var list_check = ['popup-login-email', 'popup-login-password'];
        var login_email    = $form.find('#popup-login-email').val();
        var login_password = $form.find('#popup-login-password').val();
        if(!login_email) {
          error.push('popup-login-email');
        }

        if(!validateEmail(login_email))
        {
          error.push('popup-login-email');
        }

        if(!login_password) {
          error.push('popup-login-password');
        }

        for(i in list_check) {
          $('#'+list_check[i]).parent().removeClass('has-error');
          $('#'+list_check[i]).next().hide();
        }

        if(error.length) {
          for(i in error) {
            $('#'+error[i]).parent().addClass('has-error');
            $('#'+error[i]).next().show();
          }
          return false;
        }

        if(!error.length)
        {
            $.ajax({
              url: $('#route-auth-login-ajax').val(),
              method: "POST",
              data : {
                email: login_email,
                password: login_password
              },
              success : function(data){
               if(data.error == 1)
               {
                  $('#login_popup_form #error_captcha').html('Email hoặc mật khẩu không đúng.')
               }
               else {
                    location.reload();
               }
              }
            });
        }

    });
    
    $('#register_popup_submit').click(function(){
        var $form = $(this).parents('form');
        var error = [];
        var list_check = ['popup-register-email', 'popup-register-password', 'popup-register-name'];
        var email = $('#popup-register-email').val();
        var password = $('#popup-register-password').val();
        var full_name = $('#popup-register-name').val();

        if(!email) {
          error.push('popup-register-email');
        }

        if(password.length < 6 || password.length > 32) {
          error.push('popup-register-password');
        }

        if(!full_name) {
          error.push('popup-register-name');
        }

        for(i in list_check) {
          $('#'+list_check[i]).parent().removeClass('has-error');
          $('#'+list_check[i]).parent().find('.help-block').hide();
        }

        if(error.length) {
          for(i in error) {
            $('#'+error[i]).parent().addClass('has-error');
            $('#'+error[i]).next().show();
          }
          return false;
        }

        if(!error.length)
        {
            $.ajax({
              url: $('#route-register-customer-ajax').val(),
              method: "POST",
              data : {
                email: email,
                password: password,
                full_name: full_name
              },
              success : function(data){
                if(data.error == 'email')
                {
                    $('small[er=NOT_VALIDATED]').show();
                    $('small[er=notEmpty]').hide();
                }
                else {
                    location.reload();
                }
              }
            });
        }

    });

    $('.lang').click(function(){
        $.ajax({
          url : $('#route-set-lang').val(),
          type : 'GET',
          data : {
            lang : $(this).data('lang')
          },
          success : function(){
            location.href = $('#route-home').val();
          }
        });
      });
});

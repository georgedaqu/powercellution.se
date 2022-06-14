import 'select2';
import 'magnific-popup';

import './libs/hamburger_menu.js';
import './libs/form_functions.js';
import './libs/additional_functions.js';
import './libs/plugin_parameters.js';
//import './libs/tree_menu.js';

import $ from 'jquery';
window.jQuery = $;
window.$ = $;

$(document).ready(function(){
	
	// wrap iframe with div
	$("div.text_right > iframe").wrap("<div class='video_wrapper'></div>");

	// accordion
	$("div.accardion ul li div.accardion_header a").click(function(){
		var acc_cont = $(this).parent("div.accardion_header").next("div.accardion_content");
		var selected_icon = $(this).children(".acc_plus_icon");
		if(acc_cont.is(":hidden")){
			acc_cont.slideDown(400);
			selected_icon.addClass("rotate");
		}else{
			acc_cont.slideUp(400);
			selected_icon.removeClass("rotate");
		}
	});

	// Mega menu
	$("nav.navigation > ul > li.hasul > a").click(function(e){
		e.preventDefault();
		var $this = $(this);
		var $sub_menu = $this.next("ul");
		$('div.header_toggle_trigger').removeClass("active");
		if($sub_menu.is(":hidden")){
			$("header:not(.inside)").addClass("white");
			$this.parent("li").addClass("current-menu-item");
			$('div.header_toggle_body').fadeOut();
			$sub_menu.css({
				display: "flex"
			}).hide().fadeIn(200);
		}else{
			if(navHeight > scroll){
				$("header:not(.inside)").removeClass("white");
			}
			$this.parent("li").removeClass("current-menu-item");
			$sub_menu.fadeOut(200);
		}
	});
	$("header div.container div.header_right div.header_toggle div.header_toggle_trigger").click(function(e){
		e.preventDefault();
		var $this = $(this);
		var $sub_menu = $this.next("div.header_toggle_body");
		if($sub_menu.is(":hidden")){
			if(navHeight > scroll){
				$("header:not(.inside)").removeClass("white");
			}
			$("nav.navigation > ul > li.hasul").removeClass("current-menu-item");
			$("nav.navigation > ul > li.hasul > ul").fadeOut(200);
			setTimeout(() => {
				$("header").addClass("white");
				$this.addClass("active");
			}, 0)
			$sub_menu.css({
				display: "flex"
			}).hide().fadeIn(200);
		}else{
			if(navHeight > scroll){
				$("header:not(.inside)").removeClass("white");
			}
			$this.parent("li").removeClass("current-menu-item");
			$this.removeClass("active");
			$sub_menu.fadeOut(200);
		}
	});
	$(document).click(function(e){
		if(!$(e.target).closest("nav.navigation > ul > li.hasul > a, nav.navigation > ul > li.hasul > ul, div.header_toggle_body, div.header_toggle_trigger").length > 0){
			if(navHeight > scroll){
				$("header:not(.inside)").removeClass("white");
			}
			$("nav.navigation > ul > li.hasul").removeClass("current-menu-item");
			$("nav.navigation > ul > li.hasul > ul, div.header_toggle_body").fadeOut(200);
			$('div.header_toggle_trigger').removeClass("active");
		}
	});
	
	
	//Hide navbar on scroll
	let scroll = $(document).scrollTop();
	let navHeight = $('header').outerHeight();
	let hasInside = $('header').hasClass('inside');
	
	$(window).on('load', function(){
		if(scroll > navHeight){
			$('header:not(.inside)').removeClass();
		}
	});
	
	$(window).scroll(function(){
		let scrolled = $(document).scrollTop();

		if(hasInside){
			$('header').addClass('white');
			if(scrolled > navHeight){
				$('header').addClass('venish');
			}else{
				$('header').removeClass('venish');
				$('header').addClass('sticky');
			}
			
			if(scrolled > scroll){
				if(scrolled > navHeight){
					$('header').removeClass('show');
					$('header').addClass('hide');
				}
			}else{
				$('header').addClass('show');
				$('header').removeClass('sticky venish');
			}
		}

		if(hasInside === false){
			if(scrolled > navHeight){
				$('header').addClass('venish white');
				$('.resp_menu_toggle > div').addClass('burger_white');
			}else{
				$('.resp_menu_toggle > div').removeClass('burger_white');
				let hasul = $("nav.navigation > ul > li.hasul").hasClass('current-menu-item');
				let header_toggle = $("div.header_toggle_trigger").hasClass('active');

				if(hasul === false && header_toggle === false){
					$('header').removeClass('white venish');
				}
				$('header').addClass('sticky');
			}
			
			if(scrolled > scroll){
				if(scrolled > navHeight){
					$('header').removeClass('show');
					$('header').addClass('hide');
				}
			}else{
				$('header').addClass('show');
				$('header').removeClass('sticky venish');
			}
		}
		scroll = $(document).scrollTop();
	});
});

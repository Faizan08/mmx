///*global jQuery:false */
jQuery(document).ready(function() {
	"use strict";	
    functions();
});

function functions() {

	jQuery.stellar({horizontalScrolling: false,verticalOffset: 40});

	jQuery("#searchform #searchsubmit").addClass("btn btn-primary");
	jQuery('.widget_search #s,.widget_product_search #s').addClass("form-control input-sm");
	jQuery(".form-submit #submit").addClass("btn btn-primary").removeAttr("id");
    jQuery('.price_slider_amount button').removeClass("button").addClass("btn btn-sm btn-primary");
    jQuery('.woo_compare_widget_button_container a').removeClass("woo_compare_button_go woo_compare_widget_button_go").addClass("btn btn-sm btn-primary");
    jQuery('.group_table a.btn').removeClass('btn-primary').addClass("btn btn-xs btn-default");
    
    jQuery(".callout-btn").each(function() {
	    var contentHeight = jQuery(this).prev('.callout-content').height();
	    jQuery(this).css({height: contentHeight});	
	});
    
	jQuery('.lpd-product-thumbnail .product_type_simple').on('click', function() {
		var if_added = jQuery(this).attr("data-if_added");
		jQuery(this).text(if_added);
	});
	
	var window_width = jQuery(this).width();
	
	var container = jQuery('.search-dropdown-full-width .container > form').width();
	var margin = (window_width-container)/2;
	jQuery('.search-dropdown-full-width').css({"margin-left": -margin,"margin-right": -margin})
	
	var container = jQuery('.parallax-object.parallax-full .container > div').width();
	var margin = (window_width-container)/2;
	jQuery('.parallax-object.parallax-full').css({"margin-left": -margin,"margin-right": -margin})
	
	jQuery(window).resize(function(){
	
		var cbp_window_width = jQuery(this).width();
		var cbp_container = jQuery('.container').width();
		var cbp_margin = (cbp_window_width-cbp_container)/2;
		jQuery('.cbp-l-grid-projects.lpd-cbp-full-width1').css({"margin-left": -cbp_margin,"margin-right": -cbp_margin});
	
		var window_width = jQuery(this).width();
		
		var container = jQuery('.parallax-object.parallax-full .container').width();
		var margin = (window_width-container)/2;
		jQuery('.parallax-object.parallax-full').css({"margin-left": -margin,"margin-right": -margin});
		
		var container = jQuery('.search-dropdown-full-width .container > form').width();
		var margin = (window_width-container)/2;
		jQuery('.search-dropdown-full-width').css({"margin-left": -margin,"margin-right": -margin})
	});
	
    // contact form 7
	jQuery(".wpcf7 .wpcf7-submit").addClass("btn-primary").addClass("btn");
	jQuery(".wpcf7 input").addClass("form-control");
	jQuery(".wpcf7 input[type=submit]").removeClass("form-control");
	jQuery(".wpcf7 input[type=checkbox]").removeClass("form-control");
	jQuery(".wpcf7 input[type=radio]").removeClass("form-control");
	jQuery(".wpcf7 input[type=file]").removeClass("form-control");
	jQuery(".wpcf7 input[type=range]").removeClass("form-control");
	jQuery(".wpcf7 textarea").addClass("form-control");
	jQuery(".wpcf7 select").addClass("form-control");
    
    jQuery('strong .wl-add-to-single').removeClass("button").addClass('btn').addClass('btn-default').addClass('btn-sm');
    
	jQuery('<div class="clearfix"></div>').insertAfter(".col-md-4.one-column:nth-child(3n)");
    jQuery('<div class="clearfix"></div>').insertAfter(".col-md-3.one-column:nth-child(4n)");
    jQuery('<div class="clearfix"></div>').insertAfter(".post-widget .col-md-6:nth-child(2n)");
    jQuery('<div class="clearfix"></div>').insertAfter(".post-widget .col-md-4:nth-child(3n)");
    jQuery('<div class="clearfix"></div>').insertAfter(".post-widget .col-md-3:nth-child(4n)");
    
    
    jQuery('.widget_product_categories ul > li > ul.children').before('<span class="toggle">[+]</span>');
 
    var current_cat = jQuery('.widget_product_categories ul > li.current-cat, .widget_product_categories ul > li.current-cat-parent');
    
    current_cat.children('.toggle').html("[-]");
    current_cat.children('ul').slideDown().addClass('opened');
    
    
    jQuery('.widget_product_categories ul > li > ul.children').each(function() {
        jQuery(this).parent().children('.toggle').toggle(function() {
			if(jQuery(this).parent().children('ul').hasClass('opened')){
			jQuery(this).html("[+]");
			jQuery(this).parent().children('ul').slideUp();
			jQuery(this).parent().children('ul').removeClass('opened').addClass('closed');
			}else{
			jQuery(this).html("[-]");
			jQuery(this).parent().children('ul').slideDown();
			jQuery(this).parent().children('ul').removeClass('closed').addClass('opened');
			}
        }, function() {
			if(jQuery(this).parent().children('ul').hasClass('closed')){
			jQuery(this).html("[-]");
			jQuery(this).parent().children('ul').slideDown();
			jQuery(this).parent().children('ul').removeClass('closed').addClass('opened');
			}else{
			jQuery(this).html("[+]");
			jQuery(this).parent().children('ul').slideUp();
			jQuery(this).parent().children('ul').removeClass('opened').addClass('closed');
		}
        });    
    });

	jQuery('.ttip-top').tooltip({
		content: function () { return jQuery(this).attr('title') },
		position: {
			my: "center bottom-5",
			at: "center top",
			using: function( position, feedback ) {
			jQuery( this ).css( position );
			jQuery( "<div>" )
			.addClass( "arrow bottom" )
			.addClass( feedback.vertical )
			.addClass( feedback.horizontal )
			.appendTo( this );
			}
		}
	});
	
	jQuery('.ttip-right').tooltip({
		content: function () { return jQuery(this).attr('title') },
		position: {
			my: "left+5 left",
			at: "right center",
			using: function( position, feedback ) {
			jQuery( this ).css( position );
			jQuery( "<div>" )
			.addClass( "arrow left" )
			.addClass( feedback.vertical )
			.addClass( feedback.horizontal )
			.appendTo( this );
			}
		}
	});
	
	jQuery('.ttip-bottom').tooltip({
		content: function () { return jQuery(this).attr('title') },
		position: {
			my: "center top+5",
			at: "center bottom",
			using: function( position, feedback ) {
			jQuery( this ).css( position );
			jQuery( "<div>" )
			.addClass( "arrow top" )
			.addClass( feedback.vertical )
			.addClass( feedback.horizontal )
			.appendTo( this );
			}
		}
	});
	
	jQuery('.ttip-left').tooltip({
		content: function () { return jQuery(this).attr('title') },
		position: {
			my: "right-5 center",
			at: "left center",
			using: function( position, feedback ) {
			jQuery( this ).css( position );
			jQuery( "<div>" )
			.addClass( "arrow right" )
			.addClass( feedback.vertical )
			.addClass( feedback.horizontal )
			.appendTo( this );
			}
		}
	});
	
	jQuery( ".search-icon" ).click(function () {
		
		if(jQuery( this ).parent().is('.active-dropdown')){
		
			jQuery( this ).parent().toggleClass('active-dropdown',false);
		
		}
		else{
		
			jQuery( this ).parent().toggleClass('active-dropdown',true);
		
		}
	
	});
	
	jQuery( ".header-search .form-control" ).focusin(function() {
		jQuery( this ).parent().parent().parent().toggleClass('active-dropdown',true);
	});
	
    jQuery(document).click(function(e){
       if(jQuery(e.target).hasClass("search-icon"))
       {
           return false;
       }
       else if(jQuery(e.target).hasClass("search-dropdown"))
       {
	       return false;
       }
       else if(jQuery(e.target).hasClass("form-control"))
       {
	        return false;   
       }
       else
       {
           jQuery( ".header-search" ).toggleClass('active-dropdown',false);
       }
    })
    
	jQuery( ".wpml-switcher" ).click(function (e) {
	    jQuery( this ).toggleClass('active-dropdown');
	    e.stopPropagation()
	});

	jQuery(document).click(function (e) {
	   if (! jQuery(e.target).hasClass('wpml-switcher')) jQuery('.wpml-switcher').removeClass('active-dropdown');
	});

}

	jQuery(document).ready(function(){

		jQuery('#paint').show(90000);
		});
		jQuery( ".title a" ).addClass( "not-active" );
		jQuery( ".lpd-portfolio-item a" ).addClass( "not-active" );

	
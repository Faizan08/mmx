/*global jQuery:false */
jQuery(document).ready(function() {
	"use strict";	
    sticky_menu();
});

function sticky_menu() {
    
jQuery('.header-bottom-wrap').waypoint(function (direction) {
        jQuery(this).toggleClass("affix", direction === "down");
    }, {
  offset: function (direction) {
    return -jQuery('#header').outerHeight()+150;
  }
});

jQuery('.header-bottom').waypoint(function (direction) {
        jQuery(this).toggleClass("affix", direction === "down");
    }, {
  offset: function (direction) {
    return -jQuery('#header').outerHeight()+110;
  }
});

};
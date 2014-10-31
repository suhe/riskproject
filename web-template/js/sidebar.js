/*!
 * Bootstrap v3.2.0 (http://getbootstrap.com)
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
(function() {
  $(function() {
    var collapseMyMenu, expandMyMenu, hideMenuTexts, showMenuTexts;
    expandMyMenu = function() {
      return $("nav.sidebar").removeClass("sidebar-menu-collapsed").addClass("sidebar-menu-expanded");
    };
    collapseMyMenu = function() {
      return $("nav.sidebar").removeClass("sidebar-menu-expanded").addClass("sidebar-menu-collapsed");
    };
    showMenuTexts = function() {
      return $("nav.sidebar ul a span.expanded-element").show();
    };
    hideMenuTexts = function() {
      return $("nav.sidebar ul a span.expanded-element").hide();
    };
    return $("#justify-icon").click(function(e) {
      if ($(this).parent("nav.sidebar").hasClass("sidebar-menu-collapsed")) {
        expandMyMenu();
        showMenuTexts();
        $(this).css({
          color: "#FFF"
        });
		$('.container-fluid').css({
          marginLeft:"95px"
        });
      } else if ($(this).parent("nav.sidebar").hasClass("sidebar-menu-expanded")) {
        collapseMyMenu();
        hideMenuTexts();
        $(this).css({
          color: "#FFF"
        });
		$('.container-fluid').css({
          marginLeft:"30px"
        });
      }
      return false;
    });
  });

}).call(this);
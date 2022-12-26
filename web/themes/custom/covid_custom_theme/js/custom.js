/**
 * @file
 * Behaviors for the theme.
 */
 (function ($, _, Drupal, drupalSettings) {
  'use strict';
  Drupal.behaviors.basic = {
    attach: function (context) {
      // Add Search close gyphicon div.
      $(".desktop-show .form-actions").once().append('<span class="icon glyphicon glyphicon-search custom-search" aria-hidden="true"></span>');

      $(".navbar-toggle", context).click(function(e) {
        e.stopPropagation();
        console.log('inside');
        var menu_id = $(this).attr('data-target');
        if(menu_id != undefined) {
          $(menu_id).toggleClass('collapse');
        }
      });
    }
  };

   /**
   * This function helps to check if user is on mobile device
   */
  function isMobileDevice() {
    if(window.matchMedia("(max-width: 767px)").matches) {
      return true;
    }
    return false;
  }

  // Header Search Form.
  $(document).on('click', '#navbar .glyphicon-search' , function(event) {
    event.preventDefault();
    event.stopPropagation();
    $(".search-block-form").removeClass('show');
  });
  $(document).on('click', '#navbar .search--icon' , function(event) {
    console.log('click here inside of search--icon');
    $('.search-block-form').addClass('show');
    event.stopPropagation();
  })
  $(".mains").on("click", function(e) {
    $(".search-block-form").removeClass("show");
  });

	(function() {
		var quotes = $(".quotes");
		var quoteIndex = -1;
		function showNextQuote() {
			++quoteIndex;
			quotes.eq(quoteIndex % quotes.length)
				.fadeIn()
				.delay(3000)
				.fadeOut("slow" ,showNextQuote );
		}
		showNextQuote();
	})();

})(window.jQuery, window._, window.Drupal, window.drupalSettings);

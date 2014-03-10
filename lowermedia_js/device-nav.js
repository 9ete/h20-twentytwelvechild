jQuery(function() {
    jQuery( "#first-link-wrap" ).hover(function() {
      jQuery( "#first-img-wrap" ).toggleClass( "show-device", 1000 );
      return false;
    });

    jQuery( "#second-link-wrap" ).hover(function() {
      jQuery( "#second-img-wrap" ).toggleClass( "show-device", 1000 );
      return false;
    });

    jQuery( "#third-link-wrap" ).hover(function() {
      jQuery( "#third-img-wrap" ).toggleClass( "show-device", 1000 );
      return false;
    });

});

jQuery(function() {
    jQuery( "#first-link-wrap" ).hover(
      function() {
        jQuery( "#first-img-wrap" ).animate({
          top:"30px"
        }, 500);
        jQuery( "#first-text-wrap" ).css({
          display:"block"
        }, 500);
        return false;
      },
      function () {
        jQuery( "#first-img-wrap" ).animate({
          top:"140px"
        }, 500);
        jQuery( "#first-text-wrap" ).css({
          display:"none"
        }, 500);
        return false;
      }
    );

    jQuery( "#second-link-wrap" ).hover(
      function() {
        jQuery( "#second-img-wrap" ).animate({
          top:"30px"
        }, 500);
        jQuery( "#second-text-wrap" ).css({
          display:"block"
        }, 500);
        return false;
      },
      function () {
        jQuery( "#second-img-wrap" ).animate({
          top:"140px"
        }, 500);
        jQuery( "#second-text-wrap" ).css({
          display:"none"
        }, 500);
        return false;
      }
    );

    jQuery( "#third-link-wrap" ).hover(
      function() {
        jQuery( "#third-img-wrap" ).animate({
          top:"30px"
        }, 500);
        jQuery( "#third-text-wrap" ).css({
          display:"block"
        }, 500);
        return false;
      },
      function () {
        jQuery( "#third-img-wrap" ).animate({
          top:"140px"
        }, 500);
        jQuery( "#third-text-wrap" ).css({
          display:"none"
        }, 500);
        return false;
      }
    );

});

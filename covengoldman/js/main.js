 // Smooth Scroll
 $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
              if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                  $('html,body').animate({
                    scrollTop: target.offset().top
                  }, 500);
                  return false;
                }
              }
            });
          });
 // Gmap
 var mapOptions = {
        center: new google.maps.LatLng(40.435833800555567, -78.44189453125),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: 11
      };     
var map = new google.maps.Map(document.getElementById("map"), mapOptions);



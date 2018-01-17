<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<script src="owl/jquery.min.js"></script>
	<script src="owl/owl.carousel.min.js"></script>
	<script>
            $(document).ready(function() {
              var owl = $('.video-carousel1');
              owl.owlCarousel({
                loop:true,
			    margin:10,
			    nav:true,
			    navText: [ '', '' ],
			    dots: false,
			    autoplay: true,
                autoplayTimeout: 1000,
			    text: false,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 6
                  }
                }
              });
              $('.item').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            })
          </script>

<!doctype html>
<html class="no-js" lang="en">
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @include('frontlayouts.title')
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        
		@include('frontlayouts.css')
    </head>
    <body>
        
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                <header>
                    @include('frontlayouts.menu2')   
                </header>
                <!--End of Header Area-->
                <!--Breadcrumb Banner Area Start-->
                @include('frontlayouts.breadcrumb')
                <!--End of Breadcrumb Banner Area-->
                <!--Contact Form Area Start-->
                <div class="contact-form-area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <h4 class="contact-title">contact info</h4>
                                <div class="contact-text">
                                    <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text">0123456789</span></p>
                                    <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text">info@example.com</span></p>
                                    <p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span><span class="c-text">Your address goes here.</span></p>
                                </div>
                                <h4 class="contact-title">social media</h4>
                                <div class="link-social">
                                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                    <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                    <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <h4 class="contact-title">send your massage</h4>
                                <form id="contact-form" action="https://htmldemo.hasthemes.com/educat-preview/educat/mail.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                                            <button type="submit" class="button-default">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Contact Form-->
                <!--Newsletter Area Start-->
                @include('frontlayouts.subscribe')
                <!--End of Newsletter Area-->
                <!--Footer Widget Area Start-->
                @include('frontlayouts.footer')
                <!--End of Footer Area-->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
        
        <!-- Color Switcher -->
         @include('frontlayouts.color-switcher')
        <!-- Color Switcher end -->	
        
        @include('frontlayouts.javascript')
        
        <!-- Google Map js
		============================================ --> 		
        
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(40.740610, -73.935242), // New York
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);


			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map-marker.png',
				map: map
			  });
                
			}
                
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
        
		<!-- StyleSwitch JS
		============================================ -->	
        <script src="js/styleswitch.js"></script>
        
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>
</html>
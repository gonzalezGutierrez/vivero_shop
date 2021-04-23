@extends('layouts.master')
@section('title','Contacto')
@section('content')
<div class="breadcrumb-area pt-10 pb-10 border-bottom">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <!--=======  breadcrumb content  =======-->
            <div class="breadcrumb-content">
               <ul>
                  <li class="has-child"><a href="index.html">Home</a></li>
                  <li>Contact</li>
               </ul>
            </div>
            <!--=======  End of breadcrumb content  =======-->
         </div>
      </div>
   </div>
</div>
<!--====================  End of breadcrumb area  ====================-->
<!--==================== page content ====================-->
<div class="page-section">
   <!--=============================================
      =            google map container         =
      =============================================-->
   <div class="google-map-container mb-45">
      <div id="google-map"></div>
   </div>
   <!--=====  End of google map container  ======-->
   <div class="container">
      <div class="row">
         <div class="col-lg-5 offset-lg-1 col-md-12 mb-sm-45 order-1 order-lg-2 mb-md-45">
            <!--=======  contact page side content  =======-->
            <div class="contact-page-side-content">
               <h3 class="contact-page-title">Contact Us</h3>
               <p class="contact-page-message mb-30">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
               <!--=======  single contact block  =======-->
               <div class="single-contact-block">
                  <h4><i class="fa fa-fax"></i> Address</h4>
                  <p>123 Main Street, Anytown, CA 12345 – USA</p>
               </div>
               <!--=======  End of single contact block  =======-->
               <!--=======  single contact block  =======-->
               <div class="single-contact-block">
                  <h4><i class="fa fa-phone"></i> Phone</h4>
                  <p>Mobile: (08) 123 456 789</p>
                  <p>Hotline: 1009 678 456</p>
               </div>
               <!--=======  End of single contact block  =======-->
               <!--=======  single contact block  =======-->
               <div class="single-contact-block">
                  <h4><i class="fa fa-envelope-o"></i> Email</h4>
                  <p>yourmail@domain.com</p>
                  <p>support@hastech.company</p>
               </div>
               <!--=======  End of single contact block  =======-->
            </div>
            <!--=======  End of contact page side content  =======-->
         </div>
         <div class="col-lg-6 col-md-12 order-2 order-lg-1">
            <!--=======  contact form content  =======-->
            <div class="contact-form-content">
               <h3 class="contact-page-title">Tell Us Your Message</h3>
               <div class="contact-form">
                  <form  id="contact-form" action="assets/php/mail.php" method="post">
                     <div class="form-group">
                        <label>Your Name <span class="required">*</span></label>
                        <input type="text" name="customerName" id="customername" required>
                     </div>
                     <div class="form-group">
                        <label>Your Email <span class="required">*</span></label>
                        <input type="email" name="customerEmail" id="customerEmail" required>
                     </div>
                     <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="contactSubject" id="contactSubject">
                     </div>
                     <div class="form-group">
                        <label>Your Message</label>
                        <textarea name="contactMessage" id="contactMessage" ></textarea>
                     </div>
                     <div class="form-group mb-0">
                        <button type="submit" value="submit" id="submit" class="theme-button contact-button" name="submit">Send</button>
                     </div>
                  </form>
               </div>
               <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
            </div>
            <!--=======  End of contact form content =======-->
         </div>
      </div>
   </div>
</div>
<!--====================  End of page content  ====================-->
<!-- scroll to top  -->
<button class="scroll-top"></button>
<!-- end of scroll to top -->
<!--=============================================
   =            JS files        =
   =============================================-->
<!-- Vendor JS -->
<script src="assets/js/vendors.js"></script>
<!-- Active JS -->
<script src="assets/js/active.js"></script>
<!-- Ajax Mail JS -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Google Map -->
<script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script>
<script>
   // When the window has finished loading create our google map below
   google.maps.event.addDomListener(window, 'load', init);

   function init() {
       // Basic options for a simple Google Map
       // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
       var mapOptions = {
           // How zoomed in you want the map to start at (always required)
           zoom: 12,

           scrollwheel: false,

           // The latitude and longitude to center the map (always required)
           center: new google.maps.LatLng(40.740610, -73.935242), // New York

           // How you would like to style the map.
           // This is where you would paste any style found on

           styles: [{
                   "featureType": "water",
                   "elementType": "geometry",
                   "stylers": [{
                           "color": "#e9e9e9"
                       },
                       {
                           "lightness": 17
                       }
                   ]
               },
               {
                   "featureType": "landscape",
                   "elementType": "geometry",
                   "stylers": [{
                           "color": "#f5f5f5"
                       },
                       {
                           "lightness": 20
                       }
                   ]
               },
               {
                   "featureType": "road.highway",
                   "elementType": "geometry.fill",
                   "stylers": [{
                           "color": "#ffffff"
                       },
                       {
                           "lightness": 17
                       }
                   ]
               },
               {
                   "featureType": "road.highway",
                   "elementType": "geometry.stroke",
                   "stylers": [{
                           "color": "#ffffff"
                       },
                       {
                           "lightness": 29
                       },
                       {
                           "weight": 0.2
                       }
                   ]
               },
               {
                   "featureType": "road.arterial",
                   "elementType": "geometry",
                   "stylers": [{
                           "color": "#ffffff"
                       },
                       {
                           "lightness": 18
                       }
                   ]
               },
               {
                   "featureType": "road.local",
                   "elementType": "geometry",
                   "stylers": [{
                           "color": "#ffffff"
                       },
                       {
                           "lightness": 16
                       }
                   ]
               },
               {
                   "featureType": "poi",
                   "elementType": "geometry",
                   "stylers": [{
                           "color": "#f5f5f5"
                       },
                       {
                           "lightness": 21
                       }
                   ]
               },
               {
                   "featureType": "poi.park",
                   "elementType": "geometry",
                   "stylers": [{
                           "color": "#dedede"
                       },
                       {
                           "lightness": 21
                       }
                   ]
               },
               {
                   "elementType": "labels.text.stroke",
                   "stylers": [{
                           "visibility": "on"
                       },
                       {
                           "color": "#ffffff"
                       },
                       {
                           "lightness": 16
                       }
                   ]
               },
               {
                   "elementType": "labels.text.fill",
                   "stylers": [{
                           "saturation": 36
                       },
                       {
                           "color": "#333333"
                       },
                       {
                           "lightness": 40
                       }
                   ]
               },
               {
                   "elementType": "labels.icon",
                   "stylers": [{
                       "visibility": "off"
                   }]
               },
               {
                   "featureType": "transit",
                   "elementType": "geometry",
                   "stylers": [{
                           "color": "#f2f2f2"
                       },
                       {
                           "lightness": 19
                       }
                   ]
               },
               {
                   "featureType": "administrative",
                   "elementType": "geometry.fill",
                   "stylers": [{
                           "color": "#fefefe"
                       },
                       {
                           "lightness": 20
                       }
                   ]
               },
               {
                   "featureType": "administrative",
                   "elementType": "geometry.stroke",
                   "stylers": [{
                           "color": "#fefefe"
                       },
                       {
                           "lightness": 17
                       },
                       {
                           "weight": 1.2
                       }
                   ]
               }
           ]
       };

       // Get the HTML DOM element that will contain your map
       // We are using a div with id="map" seen below in the <body>
       var mapElement = document.getElementById('google-map');

       // Create the Google Map using our element and options defined above
       var map = new google.maps.Map(mapElement, mapOptions);

       // Let's also add a marker while we're at it
       var marker = new google.maps.Marker({
           position: new google.maps.LatLng(40.740610, -73.935242),
           map: map,
           title: 'Greenfarm',
           icon: "assets/img/icons/map-marker.png",
           animation: google.maps.Animation.BOUNCE
       });
   }
</script>
<!--=====  End of JS files ======-->
</body>
</html>
@stop
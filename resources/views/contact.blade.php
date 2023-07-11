@extends('layouts.app')
@section('section')
 <!-- loader -->
 <!-- end loader -->
 <!-- header -->
 <header id="default_header" class="header_style_1">
    <!-- header top -->
    <div class="header_top">
       <div class="container">
          <div class="row">
             <div class="col-md-9 col-lg-9">
                <div class="full">
                   <div class="topbar-left">
                      <ul class="list-inline">
                         <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">540 Lorem Ipsum New York, AB 90218</span> </li>
                         <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></span> </li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-md-3 col-lg-3 right_section_header_top">
                <div class="float-right">
                   <div class="social_icon">
                      <ul class="list-inline">
                         <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                         <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                         <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                         <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                         <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- end header top -->
    <!-- header bottom -->
    <div class="header_bottom">
       <div class="container">
          <div class="row">
             <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <!-- logo start -->
                <div class="logo"><a href="home1.html"><img src="{{asset('assets/images/logos/logo.png')}}" alt="logo" /></a></div>
                <!-- logo end -->
             </div>
             <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <!-- menu start -->
                <div class="menu_side">
                   <div id="navbar_menu">
                      <ul class="first-ul">
                         <li>
                            <a href="home1.html">Home</a>
                            <ul>
                               <li><a href="home1.html">Home Style One</a></li>
                               <li><a href="home2.html">Home Style Two</a></li>
                            </ul>
                         </li>
                         <li><a href="about.html">About Us</a></li>
                         <li>
                            <a href="service.html">Service</a>
                            <ul>
                               <li><a href="service_list.html">Services list</a></li>
                               <li><a href="service_detail.html">Services Detail</a></li>
                            </ul>
                         </li>
                         <li>
                            <a href="blog.html">Blog</a>
                            <ul>
                               <li><a href="blog_detail.html">Blog Detail</a></li>
                            </ul>
                         </li>
                         <li>
                            <a href="#">Pages</a>
                            <ul>
                               <li><a href="career.html">Career</a></li>
                               <li><a href="faq.html">Faq</a></li>
                               <li><a href="privacy_policy.html">Privacy Policy</a></li>
                               <li><a href="error.html">Error 404</a></li>
                            </ul>
                         </li>
                         <li>
                            <a href="shop.html">Shop</a>
                            <ul>
                               <li><a href="shop.html">Shop List</a></li>
                               <li><a href="shop_detail.html">Shop Detail</a></li>
                               <li><a href="cart.html">Shopping Cart</a></li>
                               <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                         </li>
                         <li><a class="active" href="contact.html">Contact</a></li>
                      </ul>
                   </div>
                   <div class="search_icon">
                      <ul>
                         <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                      </ul>
                   </div>
                </div>
                <!-- menu end -->
             </div>
          </div>
       </div>
    </div>
    <!-- header bottom end -->
 </header>
 <!-- end header -->
 
 <!-- section -->
 <div class="section padding_layout_1">
    <div class="container">
       <div class="row"> 
           <div class="col-md-12">
             <div class="full">
                <div class="main_heading text_align_center">
                   <h2><span>GET IN TOUCH</span></h2>
                </div>
             </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
          <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
             <div class="row">
                <div class="full">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
                      <div class="form_section">
                         <form class="form_contant" action="contact.php">
                            <fieldset>
                               <div class="row">
                                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                     <input class="field_custom" placeholder="Your Name" type="text" required />
                                  </div>
                                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                     <input class="field_custom" placeholder="Email adress" type="email" required />
                                  </div>
                                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                     <input class="field_custom" placeholder="Subject" type="text" required />
                                  </div>
                                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                     <input class="field_custom" placeholder="Phone number" type="text" required />
                                  </div>
                                  <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                     <textarea class="field_custom" placeholder="Messager"></textarea>
                                  </div>
                                  <div class="center"><input type="submit" value="SUBMIT NOW" class="btn main_bt" href="#"></div>
                               </div>
                            </fieldset>
                         </form>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end section -->
 <!-- section -->
 <div class="section padding_layout_1 testmonial_section white_fonts">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="full">
                <div class="main_heading text_align_left">
                   <h2>What Clients Say?</h2>
                   <p class="large">Here are testimonials from clients..</p>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-sm-7">
             <div class="full">
                <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                   <!-- Indicators -->
                   <ul class="carousel-indicators">
                      <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
                      <li data-target="#testimonial_slider" data-slide-to="1"></li>
                      <li data-target="#testimonial_slider" data-slide-to="2"></li>
                   </ul>
                   <!-- The slideshow -->
                   <div class="carousel-inner">
                      <div class="carousel-item active">
                         <div class="testimonial-container">
                            <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                               I am really satisfied with my first laptop service. 
                            </div>
                            <div class="testimonial-photo"> <img src="{{asset('assets/images/layout_img/150x150.png')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                            <div class="testimonial-meta">
                               <h4>Maria Anderson</h4>
                               <span class="testimonial-position">CFO, Tech NY</span> 
                            </div>
                         </div>
                      </div>
                      <div class="carousel-item">
                         <div class="testimonial-container">
                            <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                               I am really satisfied with my first laptop service. 
                            </div>
                            <div class="testimonial-photo"> <img src="{{asset('assets/images/layout_img/150x150.png')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                            <div class="testimonial-meta">
                               <h4>Maria Anderson</h4>
                               <span class="testimonial-position">CFO, Tech NY</span> 
                            </div>
                         </div>
                      </div>
                      <div class="carousel-item">
                         <div class="testimonial-container">
                            <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                               I am really satisfied with my first laptop service. 
                            </div>
                            <div class="testimonial-photo"> <img src="{{asset('assets/images/layout_img/150x150.png')}}" class="img-responsive" alt="#" width="150" height="150"> </div>
                            <div class="testimonial-meta">
                               <h4>Maria Anderson</h4>
                               <span class="testimonial-position">CFO, Tech NY</span> 
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-5">
             <div class="full"> </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end section -->
 <!-- section -->
 <div class="section">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="full">
                <div class="contact_us_section">
                   <div class="call_icon"> <img src="{{asset('assets/images/layout_img/phone_icon.png')}}" alt="#" /> </div>
                   <div class="inner_cont">
                      <h2>REQUEST A FREE QUOTE</h2>
                      <p>Get answers and advice from people you want it from.</p>
                   </div>
                   <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="contact.html">Contact us</a> </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end section -->
 <!-- section -->
 <div class="section padding_layout_3">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="full">
                <ul class="brand_list">
                   <li><img src="{{asset('assets/images/layout_img/brand_icon1.png')}}" alt="#" /></li>
                   <li><img src="{{asset('assets/images/layout_img/brand_icon2.png')}}" alt="#" /></li>
                   <li><img src="{{asset('assets/images/layout_img/brand_icon3.png')}}" alt="#" /></li>
                   <li><img src="{{asset('assets/images/layout_img/brand_icon4.png')}}" alt="#" /></li>
                   <li><img src="{{asset('assets/images/layout_img/brand_icon5.png')}}" alt="#" /></li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end section -->
 <!-- Modal -->
 <div class="modal fade" id="search_bar" role="dialog">
    <div class="modal-dialog">
       <!-- Modal content-->
       <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
          </div>
          <div class="modal-body">
             <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                   <div class="navbar-search">
                      <form action="#" method="get" id="search-global-form" class="search-global">
                         <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                         <button class="search-global__btn"><i class="fa fa-search"></i></button>
                         <div class="search-global__note">Begin typing your search above and press return to search.</div>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- End Model search bar -->
 <!-- footer -->
 <footer class="footer_style_2 footer_blog">
    <div class="container">
       <div class="row">
          <div class="col-md-4">
             <div class="main-heading left_text">
                <h2>Nurvis Theme</h2>
             </div>
             <p>Sed ut perspiciatis unde omnis iste natus error sit volu ptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
             <ul class="social_icons">
                <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
             </ul>
          </div>
          <div class="col-md-8">
             <div class="row">
                <div class="col-md-4">
                   <div class="main-heading left_text">
                      <h2>Additional links</h2>
                   </div>
                   <ul class="footer-menu">
                      <li><a href="about.html"><i class="fa fa-angle-right"></i> About us</a></li>
                      <li><a href="term_condition.html"><i class="fa fa-angle-right"></i> Terms and conditions</a></li>
                      <li><a href="privacy_policy.html"><i class="fa fa-angle-right"></i> Privacy policy</a></li>
                      <li><a href="news.html"><i class="fa fa-angle-right"></i> News</a></li>
                      <li><a href="contact.html"><i class="fa fa-angle-right"></i> Contact us</a></li>
                   </ul>
                </div>
                <div class="col-md-4">
                   <div class="main-heading left_text">
                      <h2>Services</h2>
                   </div>
                   <ul class="footer-menu">
                      <li><a href="#"><i class="fa fa-angle-right"></i> Lighting</a></li>
                       <li><a href="#"><i class="fa fa-angle-right"></i> Interior Design</a></li>
                       <li><a href="#"><i class="fa fa-angle-right"></i> Floor Planning</a></li>
                       <li><a href="#"><i class="fa fa-angle-right"></i> Decoration</a></li>
                       <li><a href="#"><i class="fa fa-angle-right"></i> Furniture</a></li>
                   </ul>
                </div>
                <div class="col-md-4">
                   <div class="main-heading left_text">
                      <h2>Contact us</h2>
                   </div>
                   <p>123 Second Street Fifth Avenue,<br>
                      Manhattan, New York<br>
                        <span><a href="tel:+9876543210">+987 654 3210</a></span>
                   </p>
                   <div class="footer_mail-section">
                      <form>
                         <fieldset>
                            <div class="field">
                               <input placeholder="Email" type="text">
                               <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                            </div>
                         </fieldset>
                      </form>
                   </div>
                </div>
             </div>
          </div>
          <div class="cprt">
             <p>Nurvis by <a href="https://html.design">html.design.</a> All rights reserved.</p>
          </div>
       </div>
    </div>
 </footer>
 <!-- end footer -->

@endsection


@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- js section -->
<script src="{{asset('assetss/js/jquery.min.js')}}"></script>
      <script src="{{asset('assetss/js/bootstrap.min.js')}}"></script>
      <!-- menu js -->
      <script src="{{asset('assetss/js/menumaker.js')}}"></script>
      <script src="{{asset('assetss/js/wow.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('assetss/js/custom.js')}}"></script>
      <!-- revolution js files -->
      <script src="{{asset('assetss/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
      <script src="{{asset('assetss/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
      <script src="{{asset('assetss/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
      <script src="{{asset('assetss/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
      <script src="{{asset('assetss/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
      <script src="{{asset('assetss/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
      <script src="{{asset('assetss/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
      <script src="{{asset('assetss/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
      <script src="{{asset('assetss/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
      <script src="{{asset('assetss/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
      <script src="{{asset('assetss/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
      <!-- map js -->
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
         styles: [
                  {
                    elementType: 'geometry',
                    stylers: [{color: '#fefefe'}]
                  },
                  {
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                  },
                  {
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#f5f5f5'}]
                  },
                  {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#bdbdbd'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#eeeeee'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#757575'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.arterial',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#3d3523'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#000'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#c8d7d4'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#b1a481'}]
                  }
                ]
         });
         
           var image = 'images/layout_img/location_icon_map_cont.png')}}';
           var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->

@endsection
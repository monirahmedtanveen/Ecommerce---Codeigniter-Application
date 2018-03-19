<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="<?php echo base_url(); ?>user_asset/stylesheet/stylesheet.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user_asset/stylesheet/jquery-ui-1.8.9.custom.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>user_asset/stylesheet/cloud-zoom.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>user_asset/stylesheet/carousel.css" type="text/css" media="screen" />
<!--<link rel="stylesheet" href="<?php echo base_url(); ?>user_asset/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" />-->

<script src="<?php echo base_url(); ?>user_asset/js/country.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>user_asset/js/jsval.js" type="text/javascript"></script>

<!-- jQuery and Custom scripts -->
<!--<script src="<?php echo base_url(); ?>user_asset/bootstrap/bootstrap.min.js" type="text/javascript"></script>-->
<script src="<?php echo base_url(); ?>user_asset/js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>user_asset/js/jquery.cycle.lite.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>user_asset/js/custom_scripts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>user_asset/js/jquery.roundabout.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>user_asset/js/cloud-zoom.1.0.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>user_asset/js/jquery.jcarousel.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>user_asset/js/jquery-ui-1.8.9.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>user_asset/js/tabs.js"></script>





<!-- Tipsy -->
<script src="<?php echo base_url(); ?>user_asset/js/tipsy/jquery.tipsy.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>user_asset/js/tipsy/css.tipsy.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>user_asset/js/jquery.tweet.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>user_asset/js/jquery.tweet.css" rel="stylesheet" type="text/css" />
<!-- SLIDER AND LIGHTBOXES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user_asset/js/lightbox-0.5/css/jquery.lightbox-0.5.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user_asset/js/prettyphoto/css/prettyPhoto.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>user_asset/js/li-slider/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>user_asset/js/lightbox-0.5/js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>user_asset/js/prettyphoto/js/jquery.prettyPhoto.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user_asset/js/li-slider/skins/Trend/skin.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>user_asset/js/li-slider/js/li-slider-animations-1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>user_asset/js/li-slider/js/li-slider-1.1.min.js"></script>
<script type="text/javascript"> 
    	$(window).load(	
			function() {
				$("#big_slider").sp_Li_Slider({						
					animation						: "Regular-Exception",	// type of Animation: Regular, Random, Regular-Custom, Random-Custom, Regular-Exception, Random-Exception  			
					transitions					: 'None',				// None|transition_name(s) // List of custom animations - for full list please reference to the preview (works only with "Regular-Custom, Random-Custom, Regular-Exception , Random-Exception ")
					auto_play 					: true,   			// true|false - auto play on start
					repeat	 						: true,					// true|false|number - how many times to repeat all slides
					modalMode						:	'prettyPhoto',// lightBox|prettyPhoto|off
					goToSlideOnStart		:	1,						// value //any slide number starting from 1 or url?sp_slide=2
					timer								: 'line_bottom',// no|line_bottom|line_top|line_right|line_left
					pauseOnMouseOver		:	true,					// true|false
					tooltip							:	'image',			// none|text|image
					tooltipSize					: 20,						// value // % of slider dimentions from 0 to 100. Use 0 to disable it
					shuffle							:	false,				// true|false - randomize the images order
					delay     					: 3000,					// value // time period of a photos displaying /default - 3000 (3 sec)
					trans_period				:	800,					// value // time period of chenging the photos /default - 1000 (1 sec)
					vert_sections				:	10,						// value // number of vertical sectors (only for Animation type Blind) /default - 15
					sqr_sections_Y			:	4,						// value // number of squeres by vertical (only for Animation type Sqr) /default - 5
					active_links				:	true,					// true|false //activate links of photos /default - true
					buttons_show				:	true,					// true|false //show all buttons 		/default - true
					play_pause_show			:	true,					// true|false //show Play or Pause buttons	/default - true
					next_prev_show			:	true,					// true|false //show Next or Prev buttons	/default - true
					auto_hide 					: true,					// true|false // auto hide buttons ot start (when auto_play is true)
					buttons_show_time		:	1000,					// value 			//time period befor displayins of the buttons 	/default - 100
					buttons_show_delay	:	200,					// value //time period for appearing of the buttons		/default - 300
					buttons_hide_time 	:	1000,					// value //time period befor disappearing of the buttons/default - 2000
					buttons_hide_delay	:	200						// value //time period for disappearing of the buttons	/default - 500
				});
			}
		);		
</script>
</head>

<body>
<!-- MAIN WRAPPER -->
<div id="container"> 
  
  <!-- SIDEFEATURES -->
  <div id="sidefeatures">
    <ul>
      <li class="side_cart"><span class="icon">Shopping Cart</span>
        <div id="cart">
          <div class="heading">
            <h4>Shopping Cart</h4>
            <span id="cart_total">3 item(s) - $1099.99</span> </div>
          <div class="content">
            <table class="cart">
              <tbody>
                <tr>
                  <td class="image"><a href="#"><img alt="Spicylicious" src="<?php echo base_url(); ?>user_asset/image/cart_pic1.jpg"/></a></td>
                  <td class="name"><a href="#">Product name 1</a>
                    <div> </div></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$117.50</td>
                  <td class="remove"><img title="Remove" alt="Remove" src="<?php echo base_url(); ?>user_asset/image/close.png"/></td>
                </tr>
                <tr>
                  <td class="image"><a href="#"><img title="Palm Treo Pro" alt="Palm Treo Pro" src="<?php echo base_url(); ?>user_asset/image/cart_pic2.jpg"/></a></td>
                  <td class="name"><a href="#">Product name 2</a>
                    <div> </div></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$328.99</td>
                  <td class="remove"><img title="Remove" alt="Remove" src="<?php echo base_url(); ?>user_asset/image/close.png"/></td>
                </tr>
                <tr>
                  <td class="image"><a href="#"><img title="Canon EOS 5D" alt="Canon EOS 5D" src="<?php echo base_url(); ?>user_asset/image/cart_pic3.jpg"/></a></td>
                  <td class="name"><a href="#">Product name 3</a>
                    <div> - <small>Extra Cheese</small><br/>
                    </div></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$94.00</td>
                  <td class="remove"><img title="Remove" alt="Remove" src="<?php echo base_url(); ?>user_asset/image/close.png"/></td>
                </tr>
              </tbody>
            </table>
            <table class="total">
              <tbody>
                <tr>
                  <td align="right"><b>Sub-Total</b></td>
                  <td align="right">$459.99</td>
                </tr>
                <tr>
                  <td align="right"><b>VAT 17.5%</b></td>
                  <td align="right">$80.50</td>
                </tr>
                <tr>
                  <td align="right"><b>Total</b></td>
                  <td align="right">$540.49</td>
                </tr>
              </tbody>
            </table>
            <div class="checkout"><a class="button" href="checkout.html"><span>Checkout</span></a></div>
          </div>
        </div>
      </li>
      <li class="side_currency"><span class="icon">Currency</span>
        <div id="currency"> Currency <a href="#" title="Euro">€</a> <a href="#" title="Pound Sterling">£</a> <a title="US Dollar">$</a> </div>
      </li>
      <li class="side_lang"><span class="icon">Language</span>
        <div id="language"> Language <a href="#" title="English"><img src="<?php echo base_url(); ?>user_asset/image/gb.png" alt="Spicylicious store"/></a> <a href="#" title="Deutsch"><img src="<?php echo base_url(); ?>user_asset/image/de.png" alt="Spicylicious store"/></a> <a title="Bylgarski"><img src="<?php echo base_url(); ?>user_asset/image/bg.png" alt="Spicylicious store"/></a> </div>
      </li>
      <li class="side_search"><span class="icon">Search</span>
        <div id="search">
          <input type="text" onkeydown="this.style.color = '#000000';" onclick="this.value = '';" value="Search" name="filter_name"/>
          <a href="#" class="button-search"></a> </div>
      </li>
    </ul>
  </div>
  <!-- END OF SIDEFEATURES --> 
  
  <!-- HEADER -->
  <div id="header">
    <div class="inner">
      <ul class="main_menu menu_left">
          <li><a href="<?php echo base_url(); ?>Welcome/my_account">My Account</a></li>
          <?php 
          $customer_id = $this->session->userdata('customer_id');
          if($customer_id !=NULL){
          ?>
          <li>
            <a href="<?php echo base_url(); ?>wish_list/show_wish_list">
                Wish List <b>(<?php echo $wish_count; ?>)</b>
            </a>
        </li>
          <?php } ?>
        <li><a href="<?php echo base_url(); ?>Welcome/about_us">About Us</a></li>
        <li class="warning"><a href="<?php echo base_url(); ?>">Home</a>
          <ul class="secondary">
              <li><a href="<?php echo base_url(); ?>Welcome/index2">Home with LI SLIDER</a></li>
          </ul>
        </li>
      </ul>
        <div id="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>user_asset/image/logo.png" width="217" height="141" alt="Spicylicious store" /></a></div>
      <ul class="main_menu menu_right">
          <li><a href="<?php echo base_url(); ?>Welcome/compare">Compare</a></li>
          <li><a href="<?php echo base_url(); ?>cart/show_cart">Shopping Cart (<?php echo $this->cart->total_items(); ?>)</a></li>
          <?php
            $custmer_id = $this->session->userdata('customer_id');
            $shipping_id = $this->session->userdata('shipping_id');
          ?>
          <?php if($custmer_id != NULL && $shipping_id != NULL){ ?>
          <li><a href="<?php echo base_url(); ?>checkout/payment_order">Checkout</a></li>
          <?php }else if($custmer_id != NULL){ ?>
          <li><a href="<?php echo base_url(); ?>checkout/shipping_information">Checkout</a></li>
          <?php }else{ ?>
          <li><a href="<?php echo base_url(); ?>checkout/customer_registration">Checkout</a></li>
          <?php } ?>
          <li><a href="<?php echo base_url(); ?>Welcome/contact_us">Contact Us</a></li>
      </ul>
      <?php 
        $custmer_id = $this->session->userdata('customer_id');
        if($custmer_id != NULL){
      ?>  
        <div id="welcome"> Welcome <?php echo $this->session->userdata('customer_name'); ?> you can <a href="<?php echo base_url(); ?>checkout/logout">logout</a>. </div>
      <?php }else{ ?>
        <div id="welcome"> Welcome visitor you can <a href="<?php echo base_url(); ?>checkout/customer_registration">login</a> or <a href="<?php echo base_url(); ?>checkout/customer_registration"">create an account</a>. </div>
      <?php } ?>
      <div class="menu">
        <ul id="topnav">
          <?php foreach ($all_published_category as $v_category){ ?>  
            <li><a href="<?php echo base_url(); ?>Welcome/category/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
  <!-- END OF HEADER --> 
  
  <!-- BIG SLIDESHOW -->
  <?php if(isset($slider)){ ?>
  <div id="slideshow_big">
    <div class="inner"> 
      <!-- Slider Start -->
      <div id="big_slider" class="li-banner">
        <ul>
          <li><img src="<?php echo base_url(); ?>user_asset/image/slide1.jpg" alt="Pic 3" /></li>
          <li><img src="<?php echo base_url(); ?>user_asset/image/slide2.jpg" alt="Slide 2" /></li>
          <li><img src="<?php echo base_url(); ?>user_asset/image/slide3.jpg" alt="Slide 3" /></li>
        </ul>
      </div>
      <!-- Slider End --> 
    </div>
  </div>
  <?php } ?>
  <!-- END OF BIG SLIDESHOW --> 
  
  <!-- CONTENT -->
  <?php echo $main_content; ?>
  <!-- END OF CONTENT --> 
  
  <!-- PRE-FOOTER -->
  <div id="pre_footer">
    <div class="inner">

    </div>
  </div>
  <!-- END OF PRE-FOOTER --> 
  
  <!-- FOOTER -->
  <div id="footer">
    <div class="inner">
      <div class="column_big"> 
        <!-- FOOTER MODULES AREA -->
        <div class="footer_modules">
          <h3>About spicylicious</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
        <!-- END OF FOOTER MODULES AREA -->
        <div class="footer_social">
          <h3>Spread the word</h3>
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style "><script type="text/javascript">
      //<![CDATA[
            document.write('<a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>');
      //]]>
     </script> 
          </div>
          <script type="text/javascript" src="http://s7.addthis.com/<?php echo base_url(); ?>user_asset/js/250/addthis_widget.js#pubid=ra-4e7280075406aa87"></script> 
          <!-- AddThis Button END --> 
        </div>
      </div>
      <div class="column_small">
        <h3>Customer Service</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">My Account</a></li>
          <li><a href="#">Order History</a></li>
          <li><a href="#">Wishlist</a></li>
          <li><a href="#">Newsletter</a></li>
          <li><a href="#">Returns</a></li>
        </ul>
      </div>
      <div class="column_small">
        <h3>Information</h3>
        <ul>
          <li><a href="about.html">About Us</a></li>
          <li><a href="#">Delivery Information</a></li>
          <li><a href="#">Privacy policy</a></li>
          <li><a href="#">Terms and conditions</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="sitemap.html">site map</a></li>
        </ul>
      </div>
      <div class="column_small">
        <h3>Manufacturer</h3>
        <ul>
          <?php foreach($all_published_manufacturer as $v_manufacturer){ ?>
          <li><a href="#"><?php echo $v_manufacturer->manufacturer_name; ?></a></li>
          <?php } ?>
        </ul>
      </div>
      <div class="clear"></div>
      <span class="copyright">Spicylicious theme by <a href="http://themeforest.net/user/Koev/portfolio?ref=Koev">Dimitar Koev - theAlThemist</a>. </span> </div>
  </div>
  <!-- END OF FOOTER --> 
  
</div>
<!-- END OF MAIN WRAPPER --> 
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> 
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/d_koev.json?callback=twitterCallback2&amp;count=3"></script> 
<script type="text/javascript"><!--
$(document).ready(function() {
$('#twitter_update_list').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		next:   '#tweet_next', 
    	prev:   '#tweet_prev'
		}); 
		});
//--></script>

<script type="text/javascript"><!--
$('.cart-module .cart-heading').bind('click', function() {
	if ($(this).hasClass('active')) {
		$(this).removeClass('active');
	} else {
		$(this).addClass('active');
	}
		
	$(this).parent().find('.cart-content').slideToggle('slow');
});
//--></script>

<script type="text/javascript"><!--
$(function() {
		$( "#accordion" ).accordion({
			autoHeight: false,
			navigation: true
		});
	});
//--></script>

<script type="text/javascript"><!--
$(document).ready(function(){

    $("a.comment_switch").toggle(function(){
        $(this).addClass("swap");
        $(".box-rating").fadeOut("fast", function() {
            $(this).fadeIn("fast").addClass("box-review");
        });
    }, function () {
        $(this).removeClass("swap");
        $(".box-rating").fadeOut("fast", function() {
            $(this).fadeIn("fast").removeClass("box-review");
        });
    });

});
//--></script>

<script type="text/javascript">
   $(document).ready(function() {
		var interval;
		$('ul#myRoundabout')
		.roundabout({
		  	'btnNext': '.next_round',
			'btnPrev': '.previous_round' 
		  }
		  )
		.hover(
		function() {

		clearInterval(interval);
		},
		function() {

		interval = startAutoPlay();
		});

		interval = startAutoPlay();
		});
		function startAutoPlay() {
		return setInterval(function() {
		$('ul#myRoundabout').roundabout_animateToPreviousChild();
		}, 3000);
	} 
</script>
</body>
</html>

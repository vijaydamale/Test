<!DOCTYPE html>
<html>
<head>
<title>Big shope </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="css/etalage.css" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"></script>

<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

</head>
<body> 
	<!--header-->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul class="support">
						<li><a href="#"><label> </label></a></li>
						<li><a href="#">24x7 live<span class="live"> support</span></a></li>
					</ul>
					<ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="top-header-right">
					<!--<div class="down-top">		
						  <select class="in-drop">
							  <option value="English" class="in-of">English</option>
							  <option value="Japanese" class="in-of">Japanese</option>
							  <option value="French" class="in-of">French</option>
							  <option value="German" class="in-of">German</option>
							</select>
					 </div>
					<div class="down-top top-down">
						  <select class="in-drop">
						  
						  <option value="Dollar" class="in-of">Dollar</option>
						  <option value="Yen" class="in-of">Yen</option>
						  <option value="Euro" class="in-of">Euro</option>
							</select>
					 </div>-->
					<div class="clearfix"> </div>	
				</div>
				<div class="clearfix"> </div>		
			</div>
		</div>
	<!---->
	
	 <div class="container"> 
	 	
	 	<div class=" single_top">
	      <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.php">
									<img class="etalage_thumb_image" src="images/b1.jpeg" class="img-responsive" />
									<img class="etalage_source_image" src="images/bi1.jpeg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/06-navy-blue-white-356516-puma-10-400x400-imadzjxx6j4nu3jp.jpeg" class="img-responsive" />
								<img class="etalage_source_image" src="images/06-navy-blue-white-356516-puma-10-400x400-imadzjxx6j4nu3jp.jpeg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/06-navy-blue-white-356516-puma-10-400x400-imadzjxx9zscegbk.jpeg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/06-navy-blue-white-356516-puma-10-400x400-imadzjxx9zscegbk.jpeg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/06-navy-blue-white-356516-puma-10-400x400-imadzjxxzbemtnzh.jpeg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/06-navy-blue-white-356516-puma-10-400x400-imadzjxxzbemtnzh.jpeg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"> </div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  
					
					<h1 itemprop="name">Puma Limnos CAT Ind. Sneakers</h1>
					<h4>&nbsp;</h4>
			  <div class="cart-b">
					<div class="left-n ">Rs. 1,399</div>
				     <!--<a class="now-get get-cart-in" href="Aaple.php">ADD TO CART</a> --></form>
              		<form action="cart.php" method="post">       
                    <input type="hidden" value="41" name="psid">
                    <input type="submit" name="btnAddCart" value="ADD TO CART" />
     </form> 
				    <div class="clearfix"></div>
				 </div>
				 <h6>100 items in stock</h6>
			   	<p>Brand New.<br>
100% Original.<br>
Pay Securely.<br>
1 OFFER  <br>
<strong>EXTRA 10% OFF with HDFC Bank Debit/Credit cards.Min. Txn. size Rs.1999. Max Discount per txn Rs.1250 View T&C</strong>
</p>
			   	<div class="share">
							<h5>Share Product :</h5>
							<ul class="share_nav">
								<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
			   
				
				</div>
       	    <div class="clearfix"> </div>
          	   </div>
          	   <ul id="flexiselDemo1">
			<li><img src="images/pi.jpg" /><div class="grid-flex"><a href="Aaple.php">Aaple</a><p>Rs 40399</p></div></li>
			<li><img src="images/pi1.jpg" /><div class="grid-flex"><a href="Canon IXUS IXUS 155 Point & Shoot Camera.php">Canon</a><p>Rs11999</p></div></li>
			<li><img src="images/pi2.jpg" /><div class="grid-flex"><a href="Supermarketwala  Secrets to Winning Consumer India (English).php">SuperMarketwala</a><p>Rs 300</p></div></li>
			<li><img src="images/pi3.jpg" /><div class="grid-flex"><a href="Elle Skinny Fit Women's Jeans.php">Elley Skin fit</a><p>Rs 2699</p></div></li>
			<li><img src="images/pi4.jpg" /><div class="grid-flex"><a href="Titan Analog Watchmen.php">Titan</a><p>Rs 5599</p></div></li>
		 </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>

          	    	<div class="toogle">
				     	<h3 class="m_3">Product Details</h3>
				     	<p class="m_text"><strong>Specifications of Puma Limnos CAT Ind. Sneakers</strong><br>

<strong>GENERAL</strong><br>
Ideal For	:	Men<br>
Occasion	:	Casual<br>
<strong>SHOE DETAILS</strong><br>
Closure		:	Laced<br>
Tip Shape	:	Round<br>
Weight		:	325 gm (per single Shoe) - Weight of the product may vary depending on size.<br>
Style		:	Panel and Stitch Detail<br>
Design		:	Logo Print<br>
Color		:	Navy Blue, White<br>
<strong>ADDITIONAL DETAILS</strong><br>
Other Details:	Padded Footbed, Textured Sole
</p>
				     </div>	
          	   </div>
          	   
          	   <!---->
<?php include "leftsidebar.php"?>
	<!---->
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="latter">
					<h6>NEWS-LETTER</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Enter email here"onfocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Enter email here';}" />
							<input type="submit" value="SUBSCRIBE" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latter-right">
					<p>FOLLOW US</p>
					<ul class="face-in-to">
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span class="facebook-in"> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<h6>CATEGORIES</h6>
					<ul>
						<li><a href="electronics.php">Electronics</a></li>
						<li><a href="men.php">Men</a></li>
						<li><a href="women.php">Women</a></li>
						<li ><a href="kids.php">Kids</a></li>
						<li ><a href="booksandmedia.php">Books and Media</a></li>
						<!--<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
						<li ><a href="#">Urna ac tortor sc</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Urna ac tortor sc</a></li>
						<li ><a href="#">Eget nisi laoreet</a></li>
						<li ><a href="#">Faciisis ornare</a></li>-->
					</ul>
				</div>
				<div class="footer-bottom-cate bottom-grid-cat">
					<h6>FEATURE PROJECTS</h6>
					<ul>
						<li><a href="electronics.php">Electronics</a></li>
						<li><a href="men.php">Men</a></li>
						<li><a href="women.php">Women</a></li>
						<li ><a href="kids.php">Kids</a></li>
						<li ><a href="booksandmedia.php">Books and Media</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>TOP BRANDS</h6>
					<ul>
						<li><a href="Nike Chroma Thong Iii Slippers.php">Nike</a></li>
						<li><a href="PumaJrShoe.php">Puma</a></li>
						<li><a href="moto g.php">Motorola</a></li>
						<li ><a href="Aaple.php">apple</a></li>
						<li ><a href="Samsung Galaxy Note 3 Neo.php">Samsung</a></li>
<!--<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
						<li ><a href="#">Urna ac tortor sc</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Urna ac tortor sc</a></li>
						<li ><a href="#">Eget nisi laoreet</a></li>
						<li ><a href="#">Faciisis ornare</a></li>-->
					</ul>
				</div>
				<div class="footer-bottom-cate cate-bottom">
					<h6>OUR ADDERSS</h6>
					<ul>
						<li>Big Shope</li>
						<li>Business Tower ,L.B.marg</li>
						<li> Mumbai,400 001</li>
						<li >Maharashtra</li>
						<li >India</li>
						<li class="phone">PH : 6985792466</li>
						<li class="temp"> <p class="footer-class"> <a href="#" target="_blank"></a> </p></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>
</html>
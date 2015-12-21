<!DOCTYPE html>
<html>
<head>
<title>Big shope</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"></script>
<!--script-->
</head>
<body> 
	<?php
    session_start();
	
	//check the code given below... I could not run my own code in your settings so i mixed yours n mine

?>
    <?php
//session_start(); // Starting Session
//$error=''; // Variable To Store Error Message
//if (isset($_POST['btnLogin'])) {
//if (empty($_POST['emailid']) || empty($_POST['pass'])) {
//$error = "Username or Password is invalid";
//}
//else
//{
//// Define $username and $password
//$username=$_POST['emailid'];
//$password=$_POST['pass'];
//// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysqli_connect("localhost", "root", "");
//// To protect MySQL injection for Security purpose
//$username = stripslashes($username);
//$password = stripslashes($password);
//$username = mysqli_real_escape_string($connection,$_POST['emailid']);
//$password = mysqli_real_escape_string($connection,$_POST['pass']);
//// Selecting Database
//$db = mysqli_select_db($connection,"bigshope" );
//// SQL query to fetch information of registerd users and finds user match.
//$query = mysqli_query($connection,"select * from  where customer password='$password' AND username='$username'" );
//
//$rows = mysqli_num_rows($query) or die(mysql_error());
//if ($rows == 1) {
//$_SESSION['login_user']=$username; // Initializing Session
//header("location: home.php"); // Redirecting To Other Page
//} else {
//$error = "Username or Password is invalid";
//}
//mysqli_close($connection); // Closing Connection
//}
//}
?>
    
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
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php include "config.php";
if(!isset($_POST["btnLogin"]))
{}
else{
$conn = mysqli_connect($servername, $username, $password, $dbname);
			$emailid=$_POST['emailid'];
			$pass=$_POST['pass'];

			$sql = "SELECT * FROM `customer` WHERE email=$emailid and pass=$pass";
	
			$result = $conn->query($sql);
			if (count($result) > 0) 
			{
				$sql1="SELECT `first`, `last`, `email`, `pass`, `dob`, `gender` FROM `customer` email=$emailid";
    			$result1 = $conn->query($sql1);
	
			if (count($result1) > 0)
			{	 
	$_SESSION["Login"] = "YES";
	$_SESSION["Name"]=$emailid;
	$user=$emailid;
	echo $user . " has successfully logged in ";
	$_SESSION["Id"]=1 ;
	}
	}
	else
	{
		echo "Please enter correct username/password";?>
<a href="login.php"><img src="images/refresh.png" width="15" height="15"  /></a>
  <?php
	}
}
if(isset($_GET['logout']) && $_GET['logout']==1)
{ echo " Logged Out Successfully";
	session_destroy();
	 $conn = mysqli_connect($servername, $username, $password, $dbname);
	$_SESSION["Login"]="NO";
	$strSQL="DELETE FROM list";
	mysql_query($strSQL) or die(mysql_error());
}?>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="top-header-right">
				
					 
					<div class="clearfix"> </div>	
				</div>
				<div class="clearfix"> </div>		
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=" " /></a>
					</div>
					<div class="search">
						<input type="text" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="SEARCH">

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">					
						<div class="account"><a href="login.php"><span> </span>YOUR ACCOUNT</a></div>
							<ul class="login">
								<li><a href="login.php"><span> </span>LOGIN</a></li> |
								<li><a href="register.php">SIGNUP</a></li>
							</ul>
						<div class="cart"><a href="home.php"><span> </span>CART</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!---->
	<div class="container">
			<div class="shoes-grid">
			<a href="#">
			<div class="wrap-in">
				<div class="wmuSlider example1 slide-grid">		 
				   <div class="wmuSliderWrapper">		  
					   <article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " src="images/bag.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>FLAT 50% 0FF</h2>
								<label>FOR ALL PURCHASE <b>VALUE</b></label>
								<p> </p>					
								<span class="on-get">GET NOW</span>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						
					 	</article>
					 	<article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " src="images/bag1.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>FLAT 50% 0FF</h2>
								<label>FOR ALL PURCHASE <b>VALUE</b></label>
								<p> </p>					
								<span class="on-get">GET NOW</span>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						
					 	</article>
					 	<article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag"><img class="img-responsive " src="images/bag.jpg" alt=" " /></div>
			  <div class="col-md-7 banner-off">							
								<h2>FLAT 50% 0FF</h2>
								<label>FOR ALL PURCHASE <b>VALUE</b></label>
								<p> </p>					
								<span class="on-get">GET NOW</span>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						
					 	</article>
						
					 </div>
					 </a>
	                <ul class="wmuSliderPagination">
	                	<li><a href="Nikon D3300 DSLR Camera.php" class="">0</a></li>
	                	<li><a href="Samsung 40H5500 102 cm (40) LED TV.php" class="">1</a></li>
	                	<li><a href="#" class="">2</a></li>
	                </ul>
					 <script src="js/jquery.wmuSlider.js"></script> 
				  <script>
	       			$('.example1').wmuSlider();         
	   		     </script> 
	            </div>
	          </div>
	           	</a>
	   		      <!---->
	   		     <div class="shoes-grid-left">
			<a href="pumashoe.php">				 
	   		     	<div class="col-md-6 con-sed-grid">
					
	   		     		<div class=" elit-grid"> 
						
		   		     		<h4> Shoes</h4>
		   		     		<label>FOR ALL PURCHASE VALUE</label>
							<p>Buy now </p>
							<span class="on-get">GET NOW</span>						
						</div>						
						<img class="img-responsive shoe-left" src="images/sh.jpg" alt=" " />
					  <div class="clearfix"> </div>
						
	   		     	</div>
					</a>
					<a href="Titan Analog Watchmen.php">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>Watches</h4>
		   		     		<label>FOR ALL PURCHASE VALUE</label>
							<p>Buy now </p>
							<span class="on-get">GET NOW</span>
						</div>		
						<img class="img-responsive shoe-left" src="images/wa.jpg" alt=" " />
						
						<div class="clearfix"> </div>
	   		     	</div>
					</a>
	   		     </div>
	   		     <div class="products">
	   		     	<h5 class="latest-product">LATEST PRODUCTS</h5>	
	   		     	  <a class="view-all" href="product.php">VIEW ALL<span> </span></a> 		     
	   		     </div>
	   		     <div class="product-left">
	   		     	<div class="col-md-4 chain-grid">
	   		     		<a href="Canon PowerShot SX520 HS.php"><img class="img-responsive chain" src="images/ch.jpg" alt=" " /></a>
	   		     		<span class="star"> </span>
	   		     		<div class="grid-chain-bottom">
	   		     			<h6>Canon Power Shot </h6>
<div class="star-price">
	   		     				<div class="dolor-grid"> 
		   		     				<span class="actual">12500</span>
		   		     				<span class="reducedfrom">11999</span>
		   		     				  <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
	   		     				</div>
	   		     				<a class="now-get get-cart" href="#">ADD TO CART</a> 
	   		     				<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     	</div>
	   		     	<div class="col-md-4 chain-grid"><a href="FIFA 14.php"><a href="FIFA 14.php"><img class="img-responsive chain" src="images/ba.jpg" alt=" " /></a></a><span class="star"> </span>
   		  <div class="grid-chain-bottom">
	   		     			<h6><a href="single.php">FIFA 14</a></h6>
	   		     			<div class="star-price">
	   		     				<div class="dolor-grid"> 
		   		     				<span class="actual">1500</span>
		   		     				<span class="reducedfrom">1300</span>
		   		     				  <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
	   		     				</div>
	   		     				<a class="now-get get-cart" href="#">ADD TO CART</a> 
	   		     				<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     	</div>
   	      <div class="col-md-4 chain-grid grid-top-chain">
	   		     		<a href="Ssmitn Girl's Gathered Dress.php"><img class="img-responsive chain" src="images/bo.jpg" alt=" " /></a>
	   		     		<span class="star"> </span>
	   		     		<div class="grid-chain-bottom">
	   		     			<h6>Kids Ware</h6>
	   		     			<div class="star-price">
	   		     				<div class="dolor-grid">705<span class="reducedfrom">850</span>
		   		     				  <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
					    	      </span>
	   		     				</div>
     				      <a class="now-get get-cart" href="#">ADD TO CART</a> 
	   		     				<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     	</div>
	   		     	 <div class="clearfix"> </div>
	   		     </div>
	   		     <div class="products">
	   		     	<h5 class="latest-product">LATEST PRODUCTS</h5>	
	   		     	  <a class="view-all" href="product.php">VIEW ALL<span> </span></a> 		     
	   		     </div>
	   		     <div class="product-left">
	   		     	<div class="col-md-4 chain-grid">
	   		     		<a href="HP 15-g049AU Notebook.php"><img class="img-responsive chain" src="images/bott.jpg" alt=" " /></a>
	   		     		<span class="star"> </span>
	   		     		<div class="grid-chain-bottom">
	   		     			<h6>Laptop</h6>
	     			  <div class="star-price">
	   		     				<div class="dolor-grid"> 
		   		     				<span class="actual">32500</span>
		   		     				<span class="reducedfrom">31,399</span>
		   		     				  <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
	   		     				</div>
	   		     				<a class="now-get get-cart" href="#">ADD TO CART</a> 
	   		     				<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     	</div>
	   		     	<div class="col-md-4 chain-grid">
	   		     		<a href="Micromax 50B5000FHD 127 cm (50) LED TV.php"><img class="img-responsive chain" src="images/bottle.jpg" alt=" " /></a>
	   		     		<span class="star"> </span>
	   		     		<div class="grid-chain-bottom">
	   		     			<h6><a href="Micromax 50B5000FHD 127 cm (50) LED TV.php">Television</a></h6>
	   		     			<div class="star-price">
	   		     				<div class="dolor-grid"> 
		   		     				<span class="actual">36000</span>
		   		     				<span class="reducedfrom">34490</span>
		   		     				  <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
	   		     				</div>
	   		     				<a class="now-get get-cart" href="#">ADD TO CART</a> 
	   		     				<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     	</div>
	   		     	<div class="col-md-4 chain-grid grid-top-chain">
	   		     		<a href="Disneymickeyclogs.php"><img class="img-responsive chain" src="images/baa.jpg" alt=" " /></a>
	   		     		<span class="star"> </span>
	   		     		<div class="grid-chain-bottom">
	   		     			<h6><a href="Disneymickeyclogs.php">Kids Footware</a></h6>
	   		     			<div class="star-price">
	   		     				<div class="dolor-grid"> 
		   		     				<span class="actual">350</span>
		   		     				<span class="reducedfrom">450</span>
		   		     				  <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
	   		     				</div>
	   		     				<a class="now-get get-cart" href="#">ADD TO CART</a> 
	   		     				<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     	</div>
	   		     	 <div class="clearfix"> </div>
	   		     </div>
	   		     <div class="clearfix"> </div>
	   		   </div>   
			   <div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">CATEGORIES</h3>
		 <ul class="menu">
		<li class="item1"><a href="#">Electronics<img class="arrow-img" src="images/arrow1.png" alt=""/> </a>
			<ul class="cute">
				<li class="subitem1"><a href="mobiles.php">Mobiles</a></li>
				<li class="subitem2"><a href="laptops.php">Laptops</a></li>
				<li class="subitem3"><a href="cameras.php">Cameras </a></li>
                <li class="subitem3"><a href="television.php">Televisions </a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">Men <img class="arrow-img " src="images/arrow1.png" alt=""/></a>
			<ul class="cute">	<li class="subitem1"><a href="footware-men.php">Footware </a></li>
				<li class="subitem2"><a href="clothing-men.php">Clothing</a></li>
				<li class="subitem3"><a href="watches-men.php">Watches</a></li>
			</ul>
		</li>
		<li class="item3"><a href="#">Women<img class="arrow-img img-arrow" src="images/arrow1.png" alt=""/> </a>
			<ul class="cute">
				<li class="subitem1"><a href="footware-women.php">Footware </a></li>
				<li class="subitem2"><a href="clothing-women.php">Clothing</a></li>
				<li class="subitem3"><a href="watches-women.php">Watches</a></li>
			</ul>
		</li>
		<li class="item4"><a href="#">Kids <img class="arrow-img img-left-arrow" src="images/arrow1.png" alt=""/></a>
			<ul class="cute">
				<li class="subitem1"><a href="footware-kids.php">Footware </a></li>
				<li class="subitem2"><a href="clothing-kids.php">Clothing</a></li>
				<li class="subitem3"><a href="watches-kids.php">Watches</a></li>
			</ul>
		</li>
        <li class="item5"><a href="#">Books and Media <img class="arrow-img img-left-arrow" src="images/arrow1.png" alt=""/></a>
			<ul class="cute">
				<li class="subitem1"><a href="books.php">Books </a></li>
				<li class="subitem2"><a href="gaming.php">Gaming</a></li>
				<!--<li class="subitem3"><a href="product.php">Watches</a></li>-->
			</ul>
		</li>
				<li>
			<!--<ul class="kid-menu">
				<li><a href="product.php"></a></li>
				<li ><a href="product.php"></a></li>
				<li ><a href="product.php"></a></li>
			</ul>-->
		</li>
		<!--<ul class="kid-menu ">
				<li><a href="product.php"></a></li>
				<li ><a href="product.php">Urna ac tortor sc</a></li>
				<li><a href="product.php">Ornared id aliquet</a></li>
				<li><a href="product.php">Urna ac tortor sc</a></li>
				<li ><a href="product.php">Eget nisi laoreet</a></li>
				<li><a href="product.php">Faciisis ornare</a></li>
				<li class="menu-kid-left"><a href="contact.php">Contact us</a></li>
			</ul>-->
	</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
					<div class=" chain-grid menu-chain">
	   		     		<a href="single.php"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid">400</span>
		   		     		<span class="reducedfrom">500</span>  
		   		     		<h6>Mens Watch</h6>  		     			   		     										
	   		     		</div>
	   		     	</div>
	   		     	 <a class="view-all all-product" href="#">VIEW ALL PRODUCTS<span> </span></a> 	
			</div>
	   		    <div class="clearfix"> </div>        	         
		</div>
	
	<!---->
	<?php include 'footer.php';?>
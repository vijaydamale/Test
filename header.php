
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
<?php
session_start();

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
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php include "config.php";
$conn = new mysqli("localhost", "root","", "bigshope");

if(isset($_SESSION["Login"]) && ($_SESSION["Login"] == "YES"))
{$user=$_SESSION["Name"];
	echo "Hi" ." ". $user . "!";
}
if(isset($_GET['logout']) && $_GET['logout']==1)
{ echo " Logged Out Successfully";
	session_destroy();
	$_SESSION["Login"]="NO";
	$strSQL="DELETE FROM list";
	mysqli_query($conn,$strSQL);// or die(mysqli_error());
}?>
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
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=" " /></a>
					</div>
                    <form name="frmApple" action="" method="post" >
					<div class="search">
                    
						<input type="text" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" >
						<input type="button"  value="SEARCH">                        

					</div>
                    
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">					
						<div class="account"><a href="login.php"><span> </span>YOUR ACCOUNT</a></div>
							<ul class="login">
								<?php
					if(isset($_SESSION["Login"]))
					{
                    if($_SESSION["Login"] == "YES")
					{?>
                    <li><a href="?logout=1">Log Out</a></li>
					<?php
                    }}
					if((!isset($_SESSION["Login"])) || (isset($_POST['logout']) && $_POST['logout']==1))
					{?>
                    <li><a href="login.php">Log In</a></li> |
					<li><a href="register.php">Sign Up</a></li>
					<?php
                    }
					?>							</ul>
						<div class="cart"><a href="home.php"><span> </span>CART</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
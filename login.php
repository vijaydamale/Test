<?php include "config.php";?>
<?php include "header.php";?>
	<div class="container">
		
      	   <div class="account_grid">
			   <div class=" login-right">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				</form>
                <form name="frmLogin" method="post" action="index.php">
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="text" name="emailid"> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="password" name="pass"> 
				  </div>
				  <a class="forgot" href="#">Forgot Your Password?</a>
				  <input type="submit" name="btnLogin" value="Login">
			    </form>
			   </div>	
			    <div class=" login-left">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p></p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="clearfix"> </div>
			 </div>
			 <?php include"leftsidebar.php";?>	<!---->
	<?php include "footer.php"; ?>
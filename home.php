

<?php 

  
 
   ////if(isset($_POST['ptypeid']) && $_POST['ptypeid']!='' && isset($_POST['pcid']) &&  $_POST['pcid']!='' && isset($_POST['psid']) && $_POST['psid']!='')
//   if(isset($_POST['psid']) && $_POST['psid']!=''  )
//   {
//      //$_SESSION['cartDetails']=array('ptypeid'=>$_POST['ptypeid'],'pcid'=>$_POST['pcid'],'psid'=>$_POST['psid']);
//	  $_SESSION['cartDetails']=$_POST['psid'];
//	  $test_array=array();
//	  $test_array=$_SESSION['cartDetails'];
//	  
//		
//
//	  // Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//
//
//	  	$sql = "select * from productsubcategory where psid=".$_POST['psid'];
////		$result = $conn->query($sql);
////	    $conn->close();
//   }
//   
//   if(!isset($_POST["submit"]))
//{}
//else{
//$strSQL = "select first,email,pass from customer where email='" . $_POST["email"] . "' AND pass='" . $_POST["password"] . "'";
//$result=mysql_query($strSQL) or die (mysql_error());
//
//if($row=mysql_fetch_array($result))
//{
//
//	$_SESSION["Login"] = "YES";
//	$_SESSION["Name"]=$row['first'];
//	$user=$row['first'];
//	echo $user . " has successfully logged in ";
//	$_SESSION["Id"]=1 ;
//	}
//	else
//	{
//		echo "Please enter correct username/password";?>
<!--<a href="login.php"><img src="images/refresh.png" width="15" height="15"  /></a>-->
<?php
////	}
////}
////if(isset($_POST['logout']) && $_POST['logout']==1)
////{ echo " Logged Out Successfully";
////	session_destroy();
////	mysql_connect("localhost", "root", "") or die(mysql_error()); 
////		mysql_select_db("bigshope") or die(mysql_error());
////	$_SESSION["Login"]="NO";
////	$strSQL="DELETE FROM list";
////	mysql_query($strSQL) or die(mysql_error());
////}
//?>
<?php include "header.php";?>
	
	<div class=" single_top">
<?php
	 		include "config.php";



		  $strSQL = "select * from list"; 
		   $result=mysqli_query($conn,$strSQL); 
          //if(!(isset($_SESSION["Login"]) || ($_SESSION["Login"] == "YES")))
		   if((mysqli_num_rows($result))!=0)
		   {  
		    $strSQL = "select * from list";
			   $result=mysqli_query($conn,$strSQL) or die (mysql_error());
				if($row=mysqli_fetch_array($result))
				{
					$strSQL = "select * from list";
			   $result=mysqli_query($conn,$strSQL) or die (mysqli_error());
				?>
				<table border="3" bordercolor="#CCCCCC">
				<tr bgcolor="#F97E76">
                <th>Number of Product</th>
                <th>product</th>
                <th>price</th>
                
                
                
                </tr>

				
				<?php
				while($row = mysqli_fetch_array($result))
				{
					?>
				 <tr>
                <td><?php echo $row["Lid"];?></td>
                <td> <?php echo $row["dis"];?></td>
                <td>RS. <?php echo $row["price"];?></td>
              <?php /*?> <?php ?> <td><form action="home.php" method="post">
                <input type="hidden" name="id" value="<?php echo $_SESSION["Lid"]++;?>">
                <input type="hidden" name="product" value="<?php echo $row["dis"];?>">
                <input type="hidden" name="price" value="<?php echo $row["price"];?>">
                <input type="submit" value="+" name="add" ></form></td>
                <td><form action="home.php" method="post">
                <input type="hidden" name="subid" value="<?php echo $row["Lid"];?>">
                <input type="hidden" name="subproduct" value="<?php echo $row["dis"];?>">
                <input type="hidden" name="subprice" value="<?php echo $row["price"];?>">
                <input type="submit" name="subtract" value="-" ></form></td><?php ?></tr>-->
				<?php */?><?php
				}
				?>
                </table>
				<br>
               <a href="checkout.php">Proceed to Checkout</a>
				<?php
				}
				else
				{?>
				<h4 class="title">Shopping cart is empty</h4>
				<p class="cart">You have no items in your shopping cart.<br><a href="index.php">Click here</a> to continue shopping</p>
				<?php }}
		   else
		   {?>
    	    <h4 class="title">Shopping cart is empty</h4>
    	     <p class="cart">You have no items in your shopping cart.<br>Click<a href="index.php"> here</a> to continue shopping</p>
    	   <?php }?>

				</div>
	
	
	<?php include "leftsidebar.php"; ?>
				

	<!---->
	<?php include "footer.php"; ?>




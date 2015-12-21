<html>
	<head>
	<title>Cart</title>
	</head>
	<body>

	<?php  
	session_start();
	echo "<h1></h1>";
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("bigshope") or die(mysql_error());



$strSQL = "insert into list(dis, price) values
((select psdis from productsubcategory where psid=" . $_POST["psid"] . "),(select price from productsubcategory where psid=" . $_POST["psid"] . "))";
mysql_query($strSQL) or die (mysql_error());
echo "Data inserted";
 ?> 
<script>
location.replace("home.php");
</script>

	</body>
	</html>
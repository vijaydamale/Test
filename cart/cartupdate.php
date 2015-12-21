<?php
$current_url=base64_encode("localhost");

$results=$mysqli->query("select * from productsubcategory order by psid ASC");
if($results)
{
	while($obj=$results->fetch_object())
	{
		echo'<form method="post" action="cartupdate.php">';
		echo'<img src="images/'.$obj->product_img_name'">';
		echo'<h3>'.$obj->product_name.'</h3>;
	}
}

?>

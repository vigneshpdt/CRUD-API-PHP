<?php

include "dbconfig.php";

header("Content-Type: application/json");
header("access-control-allow-origin:*");

 $query = "SELECT * FROM product_details";

 $details = mysqli_query($connection, $query);

 $count = mysqli_num_rows($details);

 if($count > 0)
 {
 	$row = mysqli_fetch_all($details, MYSQLI_ASSOC);

 	echo json_encode($row);
 }
 else
 {
 	echo json_encode(array("message" => "No product found"));
 }


?>
<?php

include "dbconfig.php";

header("Content-Type: application/json");
header("access-control-allow-origin:*");
header("access-control-allow-methods: PUT");
header("access-control-allow-header: access-control-allow-header,content-type,access-control-allow-method, Authorization");

$data = json_decode(file_get_contents("PHP://input"), true);

$id = $data["id"];
$name = $data["name"];
$price = $data["price"];

echo $query = "UPDATE product_details SET name = '".$name."', price = '".$price."' WHERE id = '".$id."'";

if(mysqli_query($connection, $query))
{
	echo json_encode(array('message'=> "Product updated successfully"));
}
else 
{
	echo json_encode(array('message'=> "Product update failed"));
}
?>
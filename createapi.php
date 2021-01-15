<?php

 require_once "dbconfig.php";

header("content-type:application/json");
header("access-control-allow-origin:*");
header("access-control-allow-methods:post");
header("access-control-allow-header: access-control-allow-header,content-type,access-control-allow-method,authentication");

$data = json_decode(file_get_contents("php://input"), true);

$pname = $data["name"];
$pprice = $data["price"];

$query = "INSERT into product_details (name,price) VALUES ('".$pname."','".$pprice."')";

if(mysqli_query($connection,$query))
{
	echo json_encode(array('message' => "Product created successfully"));
}
else
{
	echo json_encode(array('message' => "update not success"));
}

?>
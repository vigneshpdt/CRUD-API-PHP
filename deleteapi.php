<?php

include "dbconfig.php";

header("Content-Type: application/json");
header("access-control-allow-origin:*");
header("access-control-allow-methods: DELETE");
header("access-control-allow-headers: access-control-allow-header,content-type,access-control-allow-methods, Authorization");

$data = json_decode(file_get_contents("php://input"), true);
 
$pname = $data["name"];

echo  $query = "DELETE FROM product_details WHERE name = '".$pname."'";

if(mysqli_query($connection, $query))
{
	echo json_encode(array('message' => "Product deleted successfully"));
}
else 
{
	echo json_encode(array('message' => "Deleting product failed"));
}
?>
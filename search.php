<?php
require_once("./lib/connection.php");

$keyword = $_POST["keyword"];

// $sql = "select * from products where product_name like %'$keyword'% ";

$sql = "select * from products where product_name like '%$keyword%' limit 4";

$result = $conn->query($sql);
// $querry = mysqli_query($conn, $sql);

// $result = $querry->get_result();

echo json_encode(array(
    'success'   => true,
    'result'    => $result->fetch_all(MYSQLI_ASSOC)
));

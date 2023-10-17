<?php
// Connect to database and fetch data
include "../admin/connection.php";
$result = mysqli_query($conn, "SELECT id,front,back,title,author,status,book_borrowed FROM books");
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Output data as JSON
header('Content-Type: application/json');
echo json_encode(array('data' => $data));

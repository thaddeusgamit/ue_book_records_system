<?php
date_default_timezone_set('Asia/Manila');
include('./connection.php');

if (isset($_POST['update'])) {
    if (isset($_POST['hidden'])) {

        $title = $_POST['hidden'];
        $status = $_POST['status'];
        if ($status == 1) {
            $book_borrowed = "0000-00-00 00:00:00";
        } else {
            $book_borrowed = $_POST['book_borrowed'];
        }

        $date_updated = date('Y-m-d H:i:s');


        $stmt = $conn->prepare("UPDATE `books` SET `status`=?,`book_borrowed`= ?,`date_time-updated`=? WHERE title=?");
        if ($stmt) {
            $stmt->bind_param("ssss", $status, $book_borrowed, $date_updated, $title);
            $stmt->execute();
            echo "<script>window.location.href='dashboard.php' </script>";
        }
    }
}

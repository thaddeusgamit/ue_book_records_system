<?php
date_default_timezone_set('Asia/Manila');
include('./connection.php');

if (isset($_POST['update'])) {
    if (isset($_POST['hidden'])) {

        $id = $_POST['hidden'];
        $header = $_POST['header'];
        $content = $_POST['content'];


        $date_updated = date('Y-m-d H:i:s');


        $stmt = $conn->prepare("UPDATE `announcement` SET `header`=?,`contents`= ?,`date_updated`=? WHERE id=?");
        if ($stmt) {
            $stmt->bind_param("ssss", $header, $content, $date_updated, $id);
            $stmt->execute();
            echo "<script>window.location.href='announcement.php' </script>";
        }
    }
}

<?php

session_start();
date_default_timezone_set('Asia/Manila');
include('./connection.php');
include('./session.php');


if (isset($_GET['bid'])) {
    // Store the cipher method
    $ciphering = "AES-128-CTR";
    $options = 0;
    // Non-NULL Initialization Vector for decryption
    $decryption_iv = '1234567891011121';

    // Store the decryption key
    $decryption_key = "UE-law-school";

    // Use openssl_decrypt() function to decrypt the data
    $title = openssl_decrypt(
        $_GET['bid'],
        $ciphering,
        $decryption_key,
        $options,
        $decryption_iv
    );
    // foreach ($_GET as $encrypting_lrn => $encrypt_lrn){
    //   $decrypt_lrn = $_GET[$encrypting_lrn] = base64_decode(urldecode($encrypt_lrn));
    //   $decrypted_lrn = ((($decrypt_lrn*987654)/56789)/12345678911);
    // }

    if (empty($_GET['bid'])) {
        echo "<script>alert('notes not found');
        window.location = 'dashboard.php';</script>";
        exit();
    }

    $verify_report = "SELECT title FROM `books` WHERE title = '$title'";
    $query_request = mysqli_query($conn, $verify_report) or die(mysqli_error($conn));
    if (mysqli_num_rows($query_request) == 0) {
        echo "
              <script type = 'text/javascript'>
              window.location = 'dashboard.php';
              </script>";
        exit();
    } else {

        $select_file = "SELECT `front`, `back` FROM `books` WHERE title = '$title' ";
        $run_select = mysqli_query($conn, $select_file);
        $row = mysqli_fetch_array($run_select);
        
        $front =  $row['front'];
        $back =  $row['back'];

        if (unlink("book/" . $front) && unlink("book/" . $back)) {

            $delete_reports = "DELETE FROM `books` WHERE title = '$title'";
            $run_delete = mysqli_query($conn, $delete_reports);
            if ($run_delete) {
                echo "
              <script type = 'text/javascript'>
              window.location = 'dashboard.php';
              </script>";
                exit();
            }
        }
    }
}

<?php
$conn = new mysqli("localhost", "root", "", "ue_law_books");
if ($conn == false) {
    echo "error" . $conn->error;
}

// $conn = new mysqli("localhost", "u116389031_dilg_ccc123" , "mathewPOGI123", "u116389031_dilg_ccc");
// if($conn == false) {
//     echo "error" . $conn->error;
// }

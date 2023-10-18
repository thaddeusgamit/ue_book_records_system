<?php
// $conn = new mysqli("sql111.epizy.com", "epiz_33893914", "bcAxNbno8zeUty", "epiz_33893914_ue_law_books");
// if ($conn == false) {
//     echo "error" . $conn->error;
// }

$conn = new mysqli("localhost", "root", "", "ue_law_books");
if ($conn == false) {
    echo "error" . $conn->error;
}

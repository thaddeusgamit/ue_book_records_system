<?php
session_start();
date_default_timezone_set('Asia/Manila');
include('./connection.php');
include('./session.php');

$id = $_POST['id'];

$sql_notes = "SELECT * FROM announcement WHERE id = '$id'";
$run_notes = mysqli_query($conn, $sql_notes);
?>

<form action="edit-announce.php" method="post">
    <?php
    if (mysqli_num_rows($run_notes) > 0) {
        foreach ($run_notes as $row) {
    ?>
            <input type="hidden" name="hidden" id="hidden" value="<?php echo $row['id'] ?>">
            <div class="mb-3">
                <label class="form-label"> Header </label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="header" value="<?php echo $row['header'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label"> Contents </label>
                <textarea class="form-control" placeholder="Enter your contents Here" id="message-text" name="content"> <?php echo $row['contents'] ?></textarea>
            </div>
            <span class="d-flex justify-content-end align-items-center">
                <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="update">Update</button>
            </span>
</form>
<?php

            error_reporting(E_ERROR | E_PARSE);
        }
    }





?>
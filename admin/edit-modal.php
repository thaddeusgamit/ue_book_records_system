<?php
session_start();
date_default_timezone_set('Asia/Manila');
include('./connection.php');
include('./session.php');

$title = $_POST['title'];
$sql_notes = "SELECT * FROM books WHERE title = '$title'";
$run_notes = mysqli_query($conn, $sql_notes);
?>

<form action="edit-books.php" method="post">
    <?php
    if (mysqli_num_rows($run_notes) > 0) {
        foreach ($run_notes as $row) {
    ?>
            <input type="hidden" name="hidden" id="hidden" value="<?php echo $row['title'] ?>">
            <div class="mb-3">
                <label class="form-label"> Title </label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="<?php echo $row['title'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label"> Author </label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="<?php echo $row['author'] ?>" readonly>
            </div>

            <div class="row g-3 align-items-center mb-3">

                <div class="col-auto">
                    <label class="form-label"> Status </label>
                    <select class="form-select" aria-label="Default select example" id="select" name="status">
                        <option value="">Status</option>
                        <option value="1" <?php
                                            if ($row['status'] == "1") {
                                                echo "Selected";
                                            }
                                            ?>>On Stock</option>
                        <option value="2" <?php
                                            if ($row['status'] == "2") {
                                                echo "Selected";
                                            }
                                            ?>>Borrowed</option>
                        <option value="3" <?php
                                            if ($row['status'] == "3") {
                                                echo "Selected";
                                            }
                                            ?>>Missing</option>
                    </select>






                </div>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Book Borrowed</label>
                <input type="datetime-local" class="form-control" id="book_borrowed" name="book_borrowed" value="<?php echo $row['book_borrowed'] ?>" step="any">
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

<script>
    $('#select').on('change', function() {
        if (this.value == 1)
            $('#book_borrowed').prop('disabled', true),
            $('#book_borrowed').val('')

        else {
            $('#book_borrowed').prop('disabled', false)
        }

    })

    $('#select').change()
</script>
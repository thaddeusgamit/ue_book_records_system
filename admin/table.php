<?php
include('./connection.php');
include('./edit-books.php');
$output = '';
if (isset($_POST['query'])) {
    $search = mysqli_real_escape_string($conn, $_POST['query']);
    $query = "SELECT * FROM books WHERE title LIKE '%" . $search . "%'
        OR author LIKE '%" . $search . "%'
        ";
} else {
    $query = "SELECT * FROM books";
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $number = 0;
    $output .= '<table class="table top-selling-table">
    <thead>
        <tr>
            <th>
                <h6 class="text-sm text-medium">No.</h6>
            </th>
            <th>
                <h6 class="text-sm text-medium">Books Cover</h6>
            </th>
            <th class="min-width">
                <h6 class="text-sm text-medium">
                    Title</i>
                </h6>
            </th>
            <th class="min-width">
                <h6 class="text-sm text-medium">
                    Author</i>
                </h6>
            </th>
            <th class="min-width">
                <h6 class="text-sm text-medium">
                    Book Date <i class="lni lni-arrows-vertical"></i>
                </h6>
            </th>
            <th class="min-width">
                <h6 class="text-sm text-medium">
                    Status <i class="lni lni-arrows-vertical"></i>
                </h6>
            </th>
            <th>
                <h6 class="text-sm text-medium text-end">
                    Actions <i class="lni lni-arrows-vertical"></i>
                </h6>
            </th>
        </tr>
    </thead>';
    while ($row = mysqli_fetch_array($result)) {

        $modal = $row['title'];


        $book_status = "";
        if ($row['status'] == 1) {
            $book_status .= '<span class="status-btn success-btn">On Stock</span>';
        }
        if ($row['status'] == 2) {
            $book_status .= '<span class="status-btn warning-btn">Borrowed</span>';
        }

        if ($row['status'] == 3) {
            $book_status .= '<span class="status-btn danger-btn">Missing</span>';
        }





        $title = $row['title'];
        // Store the cipher method
        $ciphering = "AES-128-CTR";

        // Use OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;

        // Non-NULL Initialization Vector for encryption
        $encryption_iv = '1234567891011121';

        // Store the encryption key
        $encryption_key = "UE-law-school";

        // Use openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt(
            $title,
            $ciphering,
            $encryption_key,
            $options,
            $encryption_iv
        );
        //   $encrypted_data = (($lrn*12345678911*56789)/987654);
        $view_link = "view-reports.php?bid=" . $encryption;
        $delete_link = "delete-book.php?bid=" . $encryption;
        $number++;
        $output .= '
            <tr>
            <td>' . $number . '</td>
            <td> 
            <div class = "product">
              <img src= "book/' . $row['front'] . '" height = "150"/>
              <img src= "book/' . $row['back'] . '" height = "150"/>
            </div>
            </td>
            
            
            <td> <p class="text-sm"> ' . $row['title'] . '</p> </td>
            <td> <p class="text-sm"> ' . $row['author'] . '</p> </td>
             <td> <p class="text-sm"> ' . $row['book_borrowed'] . '</p> </td>
             <td> ' . $book_status . '</td>

           <td>
                <div class="action justify-content-end">
                            <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="lni lni-more-alt"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                <li class="dropdown-item">
                                    <a href="' . $delete_link . '" class="text-gray">Remove</a>
                                </li>
                                <li class="dropdown-item">
                               <a href="" class="text-gray edit" id="' . $title . '" data-id="' . $title . '"  data-bs-toggle="modal" data-bs-target="#editNote">Update status</a>
                                
                                </li>
                            </ul>
                        </div>
            </td>  
             
            </tr>  
            ';
    }
    echo $output;
} else {
    echo "
        <div class='alert alert-danger'>
            No data Found
        </div>
        ";
}




?>
<div class="modal fade" id="editNote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Book status</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body notes">

            </div>
            <div class=" modal-footer">

            </div>
        </div>
    </div>
</div>



<!-- Modal -->


<script>
    $(document).ready(function() {
        $('.edit').click(function() {
            var title = $(this).data('id');
            $.ajax({
                url: 'edit-modal.php',
                type: 'post',
                data: {
                    title: title
                },
                success: function(response) {
                    $('.notes').html(response);
                    $('#editNote').modal('show');
                }
            });
        });
    });
</script>














<!-- <table class="table top-selling-table">
    <thead>
        <tr>
            <th>
                <h6 class="text-sm text-medium">No.</h6>
            </th>
            <th>
                <h6 class="text-sm text-medium">Books Cover</h6>
            </th>
            <th class="min-width">
                <h6 class="text-sm text-medium">
                    Title</i>
                </h6>
            </th>
            <th class="min-width">
                <h6 class="text-sm text-medium">
                    Author</i>
                </h6>
            </th>
            <th class="min-width">
                <h6 class="text-sm text-medium">
                    Book Date <i class="lni lni-arrows-vertical"></i>
                </h6>
            </th>
            <th class="min-width">
                <h6 class="text-sm text-medium">
                    Status <i class="lni lni-arrows-vertical"></i>
                </h6>
            </th>
            <th>
                <h6 class="text-sm text-medium text-end">
                    Actions <i class="lni lni-arrows-vertical"></i>
                </h6>
            </th>
        </tr>
    </thead>
    <tbody>

        <?php
        // $sql = "SELECT * FROM books";
        // $run = mysqli_query($conn, $sql);

        // if (mysqli_num_rows($run) > 0) {
        //     $count = 0;
        //     foreach ($run as $row) {
        //         $title = $row['title'];
        //         // Store the cipher method
        //         $ciphering = "AES-128-CTR";

        //         // Use OpenSSl Encryption method
        //         $iv_length = openssl_cipher_iv_length($ciphering);
        //         $options = 0;

        //         // Non-NULL Initialization Vector for encryption
        //         $encryption_iv = '1234567891011121';

        //         // Store the encryption key
        //         $encryption_key = "UE-law-school";

        //         // Use openssl_encrypt() function to encrypt the data
        //         $encryption = openssl_encrypt(
        //             $title,
        //             $ciphering,
        //             $encryption_key,
        //             $options,
        //             $encryption_iv
        //         );
        //         //   $encrypted_data = (($lrn*12345678911*56789)/987654);
        //         $view_link = "view-reports.php?bid=" . $encryption;
        //         $delete_link = "delete-book.php?bid=" . $encryption;
        //         $count++;
        ?>



                <tr>
                    <td>
                        <p class=""><?php echo $count ?></p>
                    </td>
                    <td>
                        <div class="product">

                            <img src="book/<?php echo $row['front'] ?>" height="150" alt="" />
                            <img src="book/<?php echo $row['back'] ?>" height="150" alt="" />


                        </div>
                    </td>
                    <td>
                        <p class="text-sm"></p>
                    </td>
                    <td>
                        <p class="text-sm"><?php echo $row['author'] ?></p>
                    </td>
                    <td>
                        <p class="text-sm"><?php echo $row['book_borrowed'] ?></p>
                    </td>

                    <td>
                        <?php
                        if ($row['status'] == 1) { ?>
                            <span class="status-btn success-btn">On Stock</span>
                        <?php
                        }
                        ?>
                        <?php
                        if ($row['status'] == 2) { ?>
                            <span class="status-btn Warning-btn">Borrowedk</span>
                        <?php
                        }
                        ?>
                        <?php
                        if ($row['status'] == 3) { ?>
                            <span class="status-btn close-btn">Missing</span>
                        <?php
                        }
                        ?>

                    </td>
                    <td>
                        <div class="action justify-content-end">
                            <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="lni lni-more-alt"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                <li class="dropdown-item">
                                    <a href="" class="text-gray">Remove</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#0" class="text-gray">Update Date</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>


        <?php
        //     }
        // }

        ?>
    </tbody>
</table> -->
<!-- End Table -->
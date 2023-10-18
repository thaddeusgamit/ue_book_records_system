<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Manila');
include('./connection.php');
include('./session.php');
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UE-LSG Share-A-Book Project</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/sweetalert2/dist/sweetalert2.min.js">
</head>

<body>
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
        <div class="navbar-logo">
            <a href="dashboard.php">
                <!-- logo  -->
                <img src="../assets/images/pictures/ue-law.png" style="height: 7rem; width: 7rem;">
            </a>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li class="nav-item nav-item">
                    <a href="dashboard.php">
                        <span class=" icon">
                            <svg width="22" height="22" viewBox="0 0 22 22">
                                <path d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                            </svg>
                        </span>
                        <span class="text">Home</span>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="new-books.php">
                        <span class="icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.4166 7.33333C18.9383 7.33333 20.1666 8.56167 20.1666 10.0833V15.5833H16.4999V19.25H5.49992V15.5833H1.83325V10.0833C1.83325 8.56167 3.06159 7.33333 4.58325 7.33333H5.49992V2.75H16.4999V7.33333H17.4166ZM7.33325 4.58333V7.33333H14.6666V4.58333H7.33325ZM14.6666 17.4167V13.75H7.33325V17.4167H14.6666ZM16.4999 13.75H18.3333V10.0833C18.3333 9.57917 17.9208 9.16667 17.4166 9.16667H4.58325C4.07909 9.16667 3.66659 9.57917 3.66659 10.0833V13.75H5.49992V11.9167H16.4999V13.75ZM17.4166 10.5417C17.4166 11.0458 17.0041 11.4583 16.4999 11.4583C15.9958 11.4583 15.5833 11.0458 15.5833 10.5417C15.5833 10.0375 15.9958 9.625 16.4999 9.625C17.0041 9.625 17.4166 10.0375 17.4166 10.5417Z" />
                            </svg>
                        </span>
                        <span class="text">Register Books</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="add-admin.php">
                        <span class="icon">
                            <svg width="35" height="35" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                            </svg>
                        </span>
                        <span class="text">Add admin</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="announcement.php">
                        <span class="icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z" />
                            </svg>
                        </span>
                        <span class="text-active">Announcements</span>
                    </a>
                </li>
                <span class="divider">
                    <hr />
                </span>

        </nav>



        </a>
        </div>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-6">
                        <div class="header-left d-flex align-items-center">
                            <div class="menu-toggle-btn mr-20">
                                <button id="menu-toggle" class="main-btn danger-btn btn-hover">
                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg></i> Menu
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-6">
                        <div class="header-right">

                            <!-- profile start -->
                            <div class="profile-box ml-15">
                                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile" data-bs-toggle="dropdown" aria-expanded="false">
                                    <!-- Profile of user -->
                                    <div class="profile-info">
                                        <div class="info">
                                            <h6>Hello! <?php echo $username ?> </h6>

                                        </div>
                                    </div>
                                    <i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
</svg></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">

                                    <li>
                                        <a href="logout.php"> <i class="lni lni-exit"></i> Sign Out </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- profile end -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== header end ========== -->

        <!-- ========== section start ========== -->
        <section class="section">
            <div class="container-fluid">
                <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="title mb-30">
                            </div>
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>

                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Announcements
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                            <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z" />
                        </svg>
                    </button>


                </div>

                <!-- table -->
                <div class="card-style mb-30">
                    <div class="
                    title
                    d-flex
                    flex-wrap
                    align-items-center
                    justify-content-between
                  ">
                        <div class="left">
                            <h6 class="text-medium mb-30">Announcements</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                </div>
                            </div>
                            <!-- end select -->
                        </div>
                    </div>

                    <!-- End Title -->


                    <!-- table -->

                    <table class="table top-selling-table">
                        <thead>
                            <tr>
                                <th>
                                    <h6 class="text-sm text-medium">No.</h6>
                                </th>
                                <th>
                                    <h6 class="text-sm text-medium">Picutre</h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Header</i>
                                    </h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Content</i>
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
                            $sql = "SELECT * FROM announcement";
                            $run = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($run) > 0) {
                                $count = 0;
                                foreach ($run as $row) {
                                    $id = $row['id'];
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
                                        $id,
                                        $ciphering,
                                        $encryption_key,
                                        $options,
                                        $encryption_iv
                                    );
                                    //   $encrypted_data = (($lrn*12345678911*56789)/987654);
                                    $delete_link = "delete-announcement.php?nid=" . $encryption;
                                    $count++;
                            ?>
                                    <tr>
                                        <td>
                                            <p class=""><?php echo $count ?></p>
                                        </td>
                                        <td>
                                            <div class="product">

                                                <img src="header/<?php echo $row['picture'] ?>" height="150" alt="" />



                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm" max><?php echo $row['header'] ?></p>
                                        </td>
                                        <td>
                                            <p class="text-sm"><?php echo $row['contents'] ?></p>
                                        </td>
                                        <td>
                                            <div class="action justify-content-end">
                                                <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
  <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
</svg></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                                    <li class="dropdown-item">
                                                        <a href="<?php echo $delete_link ?>" class="text-gray">Remove</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="" class="text-gray edit" id=" <?php echo $id ?>" data-id="<?php echo $id ?> " data-bs-toggle="modal" data-bs-target="#editNote">View Announcement </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>


                            <?php
                                }
                            }

                            ?>
                        </tbody>
                    </table>

                    <!-- end of table -->






                    <!-- modal -->

                    <!-- add modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Make announcement</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="col-auto">
                                            <label for="formFile" class="form-label">Picture</label>
                                            <input class="form-control" type="file" id="formFile" name="picture" required>

                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"> Header</label>
                                            <input type="text" class="form-control" placeholder="Header" aria-label="First name" name="header" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Content:</label>
                                            <textarea class="form-control" placeholder="Enter your contents Here" id="message-text" name="content" required></textarea>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Announce!">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>





                    <!-- edit modal -->
                    <div class="modal fade" id="editNote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Announcements</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body notes">

                                </div>
                                <div class=" modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- end container -->
        </section>
        <!-- ========== section end ========== -->

        <!-- ========== footer start =========== -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 order-last order-md-first">
                        <div class="copyright text-center text-md-start">
                            <p class="text-sm">
                                Designed and Developed by

                                Team Agnat

                            </p>
                        </div>
                    </div>
                    <!-- end col-->
                    <div class="col-md-6">
                        <div class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                ">

                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/moment.min.js"></script>
    <script src="../assets/js/jvectormap.min.js"></script>
    <script src="../assets/js/world-merc.js"></script>
    <script src="../assets/js/polyfill.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/jquery-3.6.1.min.js"></script>
    <script src="../assets/sweetalert2/dist/sweetalert2.all.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.2/datatables.min.js"></script>

    <!-- modal -->
    <script>
        $(document).ready(function() {
            $('.edit').click(function() {
                var id = $(this).data('id');

                console.log(id)
                $.ajax({
                    url: 'edit-modal-announce.php',
                    type: 'post',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        $('.notes').html(response);
                        $('#editNote').modal('show');
                    }
                });
            });
        });
    </script>

    <!-- data table -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('table').DataTable();
        });
    </script>

</body>

</html>

<?php
if (isset($_POST['submit'])) {


    $picture_file = $_FILES["picture"]["name"];
    $picture_tmpfile = $_FILES["picture"]["tmp_name"];
    $header = $_POST['header'];
    $content = $_POST['content'];
    $date_created = date('Y-m-d H:i:s');
    $date_updated = date('Y-m-d H:i:s');


    $result = "SELECT count(*) FROM announcement WHERE header=?";
    $stmt = $conn->prepare($result);
    $stmt->bind_param('s', $header);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();
    //if books is already exist
    if ($count > 0) {
        echo "<script>alert('The Announcement is already added');</script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO `announcement`(`picture`, `header`, `contents`, `date_created`, `date_updated`) 
                        VALUES (?,?,?,?,?)");

        if ($stmt) {
            $stmt->bind_param("sssss", $picture_file, $header, $content, $date_created, $date_updated);
            if ($stmt->execute()) {
                if (move_uploaded_file($picture_tmpfile, "header/" .  $picture_file)) {
                    echo "
                        <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Successfuly Announce',
                        })
                        </script>
                        ";
                } else {
                    echo "
                        <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: ' System error ',
                        })
                        </script>
                        ";
                }
            } else {
                echo $conn->error . "<br>";
            }
        }
    }
}
?>
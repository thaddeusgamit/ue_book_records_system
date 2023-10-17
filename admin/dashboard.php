<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Manila');
include('./connection.php');
include('./session.php');
include('./edit-books.php');
$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> UE book records</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />

  <link rel="stylesheet" href="../assets/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link rel="stylesheet" href="../assets/bootstrap-icons-1.10.3/" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.2/datatables.min.css" />


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
          <a href="dashboard.php" data-bs-toggle="collapse" data-bs-target="#ddmenu_1" aria-controls="ddmenu_1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon">
              <svg width="22" height="22" viewBox="0 0 22 22">
                <path d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
              </svg>
            </span>
            <span class="text-active">Home</span>
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
            <span class="text">Announcements</span>
          </a>
        </li>


        <span class="divider">
          <hr />
        </span>
        <!-- <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_4"
              aria-controls="ddmenu_4"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M3.66675 4.58325V16.4999H19.2501V4.58325H3.66675ZM5.50008 14.6666V6.41659H8.25008V14.6666H5.50008ZM10.0834 14.6666V11.4583H12.8334V14.6666H10.0834ZM17.4167 14.6666H14.6667V11.4583H17.4167V14.6666ZM10.0834 9.62492V6.41659H17.4167V9.62492H10.0834Z"
                  />
                </svg>
              </span>
              <span class="text">UI Elements </span>
            </a>
            <ul id="ddmenu_4" class="collapse dropdown-nav">
              <li>
                <a href="alerts.html"> Alerts </a>
              </li>
              <li>
                <a href="buttons.html"> Buttons </a>
              </li>
              <li>
                <a href="cards.html"> Cards </a>
              </li>
              <li>
                <a href="typography.html"> Typography </a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_55"
              aria-controls="ddmenu_55"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.83325 19.25V17.4167H18.3333V19.25H1.83325ZM18.3333 7.33333V4.58333H16.4999V7.33333H18.3333ZM18.3333 2.75C18.8195 2.75 19.2858 2.94315 19.6296 3.28697C19.9734 3.63079 20.1666 4.0971 20.1666 4.58333V7.33333C20.1666 7.81956 19.9734 8.28588 19.6296 8.6297C19.2858 8.97351 18.8195 9.16667 18.3333 9.16667H16.4999V11.9167C16.4999 12.8891 16.1136 13.8218 15.426 14.5094C14.7383 15.197 13.8057 15.5833 12.8333 15.5833H7.33325C6.36079 15.5833 5.42816 15.197 4.74053 14.5094C4.05289 13.8218 3.66659 12.8891 3.66659 11.9167V2.75H18.3333ZM14.6666 4.58333H5.49992V11.9167C5.49992 12.4029 5.69307 12.8692 6.03689 13.213C6.38071 13.5568 6.84702 13.75 7.33325 13.75H12.8333C13.3195 13.75 13.7858 13.5568 14.1296 13.213C14.4734 12.8692 14.6666 12.4029 14.6666 11.9167V4.58333Z"
                  />
                </svg>
              </span>
              <span class="text">Icons</span>
            </a>
            <ul id="ddmenu_55" class="collapse dropdown-nav">
              <li>
                <a href="icons.html"> LineIcons </a>
              </li>
              <li>
                <a href="mdi-icons.html"> MDI Icons </a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_5"
              aria-controls="ddmenu_5"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.75 4.58325H16.5L15.125 6.41659L13.75 4.58325ZM4.58333 1.83325H17.4167C18.4342 1.83325 19.25 2.65825 19.25 3.66659V18.3333C19.25 19.3508 18.4342 20.1666 17.4167 20.1666H4.58333C3.575 20.1666 2.75 19.3508 2.75 18.3333V3.66659C2.75 2.65825 3.575 1.83325 4.58333 1.83325ZM4.58333 3.66659V7.33325H17.4167V3.66659H4.58333ZM4.58333 18.3333H17.4167V9.16659H4.58333V18.3333ZM6.41667 10.9999H15.5833V12.8333H6.41667V10.9999ZM6.41667 14.6666H15.5833V16.4999H6.41667V14.6666Z"
                  />
                </svg>
              </span>
              <span class="text"> Forms </span>
            </a>
            <ul id="ddmenu_5" class="collapse dropdown-nav">
              <li>
                <a href="form-elements.html"> From Elements </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="tables.html">
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M4.58333 3.66675H17.4167C17.9029 3.66675 18.3692 3.8599 18.713 4.20372C19.0568 4.54754 19.25 5.01385 19.25 5.50008V16.5001C19.25 16.9863 19.0568 17.4526 18.713 17.7964C18.3692 18.1403 17.9029 18.3334 17.4167 18.3334H4.58333C4.0971 18.3334 3.63079 18.1403 3.28697 17.7964C2.94315 17.4526 2.75 16.9863 2.75 16.5001V5.50008C2.75 5.01385 2.94315 4.54754 3.28697 4.20372C3.63079 3.8599 4.0971 3.66675 4.58333 3.66675ZM4.58333 7.33341V11.0001H10.0833V7.33341H4.58333ZM11.9167 7.33341V11.0001H17.4167V7.33341H11.9167ZM4.58333 12.8334V16.5001H10.0833V12.8334H4.58333ZM11.9167 12.8334V16.5001H17.4167V12.8334H11.9167Z"
                  />
                </svg>
              </span>
              <span class="text">Tables</span>
            </a>
          </li>
          <span class="divider"><hr /></span>

         
        </ul> -->
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
                  <i class="lni lni-chevron-left me-2"></i> Menu
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
                  <i class="lni lni-chevron-down"></i>
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



        <!-- End Col -->

        <div class="card-style mb-30">
          <div class="
                    title
                    d-flex
                    flex-wrap
                    align-items-center
                    justify-content-between
                  ">
            <div class="left">
              <h6 class="text-medium mb-30">Books History</h6>
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
              $sql = "SELECT * FROM books";
              $run = mysqli_query($conn, $sql);

              if (mysqli_num_rows($run) > 0) {
                $count = 0;
                foreach ($run as $row) {
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
                  $count++;
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
                      <p class="text-sm"><?php echo $row['title'] ?></p>
                    </td>
                    <td>
                      <p class="text-sm" max><?php echo $row['author'] ?></p>
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
                        <span class="status-btn warning-btn">Borrowed</span>
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
                          <i> Re</i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                          <li class="dropdown-item">
                            <a href="<?php echo $delete_link ?>" class="text-gray">Remove</a>
                          </li>
                          <li class="dropdown-item">
                            <a href="" class="text-gray edit" id=" <?php echo $title ?>" data-id="<?php echo $title ?> " data-bs-toggle="modal" data-bs-target="#editNote">Update status</a>
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
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.2/datatables.min.js"></script>

  <!-- modal -->
  <script>
    $(document).ready(function() {
      $('.edit').click(function() {
        var title = $(this).data('id');

        console.log(title)
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

  <!-- data table -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('table').DataTable();
    });
  </script>






</body>

</html>
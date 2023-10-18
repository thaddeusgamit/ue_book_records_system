<?php
include "../admin/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.108.0" />
  <title>UE-LSG Share-A-Book Project</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/" />

  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/css/lineicons.css" />
  <link rel="stylesheet" href="../assets/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="../assets/css/main.css" />
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.2/datatables.min.css" />

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, 0.1);
      border: solid rgba(0, 0, 0, 0.15);
      border-width: 1px 0;
      box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
        inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -0.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

     html {
      scroll-behavior: smooth;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md fixed-top" style="background-color: #6f1ab6">
      <div class="container-fluid">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="../assets/images/pictures/ue-law.png" alt="Bootstrap" width="60" height="60" />
          </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#books">Books</a>
            </li>
              <li class="nav-item">
              <a class="nav-link text-light" href="../admin/login.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../assets/images/pictures/slide1.png"  class="mx-auto d-block" height = "100%" width = "100%" alt="" />
          <div class="container">
            <div class="carousel-caption text-start">
              
            </div>
          </div>
        </div>
        <div class="carousel-item">
           <img src="../assets/images/pictures/slide2.jpg"  class="mx-auto d-block" height = "100%" width = "100%" alt="" />
          <div class="container">
            <div class="carousel-caption">
             
             
            </div>
          </div>
        </div>
         <!-- <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid                     slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
          </svg>
          <div class="container">
            <div class="carousel-caption text-end">
            </div>
          </div> 
        </div>-->
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container text-center">

  


        <!-- ========= card-style-2 start ========= -->
        <div class="row">
          <div class="col-12">
            <div class="title mt-30 mb-30">
              <h2 style="color: #ff0032;">Announcements</h2>
            </div>
          </div>
          <!-- end col -->

          <?php

          $sql = "SELECT picture,header,contents FROM `announcement` LIMIT 3";
          $run = mysqli_query($conn, $sql);

          if (mysqli_num_rows($run) > 0) {
            foreach ($run as $row) {

          ?>

              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="card-style-2 mb-30">
                  <div class="card-image">
                    <a href="#0">
                      <img src="../admin/header/<?php echo $row['picture'] ?>" alt="" />
                    </a>
                  </div>
                  <div class="card-content">
                    <h4><a href="#0"><?php echo $row['header'] ?> </a></h4>
                    <p>
                      <?php echo $row['contents'] ?>
                    </p>
                  </div>
                </div>
              </div>

          <?php
            }
          }
          ?>






        </div>
        <!-- end row -->
        <!-- ========= card-style-2 end ========= -->

        <!-- /.row -->

        <!-- START THE FEATURETTES -->



        <hr class="">

        <div class="row featurette">
          <div class="card-style mb-30">
            <h2 class="mb-10" style="color:#ff0032" id="books">Books</h2>

            <div id="link_wrapper" class="table-wrapper table-responsive">
              <table id="table" class="table table-hover">
                <thead>
                  <tr>
                    <th>Front Cover</th>
                    <th>Back Cover</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Book Borrowed</th>
                    <th>status</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>




            </div>
          </div>

        </div>

        <hr class="featurette-divider" />



        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">
              UE Law Student Government Officers for AY 2022-2023
               <p class="lead">

               Borromeo | Ibay | Rodriguez | Tuyay | Guerrero | Jacalne | Mayo | Agcaoili | Tiu | Magallon | Tadal | Fernandez
             
            </p>
                <br>
             <p class="lead">

              Development | Representation | Inclusivity | Fruition | Transcendence
             
            </p>
             
          </div>
          <div class="col-md-5 order-md-1">
           <img src="../assets/images/pictures/main1.jpg"  class="mx-auto d-block" height = "100%" width = "100%" alt="" />
          </div>
        </div>

        <hr class="featurette-divider" />


 <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">
              UE-LSG Share-A-Book Project
            </h2>
            <p class="lead">
             The UE Law Student Government sends it utmost gratitude to USec. 
             Gerard L. Chan for the book donations for our Share-a-Book Project to add 
             to our student resources to be shared in the UE Law Community. Padayon!
            </p>
          </div>
          <div class="col-md-5">

         <img src="../assets/images/pictures/main2.JPG"  class="mx-auto d-block" height = "100%" width = "100%" alt="" />
         
          </div>
        </div> 
        

        <hr class="featurette-divider" />

        <!-- /END THE FEATURETTES -->
      </div>
      <!-- /.container -->

      <!-- FOOTER -->

      <!-- Footer -->
      <footer class="page-footer font-small blue pt-4" style="color: #ff0032;">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

              <!-- Content -->
              <h5 class="text-uppercase" style="color: #ff0032;">University of The East</h5>
              <p>Tomorrow Begins in the East.</p>
              <br>
             <p>2219 C.M. Recto Avenue, Brgy. 404, Zone 41, Sampaloc, Manila, Philippines</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-4">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

              <!-- Links -->
              <h5 class="text-uppercase">Social Links</h5>

              <ul class="list-unstyled">
                <li>
                  <a href="https://www.facebook.com/uelawstudentgovernment"> <i class="bi bi-facebook"></i> UE Law Student Government</a>
                </li>
                <li>
                  <a href="https://www.youtube.com/@uelawstudentgovernment" style="color: #ff0032;"> <i class="bi bi-youtube"></i> UE Law Student Government </i></a>
                </li>
                <li>
                <p style="color: #3778FB;"> <i class="bi bi-google"></i> uelawstudentgovernment@gmail.com</p>
                </li>

               
              </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            
            

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2023 Copyright:
          <a href="" style="color: #ff0032;"> Team Agnat</a>
        </div>
        <!-- Copyright -->

      </footer>
      <!-- Footer -->



      <!-- <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>
        &copy; 2017–2022 Company, Inc. &middot;
        <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
      </p>
    </footer> -->
  </main>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/jquery-3.6.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.2/datatables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {


      var dataTable = $('table').DataTable({
        "ajax": "data.php", // URL to server-side script that returns JSON data
        "columns": [{
            "data": "front",
            "render": function(data, type, full, meta) {
              return '<img src="../admin/book/' + data + '" width="100" height="100">';
            }

          },
          {
            "data": "back",
            "render": function(data, type, full, meta) {
              return '<img src="../admin/book/' + data + '" width="100" height="100">';
            }
          },

          {
            "data": "title"
          },
          {
            "data": "author"
          },
          {
            "data": "book_borrowed"
          },
          {
            "data": "status",
            render: function(data, type, row) {
              if (row.status == 1) {
                return '    <span class="status-btn success-btn">On Stock</span>';
              }
              if (row.status == 2) {
                return ' <span class="status-btn warning-btn">Borrowed</span>';
              }
              if (row.status == 3) {
                return ' <span class="status-btn close-btn">Missing</span>';
              }
            }
          }
        ],

        lengthMenu: [
          [5, 10, 50, -1],
          [5, 10, 50, 'All'],
        ],


      });
      setInterval(function() {
        dataTable.ajax.reload(null, false); // Reload table data every 5 seconds
      }, 5000);
    });
  </script>








</body>

</html>
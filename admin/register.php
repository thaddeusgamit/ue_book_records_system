<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Manila');
include('./connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/preloader.css">
    <link rel="stylesheet" href="./assets/css/template.css">
    <link rel="stylesheet" href="./assets/sweetalert2/dist/sweetalert2.min.js">
    <title>Register</title>
</head>
<style>
    .bg {
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: -1;
    }

    .blob {
        position: fixed;
        top: -150%;
        transform: rotate(-120deg);
        right: -70%;
        z-index: -2;
    }

    body {
        overflow-x: hidden;
        background: url(./assets/images/pictures/ue-bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .avatar {
        height: 100px;
    }

    .overlay {
        width: 100%;
        height: 100vh;
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
        /* background-color: rgba(153, 0, 0,0.3); */
        background-color: rgba(0, 0, 0, 0.4);
        /* background: rgb(0,0,0);
        background: linear-gradient(90deg, rgba(0,0,0,0.6416316526610644) 0%, rgba(153,0,0,0.5323879551820728) 100%, rgba(121,9,9,1) 100%); */
        z-index: -2;
    }

    .main {
        z-index: 4 !important;
    }

    label {
        font-family: Verdana, Geneva, Tahoma, sans-serif !important;
        font-size: 12px;
    }

    input {
        outline: cadetblue !important;
        border: 2px solid cadetblue;
    }

    input:focus {
        outline: cadetblue;
    }
</style>

<body class="d-none">
    <div class="preload-wrapper">
        <div class="spinner-border text-info" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="main">
        <nav class="navbar bg-body-tertiary ">
            <div class="container border-bottom border-secondary">
                <a class="navbar-brand d-flex flex-row align-items-center">
                    <img src="./assets/images/pictures/ue-logo.jfif" style="height: 100px;" alt="">
                    <span class="ms-3">
                        <p class="p-0 m-0" style="font-weight: 600; font-family:'Times New Roman', Times, serif; color:white">University Of the East</p>
                        <hr class="p-0 m-0">
                        <p class="text-light p-0 m-0" style="font-weight: 550; font-family:Arial, Helvetica, sans-serif;font-size: 14px;">College of law</p>
                    </span>

                </a>
                <span>
                    <form class="d-flex align-items-end" method="POST">
                        <span class="d-flex flex-column">
                            <label for="" class="text-white">Username</label>
                            <input type="text" class="" name="username" maxlength="25" required>
                        </span>
                        <span class="d-flex flex-column ms-2">
                            <label class="text-white">Password</label>
                            <input type="password" class="" name="password" maxlength="50" required>
                        </span>
                        <span class="ms-2">
                            <input type="submit" class="btn btn-sm w-100 btn-primary" style="border-radius: 0;" name="login" value="Log In">
                        </span>
                    </form>
                    <a href="login.php" class="link-light" style="font-size: 13px;">Already have an account ?</a>
                </span>

            </div>
        </nav>
        <main class="content">
            <div class="container-fluid pt-5 ">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-12">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./assets/sweetalert2/dist/sweetalert2.all.js"></script>
    <script>
        $(window).on('load', function() {
            $('body').removeClass('d-none');
            $('.preload-wrapper').fadeOut(1000);
        })
    </script>
</body>

</html>


<?php


if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $date_created = date('Y-m-d H:i:s');
    $date_updated = date('Y-m-d H:i:s');

    $stmt = $conn->prepare("INSERT INTO `admin`(`username`, `password`, `date_time_createad`, `date_time_updated`) 
    VALUES (?,?,?,?)");

    if ($stmt) {
        $stmt->bind_param("ssss", $username, $hashed_password, $date_created, $date_updated);
        $stmt->execute();
        echo "
                        <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Successfuly Register',
                        })
                        </script>
                        ";
        echo "<script>window.location.href='login.php' </script>";
    }
}


ob_end_flush();

?>
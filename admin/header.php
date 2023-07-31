<?php 
session_start();
if (!isset($_SESSION["username"])){
    header("Location:../login.php");
}
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="st.css">
    <link rel="icon" href="images/atse.png" type="image/x-icon">

    <?php include 'connection.php';?>

    <style>
    .nav .nav-link:is(:link, :active, :visited).active {
        background-color: yellow !important;

    }

    .nav .nav-link {
        cursor: pointer;

    }

    .nav .nav-link:hover {
        background-color: skyblue;
        color: white;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">

            <div class="row w-100">
                <h4 class="mb-0 text-white d-flex justify-content-between">
                    Welcome
                    <div>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <div class="dropdown">
                            <?php echo strtoupper($_SESSION['username'])?>
                            <i class="fa-solid fa-user px-3" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu dropdown-menu-end mt-3 shadow " style="z-index:99999;"
                                aria-labelledby="userDropdown">
                                <li class="d-flex"><button class="dropdown-item" type="button">
                                        <i class="fa-solid fa-user mx-2" data-bs-toggle="dropdown"
                                            aria-expanded="false"></i>
                                        <?php echo strtoupper($_SESSION['username'])?></button></li>
                                <hr>
                                <li><button class="dropdown-item" type="button"><i
                                            class="fa-sharp fa-solid fa-gear"></i> Account</button></li>
                                <a href="logout.php" style="text-decoration: none;">
                                    <li>
                                        <button class="dropdown-item" type="button"><i
                                                class="fa-solid fa-right-from-bracket"></i> Log
                                            Out </button>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </h4>
            </div>
        </div>
    </nav>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>



</html>
<?php

// include_once 'connection.php';
session_start();

echo $_POST["user"];
// if (!isset($_SESSION["user"])){
//     header("Location:../student_login.php");
// }

// include_once 'links.php';

echo $_SESSION['f_name'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<style>
.navbar {
    display: flex;
}

.section_a {
    flex: 30px;
}

.section_b {
    flex: 40px;
}

.section_c {
    flex: 40px;
    position: relative;
    float: right;
    right: 0px;
}
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="section_a">
            <a class="navbar-brand" href="#">
                <h3>LOgo</h3>
            </a>
        </div>

        <div class="section_b text-center">

            <h3><i class="fa fa-user" aria-hidden="true"></i> Welcome <?php echo $_SESSION['f_name'];?></h3>
        </div>
        <div class="section_c d-flex justify-content-end">
            <a class="navbar-brand" href="#">
                <button type="button" class="btn bg-primary text-white profile-edit-btn" data-toggle="modal"
                    href="#myModal" id="float">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    Edit Profile</button>
            </a>

            <a class="navbar-brand" href="logout.php">
                <button type="button" class="btn btn-primary"><i class="fa fa-sign-out" aria-hidden="true"></i> Log
                    Out</button>
            </a>

        </div>
    </nav>


    <div class="container">
        <div class="row">
            <form action="editProfile.php" method="post">
                <div class="modal hide" id="myModal"
                    style="width:60%;height:70%;top:10%;left:20%;background-color:white">

                    <div class="modal-header">
                        <h3>Edit Profile</h3>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>


                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="Enter First Name" name="f_name"
                                    value="<?php echo $_SESSION['f_name'];?>">
                            </div>
                            <div class="col">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name" name="l_name"
                                    value="<?php echo $_SESSION['l_name']; ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label>Father's Name</label>
                                <input type="text" class="form-control" placeholder="Enter Father's Name" name="ft_name"
                                    value="<?php echo $_SESSION['ft_name']; ?>">
                            </div>
                            <div class="col">
                                <label>Mother's Name</label>
                                <input type="text" class="form-control" placeholder="Enter Father's Name" name="m_name"
                                    value="<?php echo $_SESSION['m_name']; ?>">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <label>Change Password</label>
                                <input type="text" class="form-control" placeholder="Enter New Password" name="pass"
                                    value="<?php echo $_SESSION['pass']; ?>">
                                <input type="hidden" class="form-control" placeholder="Enter New Password" name="user"
                                    value="<?php echo $_SESSION['user'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Edit Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</body>

</html>




<?php
        include_once 'profile_header.php';
        include_once 'links.php';
        include_once 'connection.php';
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="images/DTSE.png" type="image/x-icon">
    <link rel="stylesheet" href="css/jquery-ui.css">
</head>

<body>

    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-12">
                <table class="table">

                    <thead class="thead-dark">
                        <tr>
                            <th colspan="4">Student Details</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <th>Student Name</th>
                            <td><?php echo $_SESSION["f_name"]; echo $_SESSION["l_name"];?></td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <th>Student Roll No.</th>
                            <td><?php echo $_SESSION["user"];?></td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <th>Father's Name</th>
                            <td><?php echo $_SESSION["ft_name"];?></td>

                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <th>Mother's Name</th>
                            <td><?php echo $_SESSION["m_name"];?></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 justify-content-center text-center">
                <div class="card w-100">
                    <form action="exam.php" method="POST">
                        <div class="card-body">
                            <h5 class="card-title">Your Scholarship Exam. Click Here For Start</h5>
                            <input type="hidden" value="<?php echo $_SESSION['user']?>" name="id">
                            <button type="submit" class="btn btn-primary">START YOUR EXAM</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
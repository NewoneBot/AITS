<?php

include_once 'connection.php';
session_start();

if (!isset($_SESSION["user"])){
    header("Location:../student_login.php");
}

include_once 'links.php';


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
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
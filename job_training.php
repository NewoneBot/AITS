<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTSE | Home</title>
    <link rel="icon" href="images/atse.png" type="image/x-icon">

</head>

<body>
    <?php include 'header.php';?>

    <div class="page_top_img ">
        <img src="images/scl.jpg" class="w-100">
    </div>
    <form action="">



        <center>
            <h2>DTSE JOB TRAINING STUDENT</h2>
        </center>

        <center>
            <h4>Check if you're elligible to get DTSE Job Training</h4>
        </center>
        <section class="log">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <form action="login_validation.php" method="get">
                            <div class="form-group d-flex" id="form-group">


                                <input type="number" class="form-control" name="student_user" id="validationDefault01"
                                    placeholder="Enter Your Registered Phone Number" required>

                                <button type="submit" class="">
                                    <i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                    </div>
                </div>
            </div>



        </section>
    </form>

    <?php include 'footer.php';?>

</body>

</html>
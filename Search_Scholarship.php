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
        <img src="images/sa.png" class="w-100">
    </div>
    <form action="searchDB.php" class="border border-primary m-3 p-3" method="POST">
        <center>
            <h1>SCHOLARSHIP STUDENT</h1>
            <hr class="border border-primary">
        </center>

        <center>
            <h4>Check if you're elligible to get Scholarship</h4>
        </center>
        <section class="log">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group d-flex" id="form-group">
                            <input type="text" class="form-control" name="stu" placeholder="Enter Your Student ID"
                                required>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group d-flex" id="form-group">
                            <input type="text" class="form-control" name="student_phone"
                                placeholder="Enter Your Registered Phone Number" required>
                        </div>
                    </div>
                    <div class="col-12 p-3">
                        <button type="submit" class="py-2 w-100 btn btn-primary text-white bg-primary">Submit
                            <i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </section>
    </form>

    <?php include 'footer.php';?>

</body>

</html>
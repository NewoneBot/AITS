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


    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col"></div>

                <div class="col-lg-5">
                    <div class="all_longer">
                        <img src="images/loginicon.png" alt="" class="d-flex mx-auto">
                        <h3 class="tittle-gdf text-center">Sign in to your account</h3>
                        <form action="admindb.php" method="post">
                            <div class=" form-group">
                                <label>Email Or Username</label>
                                <input type="textbox" class="form-control" name="admin_user" id="validationDefault01"
                                    placeholder="Please Enter your ID" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="admin_pass" id="validationDefault02"
                                    placeholder="Please Enter your Password" required>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="mammber_roll" required
                                    id="exampleFormControlSelect1">
                                    <option>-Selecte roll-</option>
                                    <option value="1">Super Admin</option>
                                    <option value="2">Center head</option>
                                    <option value="3">Consuler</option>
                                    <option value="5">Others</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success submit mb-4">Login</button>
                        </form>
                    </div>

                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>

    <?php include 'footer.php';?>

</body>

</html>
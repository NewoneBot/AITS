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
        <img src="images/cert.png" class="w-100">
    </div>

    <div class="container-fluide p-4">
        <div class="verify  text-center pt-4">
            <span style="color:red; font-weight:700;">VERIFY YOUR CERTIFICATE</span><br><br>

            <p> <span style="color:red; font-weight:700;">Note:-</span>This is the certificate verification page
                where you can check
                the certificate issued by Delhi Talent
                Search Examination (DTSE) or someone has made it illegally. To check it, enter the student’s
                registration number in the search box and if student details come out and match to information of
                student which you have in the form of diploma or certificate then it is real otherwise someone has
                made
                it to cheat.</p>
            <br>
            <div class="col-10  d-flex justify-content-around">


                <div class="form-troup">
                    <label>CERTIFICATE NUMBER</label>
                    <input type="textbox" class="form-control" name="student_user" id="validationDefault01"
                        placeholder="Enter Your Certificate Code Here" required>
                </div>
                <div class="form-troup ">
                    <label>CONTACT NUMBER</label>
                    <input type="password" class="form-control d-flex" name="student_pass" id="validationDefault02"
                        placeholder="Enter Your Registered Phone Number" required>
                </div>
                <div class="form-troup">
                    <button type="submit" class="btn">Submit</button>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div id="red">
                    Certificate Number, Contact Number is incorrect. OR Certificate is not verified with our
                    records.
                </div>
            </div>
        </div>
    </div>

    </div>
    <?php include 'footer.php';?>

</body>

</html>
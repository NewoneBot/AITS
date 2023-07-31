<?php 
// session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship</title>
    <style>
    span {
        color: red;
    }

    #error {
        color: red;
    }
    </style>
</head>

<body>
    <?php include 'header.php';?>
    <section class="vh-120 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Apply For Scholarship</h3>
                            <form action="mobilecon.php" name="myform" onsubmit="return validation()" method="POST">
                                <div class="row">

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline" id="fsname">
                                            <input type="text" id="firstName" class="form-control form-control-lg"
                                                placeholder="First Name" name="fst_name" required>
                                            <label class="form-label" for="firstName">First Name <span>*</span><span
                                                    class="ferror"></span></label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline" id="lsname">
                                            <input type="text" id="firstName" class="form-control form-control-lg"
                                                placeholder="Last Name" name="l_name" required>
                                            <label class="form-label" for="firstName">Last Name
                                                <span>*</span>
                                                <span class="ferror">
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline" id="ftsname">
                                            <input type="text" id="firstName" class="form-control form-control-lg"
                                                placeholder="Father's Name" name="fa_name" required>
                                            <label class="form-label" for="firstName">Father's Name
                                                <span>*</span>
                                                <span class="ferror"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline" id="m_name">
                                            <input type="text" id="firstName" class="form-control form-control-lg"
                                                placeholder="Mother's Name" name="m_name" required>
                                            <label class="form-label" for="firstName">Mother's Name
                                                <span>*</span>
                                                <span class="ferror"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <span class="ferror"></span>
                                            <input type="date" id="firstName" class="form-control form-control-lg"
                                                placeholder="Enter You Name" name="dob" required>
                                            <label class="form-label" for="firstName">D.O.B <span>*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline" id="adhar">
                                            <input type="text" id="firstName" class="form-control form-control-lg"
                                                placeholder="*********4477" name="adhar" required required>
                                            <label class="form-label" for="firstName">Adhar No. <span>*</span>
                                                <span class="ferror"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <span class="ferror"></span>
                                            <label class="form-label form-outline" for="firstName">Gender
                                                <span>*</span></label>
                                            <br>
                                            <input type="radio" id="" class="form-control-lg"
                                                placeholder="Enter You Name" name="gender" value="male" required>
                                            <label class="form-label" for="firstName">Male </label>
                                            <input type="radio" id="firstName" class="form-control-lg"
                                                placeholder="Enter You Name" name="gender" value="female" required>
                                            <label class="form-label" for="firstName">Female </label>
                                            <input type="radio" id="firstName" class="form-control-lg"
                                                placeholder="Enter You Name" name="gender" value="Others" required>
                                            <label class="form-label" for="firstName">Others </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <span class="ferror"></span>
                                            <label class="form-label form-outline" for="firstName">Category
                                                <span>*</span></label>
                                            <br>
                                            <input type="radio" id="" class="form-control-lg" name="cat" value="ST"
                                                required>
                                            <label class="form-label" for="firstName">ST</label>
                                            <input type="radio" id="firstName" class="form-control-lg" name="cat"
                                                value="SC" required>
                                            <label class="form-label" for="firstName">SC</label>
                                            <input type="radio" id="firstName" class="form-control-lg" name="cat"
                                                value="OBC" required>
                                            <label class="form-label" for="firstName">OBC</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <span class="ferror"></span>
                                            <input type="email" id="e" class="form-control form-control-lg"
                                                placeholder="Email" name="mail">
                                            <label class="form-label" for="firstName">Mail ID.</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <span class="ferror"></span>
                                            <input type="number" id="firstName" class="form-control form-control-lg"
                                                placeholder="Contact Number" name="hphone" required>
                                            <label class="form-label" for="firstName">Contact No.</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <span class="ferror"></span>
                                            <input type="text" id="firstName" class="form-control form-control-lg"
                                                placeholder="School Name" name="sname" required>
                                            <label class="form-label" for="firstName">School Name <span>*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <span class="ferror"></span>
                                            <input type="text" id="firstName" class="form-control form-control-lg"
                                                placeholder="School Location" name="slname" required>
                                            <label class="form-label" for="firstName">School Location
                                                <span>*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <span class="ferror"></span>
                                            <input type="text" id="firstName" class="form-control form-control-lg"
                                                placeholder="Address" name="address" required>
                                            <label class="form-label" for="firstName">Address <span>*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <span class="ferror"></span>
                                            <input type="text" id="firstName" class="form-control form-control-lg"
                                                placeholder="City" name="city" required>
                                            <label class="form-label" for="firstName">City <span>*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <span class="ferror"></span>
                                            <input type="text" id="firstName" class="form-control form-control-lg"
                                                placeholder="District" name="district" required>
                                            <label class="form-label" for="firstName">District <span>*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <span class="ferror"></span>
                                            <input type="text" id="firstName" class="form-control form-control-lg"
                                                placeholder="State" name="state" required>
                                            <label class="form-label" for="firstName">State <span>*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4" id="pin">
                                        <div class="form-outline">
                                            <input type="text" id="firstName" class="form-control form-control-lg"
                                                placeholder="Pincode" name="pin" required>
                                            <label class="form-label" for="firstName">Pincode <span>*</span><span
                                                    class="ferror"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input class="btn btn-primary btn-lg w-100" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script type="text/javascript">
function seterror(id, error) {
    element = document.getElementById(id);
    element.getElementsByClassName('ferror')[0].innerHTML = error;
}

function validation() {
    var retval = true;

    var fname = document.forms['myform']["fst_name"].value;
    var lname = document.forms['myform']["l_name"].value;
    var fa_name = document.forms['myform']["fa_name"].value;
    var m_name = document.forms['myform']["m_name"].value;
    var adhar = document.forms['myform']["adhar"].value;
    var pin = document.forms['myform']["pin"].value;
    var letters = /^[A-Za-z]+$/;
    var num = /^[0-9]+$/;

    if (!fname.match(letters)) {
        console.log("enter alpa only");
        seterror("fsname", "please enter the alpha only");
        retval = false;
    }

    if (!lname.match(letters)) {
        console.log("enter alpa only");
        seterror("lsname", "please enter the alpha only");
        retval = false;
    }


    if (!fa_name.match(letters)) {
        console.log("enter alpa only");
        seterror("ftsname", "please enter the alpha only");
        retval = false;
    }

    if (!m_name.match(letters)) {
        console.log("enter alpa only");
        seterror("m_name", "please enter the alpha only");
        retval = false;
    }

    if (adhar.length != 4) {
        console.log("enter alpa only");
        seterror("adhar", "please enter the last 4 digit");
        retval = false;
    }
    if (!adhar.match(num)) {
        console.log("enter alpa only");
        seterror("adhar", "please enter number only");
        retval = false;
    }
    if (pin.length != 6) {
        console.log("enter alpa only");
        seterror("pin", "please enter the last 4 digit");
        retval = false;
    }
    if (!pin.match(num)) {
        console.log("enter alpa only");
        seterror("pin", "please enter number only");
        retval = false;
    }



    return retval;
}
</script>

</html>
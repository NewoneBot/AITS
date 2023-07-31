<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/atse.png" type="image/x-icon">
</head>

<style>
body::-webkit-scrollbar {
    display: none;
}

.hr {
    border: 2px solid blue;
    width: 20%;
}
</style>


<body>
    <?php  
    include 'header.php';     
    ?>
    <div class="container-fluid">
        <div class="row">

            <?php include 'sidemanu.php';?>
            <div class="col-md-10 p-0">

                <div class="p-2">

                    <div class="alert alert-info" role="alert">
                        <strong>Edit successfully</strong>
                        <button type="button" class="btn-close"></button>
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <strong>Delete Successfully</strong>
                        <button type="button" class="btn-close"></button>
                    </div>

                    <?php
                if($_SESSION['is_superuser']==1){
                    ?>
                    <div class="p-3 shadow-sm bg-info bg-opacity-10 border border-info rounded m-0 mb-3" role="alert">
                        Hello Admin You Have All Controls On Login Credentials You Can Read Update And Creat Employe
                        Details...!
                    </div>
                    <?php }?>

                    <!-- <div class="shadow-sm alert alert-warning rounded m-1 mb-3"> -->
                    <div class="p-3 shadow-sm bg-warning bg-opacity-10 border border-warning-subtle rounded  mb-3">

                        <div class="row p-3">
                            <div class="col-md-4">
                                <div class="p-3 shadow-sm bg-opacity-10 border border-warning-subtle rounded d-flex justify-content-center align-items-center h-100"
                                    style="background: white;">
                                    <img src="profile/profile.png" class="img w-50" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="p-2 mb-2 shadow-sm bg-primary border border-primary text-white rounded" ">
                                    <i class=" fa-sharp fa-solid fa-person"></i> Personal Details :-
                                </div>
                                <div class="p-3 shadow-sm  bg-opacity-10 border border-warning-subtle rounded d-flex    "
                                    style="background: white;">
                                    <ul class="w-50">
                                        <li>Name</li>
                                        <li>User Name</li>
                                        <li>Password</li>
                                        <li>Designation</li>
                                        <li>Salery</li>
                                    </ul>
                                    <ul class="w-50 list-unstyled">
                                        <?php 
                                    $sqlw = "SELECT * FROM gdfproject_members WHERE id='{$id}'";
                                    $result = mysqli_query($conn,$sqlw);
                                    $row = mysqli_fetch_assoc($result);
                                     ?>
                                        <li><?php echo $row["member_name"];?></li>
                                        <li><?php echo $row["username"];?></li>
                                        <li><?php echo $row["member_password"];?></li>
                                        <li><?php echo $row["designation"];?></li>
                                        <li>Rs.<?php echo $row["member_salary"];?></li>
                                    </ul>

                                </div>

                            </div>
                        </div>

                        <div class="form-group w-100 p-2" id="form-group">
                            <button class="edit-btn btn w-100 text-white shadow-sm" data-eid="<?php echo $row['id'];?>"
                                style="background:#18cb18;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                    class="fa-solid fa-magnifying-glass p-1"></i>
                                Edit
                            </button>
                        </div>

                    </div>
                    <?php  if($_SESSION['is_superuser']==1){?>
                    <div class="table-responsive" style="z-index:-1;">
                        <table class="table text-center table-striped table-wrapper-scroll-y my-custom-scrollbar">
                            <thead class="thead table-warning sticky-top">
                                <tr>
                                    <th>S.No.</th>
                                    <th>Profile</th>
                                    <th>Branch</th>
                                    <th>User_name</th>
                                    <th>Password</th>
                                    <th>Designation</th>
                                    <th>Salary</th>
                                    <th>Email</th>
                                    <th>Phone_No</th>
                                    <th>Update</th>
                                </tr>
                            </thead>
                            <tbody id="table-data" class="">

                            </tbody>
                        </table>
                    </div>
                    <?php 
                    }
                    ?>




                    <?php  if($_SESSION['is_superuser']==1){?>

                    <div class="alert alert-info my-3" role="alert">
                        <strong>Insert sucessfully</strong>
                        <button type="button" class="btn-close"></button>
                    </div>

                    <div class="alert alert-danger my-3" role="alert">
                        <strong>please Fill the all details</strong>
                        <button type="button" class="btn-close"></button>
                    </div>


                    <div class="p-3 shadow-sm bg-info bg-opacity-10 border border-info-subtle rounded  my-3">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-black "><strong>Insert The New Employ Details
                                        :-</strong></h3>
                                <hr class="hr">
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex flex-wrap">

                                    <div class="w-50 p-2">
                                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                                        <input type="text" class="form-control w-100" id="i_user">
                                    </div>

                                    <div class="w-50 p-2">
                                        <label for="exampleInputEmail1" class="form-label">Password</label>
                                        <input type="text" class="form-control w-100" id="i_pass">
                                    </div>

                                    <div class="w-50 p-2">
                                        <label for="exampleInputEmail1" class="form-label ">Designation</label>
                                        <input type="text" class="form-control w-100" id="i_designation">
                                    </div>

                                    <div class="w-50 p-2">
                                        <label for="exampleInputEmail1" class="form-label">Salary</label>
                                        <input type="number" class="form-control w-100" id="i_salary">
                                    </div>

                                    <div class="w-50 p-2">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control w-100" id="i_email">
                                    </div>

                                    <div class="w-50 p-2">
                                        <label for="exampleInputEmail1" class="form-label">Phone No.</label>
                                        <input type="number" class="form-control w-100" id="i_phone">
                                    </div>

                                    <div class="w-50 p-2">
                                        <label for="exampleInputEmail1" class="form-label">Member Roll ID</label>
                                        <select class="form-control member mb-2" id="roll_id">
                                            <option value="">-Select The Roll Id-</option>
                                            <option value="1">Super Admin</option>
                                            <option value="2">Center Head</option>
                                            <option value="3">Counselor</option>
                                            <option value="4">Trainer(Faculty)</option>
                                            <option value="5">Others User</option>
                                        </select>
                                    </div>

                                    <div class="w-50 p-2">
                                        <label for="exampleInputEmail1" class="form-label">Member Branch Id</label>
                                        <?php 
                        if($_SESSION['is_superuser']==1){
                            $sqlw = "SELECT * FROM `gdfproject_branch` WHERE 1 ";
                        $resulte = mysqli_query($conn,$sqlw) or die("query faild to connet in database");
                            ?>
                                        <select class="form-control member mb-2" name="member" id="insti">
                                            <option value="">-Select Your Branch-</option>
                                            <?php
                                 while($rowe=mysqli_fetch_assoc($resulte))
                                 {

                                ?>
                                            <option value="<?php echo $rowe['id'];?>"><?php echo $rowe['branch_name'];?>
                                            </option>

                                            <?php
                                    };
                                }
                                    ?>
                                        </select>
                                    </div>


                                    <div class="w-100 p-2">
                                        <button class="insert btn w-100 text-white shadow-sm"
                                            style="background:#18cb18;" id="bt"><i class="fa-solid fa-user"></i>
                                            Submit
                                        </button>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                     }
                    ?>


                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>


                                <div class="modal-body" id="display">

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="update btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$('.alert-info').hide();
$('.alert-danger').hide();

$('.btn-close').on("click", function() {
    $('.alert-danger').hide();
    $('.alert-info').hide();
});

function datechange() {
    var from_date = document.getElementById("from").value;
    var to_date = document.getElementById("to").value;
    var institue = document.getElementById("institute").value;
    loadTable(from_date, to_date, institue);
}

function loadTable() {
    $.ajax({
        url: "userdb.php",
        type: "POST",
        data: {
            // date1: date1
            // date2: date2,
            // date3: date3
        },
        success: function(response) {
            $("#table-data").html(response);
        }
    });
}
loadTable();
</script>

<script>
$(document).on("click", ".delete-btn", function() {
    var employID = $(this).data("id");
    $.ajax({
        url: "userdelete.php",
        type: "POST",
        data: {
            id: employID
        },
        success: function(response) {
            $('.alert-danger').show();
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
            loadTable();
        }
    });
});

$(document).on("click", ".edit-btn", function() {

    var employID = $(this).data("eid");
    console.log(employID);
    $.ajax({
        url: "userdisplay.php",
        type: "POST",
        data: {
            id: employID
        },
        success: function(response) {
            $("#display").html(response);

        }
    });
});

$(document).on("click", ".update", function() {
    var id = $("#ids").val();
    var m_name = $("#m-name").val();
    var username = $("#username").val();
    var pass = $("#m-pass").val();
    var desig = $("#m-desig").val();
    var salery = $("#m-salary").val();
    var email = $("#m-email").val();
    var phone = $("#m-phone").val();
    $.ajax({
        url: "serdisplay.php",
        type: "POST",
        data: {
            id: id,
            m_name: m_name,
            username: username,
            pass: pass,
            desig: desig,
            salery: salery,
            email: email,
            phone: phone
        },
        success: function(data) {
            $("#exampleModal").modal('hide');
            $('.alert-info').show();
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
            loadTable();
        }
    });
})

function Clearreset() {
    document.getElementById('i_user').value = "";
    document.getElementById('i_pass').value = "";
    document.getElementById('i_designation').value = "";
    document.getElementById('i_salary').value = "";
    document.getElementById('i_email').value = "";
    document.getElementById('i_phone').value = "";
    document.getElementById('roll_id').value = "";
    document.getElementById('insti').value = "";
}

$(document).on("click", ".insert", function() {

    var i_user = $("#i_user").val();
    var i_pass = $("#i_pass").val();
    var i_designation = $("#i_designation").val();
    var i_salary = $("#i_salary").val();
    var i_email = $("#i_email").val();
    var i_phone = $("#i_phone").val();
    var roll_id = $("#roll_id").val();
    var insti = $("#insti").val();

    if (i_user == '' || i_pass == '' || i_designation == '' || i_salary == '' || i_email == '' || i_phone ==
        '' || roll_id == '' || insti == '') {
        console.log("please filed all values");
        $('.alert-danger').show();
        $('.alert-info').hide();
    } else {
        $.ajax({
            url: "insertmember.php",
            type: "POST",
            data: {
                i_user: i_user,
                i_pass: i_pass,
                i_designation: i_designation,
                i_salary: i_salary,
                i_email: i_email,
                i_phone: i_phone,
                roll_id: roll_id,
                insti: insti
            },
            success: function(data) {
                if (data == 1) {
                    loadTable();
                    Clearreset();
                    $('.alert-danger').hide();
                    $('.alert-info').show();

                } else {
                    $('.alert-danger').show();
                    loadTable();
                }
            }
        })

    }
});
</script>

</html>
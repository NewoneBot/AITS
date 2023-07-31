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


                    <div class="p-3 shadow-sm bg-info bg-opacity-10 border border-info rounded m-0 mb-3" role="alert">
                        Daily visits list as per date
                    </div>


                    <!-- <div class="shadow-sm alert alert-warning rounded m-1 mb-3"> -->
                    <div class="p-3 shadow-sm bg-warning bg-opacity-10 border border-warning-subtle rounded  mb-3">
                        <div class="d-flex ">
                            <div class="form-group w-50 p-2" id="form-group">
                                <label for="">From Date</label>
                                <input class="form-control w-100" type="date" id="from" name="from">
                            </div>
                            <div class="form-group w-50 p-2" id="form-group">
                                <label for="">Too Date</label>
                                <input class="form-control w-100" type="date" id="to" name="to">
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="form-group w-100 p-2" id="form-group">
                                <label for="">Select Your Branch</label>
                                <?php 
                        if($_SESSION['is_superuser']==1){
                            $sqlw = "SELECT * FROM `gdfproject_branch` WHERE 1 ";
                        $resulte = mysqli_query($conn,$sqlw) or die("query faild to connet in database");
                            ?>
                                <select class="form-control member mb-2" name="member" id="institute">
                                    <option value="">-Select Your Branch-</option>
                                    <?php
                                 while($rowe=mysqli_fetch_assoc($resulte))
                                 {

                                ?>
                                    <option value="<?php echo $rowe['id'];?>"><?php echo $rowe['branch_name'];?>
                                    </option>

                                    <?php
                                    };
                                    ?>
                                </select>
                                <?php
                        }
                        else{
                            $branch_id = $_SESSION['member_branch_id'];
                            $sqlw = "SELECT * FROM `gdfproject_branch` WHERE id=$branch_id";
                            $resulte = mysqli_query($conn,$sqlw) or die("query faild to connet in database");
                            ?>
                                <select class="form-control member mb-2" name="member" id="institute">
                                    <!-- <option value="">-Select Your Branch-</option> -->
                                    <?php
                                 while($rowe=mysqli_fetch_assoc($resulte))
                                 {

                                ?>
                                    <option value="<?php echo $rowe['id'];?>" selected>
                                        <?php echo $rowe['branch_name'];?>
                                    </option>

                                    <?php
                                    }
                                    ?>
                                </select>

                                <?php
                            };
                ?>
                            </div>

                        </div>

                        <div class="form-group w-100 p-2" id="form-group">
                            <button class="btn btn-primary w-100" id="bt" onclick="datechange()"><i
                                    class="fa-solid fa-magnifying-glass p-1"></i> Search</button>
                        </div>
                    </div>
                    <div class="table-responsive" style="z-index: -1;">
                        <table class="table table-striped table-wrapper-scroll-y my-custom-scrollbar">
                            <thead class="thead table-primary sticky-top">
                                <tr>
                                    <th>S.No.</th>
                                    <th>name</th>
                                    <th>Father’s name</th>
                                    <th>Contact no</th>
                                    <th>School name</th>
                                    <th>Pin code</th>
                                    <th>Date of visit</th>
                                    <th>Branch code</th>
                                    <th>enquiry member</th>
                                    <th>Close enquiry </th>
                                </tr>
                            </thead>
                            <tbody id="table-data" class="">

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
function datechange() {
    var from_date = document.getElementById("from").value;
    var to_date = document.getElementById("to").value;
    var institue = document.getElementById("institute").value;
    loadTable(from_date, to_date, institue);
}

function loadTable(date1, date2, date3) {
    $.ajax({
        url: "visitD.php",
        type: "POST",
        data: {
            date1: date1,
            date2: date2,
            date3: date3
        },
        success: function(response) {
            $("#table-data").html(response);
        }
    });
}
loadTable();
</script>



</html>
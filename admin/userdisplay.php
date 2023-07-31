<?php

include 'connection.php';
 $id = $_POST['id'];
 $sqlw = "SELECT * FROM gdfproject_members WHERE id='{$id}'";
 $result = mysqli_query($conn,$sqlw);
 $row = mysqli_fetch_assoc($result);
 ?>
<div class="mb-3">
    <label for="recipient-name" class="col-form-label">Name</label>
    <input type="text" class="form-control" id="m-name" value="<?php echo $row['member_name'];?>">
    <label for="recipient-name" class="col-form-label">User ID</label>
    <input type="text" class="form-control" id="username" value="<?php echo $row['username'];?>">
    <label for="recipient-name" class="col-form-label">Password</label>
    <input type="text" class="form-control" id="m-pass" value="<?php echo $row['member_password'];?>">
    <label for="recipient-name" class="col-form-label">Designation</label>
    <input type="text" class="form-control" id="m-desig" value="<?php echo $row['designation'];?>">

    <?php if($id==1){?>
    <label for="recipient-name" class="col-form-label">Salary</label>
    <input type="text" class="form-control" id="m-salary" value="<?php echo $row['member_salary'];?>">
    <?php } ?>
    <input type="hidden" class="form-control" id="m-salary" value="<?php echo $row['member_salary'];?>">

    <label for="recipient-name" class="col-form-label">Email</label>
    <input type="text" class="form-control" id="m-email" value="<?php echo $row['member_email'];?>">
    <label for="recipient-name" class="col-form-label">Phone_No</label>
    <input type="text" class="form-control" id="m-phone" value="<?php echo $row['member_phone'];?>">
    <input type="hidden" class="form-control" id="ids" value="<?php echo $id;?>">
</div>
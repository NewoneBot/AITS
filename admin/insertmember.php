<?php
include 'connection.php';
$user =$_POST['i_user'];
$pass =$_POST['i_pass'];
$deig =$_POST['i_designation'];
$salary =$_POST['i_salary'];
$email =$_POST['i_email'];
$phone =$_POST['i_phone'];
$roll=$_POST['roll_id'];
$insti=$_POST['insti'];

$x="INSERT INTO `gdfproject_members`(`member_name`, `designation`, `username`, `member_email`, `member_phone`, `member_user_id`, `member_roll_id`, `member_salary`,`member_branch_id`, `member_password`) VALUES ('{$user}','{$deig}','{$user}','{$email}','{$phone}','$user',
'{$roll}','{$salary}','{$insti}','{$pass}')";
if(mysqli_query($conn,$x)){
    echo 1;
}else{
    echo 0;
}

?>
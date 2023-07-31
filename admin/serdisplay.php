<?php 
include 'connection.php';
$id=$_POST['id'];
echo $id;
$m_name=$_POST['m_name'];
echo $m_name;
$user=$_POST['username'];
echo $user;
$pass=$_POST['pass'];
echo $pass;
$desig=$_POST['desig'];
echo $desig;
$salary=$_POST['salery'];
echo $salary;
$email=$_POST['email'];
echo $email;
$phone=$_POST['phone'];
echo $phone;

$sql ="UPDATE `gdfproject_members` SET member_name='{$m_name}',designation='{$desig}',username='{$user}',member_email='{$email}',member_phone='{$phone}',member_salary='{$salary}',member_password='{$pass}'WHERE id='{$id}'";

mysqli_query($conn, $sql);

?>
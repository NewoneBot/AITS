<?php
include 'admin/connection.php';
session_start();
$user = $_POST["admin_user"];  
$pass = $_POST["admin_pass"];
$roll = $_POST["mammber_roll"];
    $sql = "select * from gdfproject_members where username='$user' and member_password='$pass' and member_roll_id='$roll'";
    $result = mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result)>0)
    {
        if($row=mysqli_fetch_assoc($result))
        { 
            $_SESSION['member_branch_id']=$row['member_branch_id'];
            $_SESSION['username']=$row['username'];
            $_SESSION['mumber_user_id']=$row['mumber_user_id'];
            $_SESSION['id']=$row['id'];
            $_SESSION['is_superuser']=$row['is_superuser'];
            header("Location:admin/user.php");
        } 
      }
    else {  echo "<script> alert('Username or Password Not Valid'); window.location='login.php';</script>";
}

mysqli_close($conn);
?>
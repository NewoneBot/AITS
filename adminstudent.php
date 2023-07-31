<?php
include 'connection.php';
session_start();
$user = $_POST["admin_user"];  
$pass = $_POST["admin_pass"];

    $sql = "SELECT * FROM `aits_student_login` WHERE user='$user' and pass='$pass'";
    $result = mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result)>0)
    {
        if($row=mysqli_fetch_assoc($result))
        { 
            $_SESSION["user"]=$row['user'];
            $_SESSION["pass"]=$row['pass'];
            $_SESSION['f_name']=$row['f_name'];
            $_SESSION['ft_name']=$row['ft_name'];
            $_SESSION['m_name']=$row['m_name'];
            $_SESSION['l_name']=$row['l_name'];
            header("Location:student_exam/admin.php");
        } 
      }
    else {  echo "<script> alert('Username or Password Not Valid'); window.location='login.php';</script>";
}

mysqli_close($conn);
?>
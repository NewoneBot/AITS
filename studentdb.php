<?php
session_start();
include_once 'connection.php';

$user = $_POST["admin_user"];  
$pass = $_POST["admin_pass"];
    
    $sql = "select * from aits_student_login where user='$user' and pass='$pass'";
    $result = mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result)>0)
    {
        if($row=mysqli_fetch_assoc($result))
        { 
            $_SESSION["f_name"]=$row["f_name"];
            $_SESSION["user"]=$row["user"];
            $_SESSION["pass"]=$row["pass"];
            $_SESSION["l_name"]=$row["l_name"];
            $_SESSION["ft_name"]=$row["ft_name"];
            $_SESSION["m_name"]=$row["m_name"];
            $_SESSION["date"]=$row["date"];
            $_SESSION["adhar"]=$row["adhar"];
            $_SESSION["gender"]=$row["gender"];
            $_SESSION["category"]=$row["category"];
            $_SESSION["mail"]=$row["mail"];
            $_SESSION["phn"]=$row["phn"];
            $_SESSION["s_name"]=$row["s_name"];
            $_SESSION["s_loc"]=$row["s_loc"];
            $_SESSION["s_addres"]=$row["s_addres"];
            $_SESSION["city"]=$row["city"];
            $_SESSION["disrict"]=$row["disrict"];
            $_SESSION["state"]=$row["state"];
            $_SESSION["pin"]=$row["pin"];

            header("Location:admin/admin.php");
        } 
      }
    else {  echo "<script> alert('Username or Password Not Valid'); window.location='login.php';</script>";
}

mysqli_close($conn);
?>
<?php
session_start();

include 'connection.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
} 

else {
    $user = $_POST["user"];    
    $f_name = $_POST["f_name"];  
    $l_name = $_POST["l_name"];  
    $ft_name = $_POST["ft_name"];
    $m_name = $_POST["m_name"];
    $pass = $_POST["pass"];

    $sql = "UPDATE `aits_student_login` SET `pass`='$pass',`f_name`='$f_name',`l_name`='$l_name',`ft_name`='$ft_name',`m_name`='$m_name' WHERE `user`='$user'";
    if(mysqli_query($conn,$sql))
    {
      ?>

<script>
alert("Profile Edit Successfully");
window.location = "logout.php";
</script>
<?php   
    }
    else
    {
        ?>
<script>
alert("Problem In Updation! Contect in Branch");
window.location = "student-login.php";
</script>
<?php
    }
    
}

?>
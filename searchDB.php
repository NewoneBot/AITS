<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulation</title>
    <link rel="icon" href="images/atse.png" type="image/x-icon">

</head>
<style>
#trap {
    background-color: #ffffff;
    font-weight: 500;
    font-size: 22px;
    width: 100%;
    margin-left: 10%;

}

#trap label {
    width: 100%;
    /* background-color: #ffffff; */
    /* font-weight: 700; */


}

#trap p {
    width: 100%;
    /* background-color: #ffffff; */
    /* font-weight: 700; */

}
</style>

<body>
    <?php include 'header.php';?>
    <video src="images/cong.mp4" autoplay muted loop class="video w-100"></video>

    <div class="container-fluide p-4">

        <?php
include 'admin/connection.php';

$phone=$_POST['student_phone']; 
$stu=$_POST['stu']; 


$sql = "SELECT * FROM atse_student_session where student_code='$stu' && mobile='$phone'";

if ($res = mysqli_query($conn, $sql)) {
	if (mysqli_num_rows($res) > 0) {
		while ($row = mysqli_fetch_array($res)) {
            $name=$row['student_name'];
            $father=$row['father_name'];
            $mother=$row['mother_name'];
            $school=$row['school'];
            $phone=$row['mobile'];
            $pin=$row['pincode'];
            $exam=$row['exam_date'];
		}
	}
	else {
        echo "<script>
        alert('please enter the right student code and schoolar shuip number');
  window.location='Search_Scholarship.php';
  </script>";
	}
}
else {
}
mysqli_close($conn);
?>


        <h1 class="d-flex justify-content-center text-uppercase"><?php echo $name?></h1>
        <span class="d-flex justify-content-center">You've earned a Scholarship</span><br>
        <h2>Welcome To Delhi Talent Search Exam(DTSE)</h2>
        <p class=" pt-2 pl-5">Dear <b class="text-uppercase"><?php echo $name?></b> congratulation! You Are Selected
            for
            diploma/certificate
            training Under
            DTSE
            (Delhi Talent Search Examination) Scholarship Program provided by DTSE SKILLS Centers with 50%
            Scholarship Out Of 4 Lakhs Candidate. Kindly contact for admission your nearest DTSE Skills GOVT. Registered
            Center
            . we wish you all the best for your great future for any query contact on
            9667389159.</p>

        <marquee class="mx-1 py-3" behavior="" direction="">
            Some seat are available only afternoon batches under scholarship scheme hurry up take your
            admission for training program. SMS for seat confirmation 9891768667
        </marquee>

        <div class="container p-2 ">
            <div class="d-flex" id="trap">
                <label class="">Name</label>
                <p><?php echo $name ?></p>
            </div>
            <div class="d-flex" id="trap">
                <label>Father's Name</label>
                <p><?php echo $father?></p>
            </div>
            <div class="d-flex" id="trap">
                <label>SCHOOL / UNIVERSITY</label>
                <p><?php echo $school ?></p>
            </div>
            <div class="d-flex" id="trap">
                <label>CONTACT NUMBER</label>
                <p><?php echo $phone ?></p>
            </div>
            <div class="d-flex" id="trap">
                <label>exam date</label>
                <p><?php echo $exam ?></p>
            </div>
        </div>
    </div>

    <?php include 'footer.php';?>

</body>

</html>
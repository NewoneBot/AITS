<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php
			include_once 'connection.php';
		
		
		$first_name = $_REQUEST['firstname'];
		$last_name = $_REQUEST['lastname'];
		$dob = $_REQUEST['dob'];
		$father_name = $_REQUEST['fathername'];
		$mother_name = $_REQUEST['mothername'];
		$gender = $_REQUEST['gender'];
		$mobile = $_REQUEST['mobile'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		$adhar = $_REQUEST['adhar'];
		$occupation = $_REQUEST['occupation'];
		$cate = $_REQUEST['cate'];
		$address = $_REQUEST['address'];
		//this is eduction details

		//10th class
		$school = $_REQUEST['school'];
		$exam_board = $_REQUEST['exam_board'];
		$total_marks = $_REQUEST['total_marks'];
		$percentage = $_REQUEST['percentage'];
		$year = $_REQUEST['year'];

		//12 class
		$twelfth_institution=$_REQUEST['twelfth_institution'];
		$twelfth_board=$_REQUEST['twelfth_board'];
		$twelfth_marks=$_REQUEST['twelfth_marks'];
		$twelfth_percentage=$_REQUEST['twelfth_percentage'];
		$twelfth_year=$_REQUEST['twelfth_year'];
		// gradution 

		$grad_institution=$_REQUEST['grad_institution'];
		$grad_board=$_REQUEST['grad_board'];
		$grad_marks=$_REQUEST['grad_marks'];
		$gard_percentage=$_REQUEST['gard_percentage'];
		$grad_year=$_REQUEST['grad_year'];

		//post graduation

		$postgrad_institution=$_REQUEST['postgrad_institution'];
		$postgrad_board=$_REQUEST['postgrad_board'];
		$postgrad_marks=$_REQUEST['postgrad_marks'];
		$postgrad_percentage=$_REQUEST['postgrad_percentage'];
		$postgrad_year=$_REQUEST['postgrad_year'];

		$sql = "INSERT INTO `home_appliedscholar`(`firstname`, `lastname`, `dob`, `gender`, `mobile`, `phone`, `email`, `adhar`, `father_name`, `occupation`, `mother_name`, `category`, `address`, `tenth_institution`, `tenth_board`, `tenth_marks`, `tenth_percentage`, `tenth_year`, `twelfth_institution`, `twelfth_board`, `twelfth_marks`, `twelfth_percentage`, `twelfth_year`, `grad_institution`, `grad_board`, `grad_marks`, `gard_percentage`, `grad_year`, `postgrad_institution`, `postgrad_board`, `postgrad_marks`, `postgrad_percentage`, `postgrad_year`) VALUES ('$first_name','$last_name','$dob','$gender','$mobile','$phone','$email','$adhar','$father_name','$occupation','$mother_name','$cate','$address','$school','$exam_board','$total_marks','$percentage','$year','$twelfth_institution','$twelfth_board','$twelfth_marks','$twelfth_percentage','$twelfth_year','$grad_institution','$grad_board','$grad_marks','$gard_percentage','$grad_year','$postgrad_institution','$postgrad_board','$postgrad_marks','$postgrad_percentage','$postgrad_year')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			// echo nl2br("\n$first_name\n $last_name\n"
			// 	. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
    </center>
</body>

</html>
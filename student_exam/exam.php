<?php 
session_Start();
include "links.php"; 
include 'connection.php';

$eid = $_SESSION['exam_id'] = $exam_id = $_POST['id'];; 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="text-center bg-black text-white p-3 w-100">
        <h3>Dear Student your exam is start now</h3>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-3 p-4" id="table-data">


            </div>
        </div>
    </div>


</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    function loadTable(page){
      $.ajax({
        url: "examdb.php",
        type: "POST",
        data: {page_no :page},
        success: function(data) {
          $("#table-data").html(data);
        }
      });
    }
    loadTable();

    //Pagination Code
    $(document).on("click","#pagination button",function(e) {
      e.preventDefault();
      var page_id = $(this).attr("id");
      
      loadTable(page_id);
    })

    $(document).on("click",".all",function(e) {
      e.preventDefault();
      var page_id = $(this).attr("id");
      
      loadTable(page_id);
    })


    
  });
</script>


</html>
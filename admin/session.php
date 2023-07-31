<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/atse.png" type="image/x-icon">
</head>

<style>
body::-webkit-scrollbar {
    display: none;
}
</style>


<body>
    <?php  
    include 'header.php';     
    ?>



    <div class="container-fluid">
        <div class="row">
            <?php 
include 'sidemanu.php';
?>

            <div class="col-md-10 p-0">
                <div class="p-2">

                </div>
            </div>
        </div>
    </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- <script>
$(document).ready(function() {
    $('#bt').click(function() {
        var name = $('#name').val();
        var pname = $('#pname').val();
        var fname = $('#fname').val();
        $.ajax({
            url: "fetchs.php",
            method: "POST",
            data: {
                name: name,
                pname: pname,
                fname: fname
            },
            success: function(data) {
                $("#show").html(data);
            }
        });

    });
});
</script> -->


</html>
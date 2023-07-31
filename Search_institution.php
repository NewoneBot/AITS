<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTSE | Home</title>
    <link rel="icon" href="images/atse.png" type="image/x-icon">
</head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>


<body>
    <?php include 'header.php';?>
    <div class="container-fluide p-4">
        <div class="border border-primary text-center p-3">
            <center>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <h3>Branch code OR Search Institute </h3>
                        <div class="form-group" id="form-group">
                            <input class="form-control" type="text" id="saif" placeholder="Search...">
                        </div>
                    </div>
                </div>
                <div class="container" id="show"></div>
            </center>
        </div>
    </div>
    <br>
    <?php include 'footer.php';?>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#saif').keyup(function() {
        var input = $(this).val();
        if (input != "") {
            $.ajax({
                url: "livesearch.php",
                method: "POST",
                data: {
                    input: input
                },
                success: function(data) {
                    $("#show").html(data);
                    $("#show").css("display", "block");
                }
            });
        } else {
            $("#show").css("display", "none");
        }
    });
});
</script>

</html>
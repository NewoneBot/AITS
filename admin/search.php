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
                    <div class="alert alert-primary m-0" role="alert">
                        Search and update the visited form
                    </div>
                    <div class="p-3 shadow-sm bg-warning bg-opacity-10 border border-warning-subtle rounded  my-3">
                        <div class="d-flex">
                            <div class="form-group w-50 p-2" id="form-group">
                                <label for="">Name</label>
                                <input class="form-control w-100" type="text" name="name" id="name" autocomplete="off"
                                    placeholder="Search...">
                            </div>

                            <div class="form-group w-50 p-2" id="form-group">
                                <label for="">Father's name</label>
                                <input class="form-control w-100" type="text" name="fname" id="fname" autocomplete="off"
                                    placeholder="Search...">
                            </div>
                        </div>

                        <div class="d-flex">

                            <div class="form-group w-100 p-2" id="form-group">
                                <label for="">School name</label>
                                <input class="form-control w-100" type="text" name="name" id="name" autocomplete="off"
                                    placeholder="Search...">
                            </div>


                            <div class="form-group w-100 p-2" id="form-group">
                                <label for="">Phone no.</label>
                                <input class="form-control w-100" type="text" name="name" id="pname" autocomplete="off"
                                    placeholder="Search...">
                            </div>
                        </div>

                        <div class="form-group w-100 p-2" id="form-group">
                            <button class="btn btn-primary w-100" id="bt">Search</button>
                        </div>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-striped table-wrapper-scroll-y my-custom-scrollbar">
                            <thead class="thead table-primary sticky-top">
                                <tr>
                                    <th scope="col">S.no.</th>
                                    <th scope="col">Student code</th>
                                    <th scope="col">Student name</th>
                                    <th scope="col">Father's name</th>
                                    <th scope="col">Mother's name</th>
                                    <th scope="col">School name</th>
                                    <th scope="col">St. pin</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Exame Date</th>
                                    <th scope="col">Visited</th>
                                    <th scope="col">Visited with</th>
                                    <th scope="col">Certificate no</th>
                                    <th scope="col">Member Name</th>
                                    <th scope="col">Form id</th>
                                    <th scope="col">Update</th>
                                </tr>
                            </thead>
                            <tbody id="show" class="">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#bt').click(function() {
        var name = $('#name').val();
        var pname = $('#pname').val();
        var fname = $('#fname').val();
        if (name == "" && pname == "" && fname == "") {
            alert("please enter the value in filed");
        } else {
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
        }
    });
});
</script>


</html>
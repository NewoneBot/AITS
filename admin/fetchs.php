<?php
include 'connection.php';
if(isset($_POST['name']))
{
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $pname=$_POST['pname'];
    if($name){
        $query="SELECT * FROM `atse_student_session` WHERE student_name LIKE '{$name}%' ORDER BY student_name";
    }
    elseif($fname){
        $query="SELECT * FROM `atse_student_session` WHERE father_name LIKE '{$fname}%' ORDER BY student_name";
    }
    elseif($pname){
        $query="SELECT * FROM `atse_student_session` WHERE mobile LIKE '{$pname}%' ORDER BY student_name";
    }       

    $result= mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){?>
<?php
        $i=1;
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $student_name=$row['student_name'];
            $student_code=$row['student_code'];
            $father_name=$row['father_name'];
            $mother_name=$row['mother_name'];
            $school=$row['school'];
            $exam_date=$row['exam_date'];
            $visited=$row['visited'];
            $visit_date=$row['visit_date'];
            $person_visited=$row['person_visited'];
            $mobile=$row['mobile'];
            $certificate=$row['certificate'];
            $pincode=$row['pincode'];
            $transfer_member_id=$row['transfer_member_id'];
            $form_id=$row['form_id'];
            ?>
<tr>
    <th scope="row"><?php echo $i++ ?></th>
    <th><?php echo $student_code ?></th>
    <td><?php echo $student_name?></td>
    <td><?php echo $father_name?></td>
    <td><?php echo $mother_name?></td>
    <td>
        <?php $arr = str_split($school);
        for($j = 0; $j < 30; $j++) {
            print($arr[$j]);
        }
        ?>
    </td>
    <td><?php echo $pincode?></td>
    <td><?php echo $mobile?></td>
    <td><?php echo $exam_date?></td>

    <td>
        <?php 
        if($visited==0){
        ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input check" type="checkbox" id="visit" value="1" name="check">
        </div>
        <?php
        }
        else{
            echo 'visited';
        }
        ?>
    </td>


    <td class="">
        <?php 
        if($visited==0){
        ?>
        <div class="form-group">
            <select class="form-control vwith" name="vwith">
                <option>-Selecte roll-</option>
                <option value="self">self</option>
                <option value="Father">Father</option>
                <option value="Mother">Mother</option>
                <option value="Others">Others</option>
            </select>
        </div>
        <?php
        }
        else{
            echo $person_visited;
        }
        ?>
    </td>


    <td class="get">
        <?php 
        if($visited==0){
        ?>
        <input class="form-control cert" type="text" value="" name="cert">
        <?php
        }
        else{
            echo $certificate;
        }
        ?>
    </td>

    <td class="get">
        <?php 
        if($visited==0){
        ?>
        <div class="form-group">
            <?php
        $sqlw = "SELECT * FROM gdfproject_members where member_roll_id!=4";
$resulte = mysqli_query($conn,$sqlw) or die("query faild to connet in database");
?>
            <select class="form-control member mb-2" name="member">
                <option>-Select Your Course-</option>
                <?php
     while($rowe=mysqli_fetch_assoc($resulte))
{
    ?>
                <option value="<?php echo $rowe['id'];?>"><?php echo $rowe['member_name'];?>
                </option>
                <?php
};
?>
            </select>
        </div>
        <?php
        }
        else{
            echo $transfer_member_id;
        }
        ?>
    </td>



    <td class="get">
        <?php 
        if($visited==0){
        ?>
        <input class="form-control form_id" type="text" name="form_id">
        <?php
        }
        else{
            echo $form_id;
        }
        ?>
    </td>
    <td><?php
        if($visited==0){
        ?>
        <button onclick="reply(this.id)" id="<?php echo $student_code?>" type="submit"
            class="btn btne btn-primary text-white" id="">
            update
        </button>
        <?php
        }
        else{
            echo "updated";
        }
?>
    </td>

</tr>



<?php

}
}
else{
    echo "noo date found";
}
}

?>

<script>
function reply(clicked_id) {
    var visit = $('tr').find('.check').val();
    var vwith = $('tr').find('.vwith').val();
    var cert = $('.cert').val();
    var member = $('.member').val();
    var form_id = $('.form_id').val();
    $.ajax({
        url: "updaterecord.php",
        method: "POST",
        data: {
            visit: visit,
            vwith: vwith,
            cert: cert,
            member: member,
            clicked_id: clicked_id,
            form_id: form_id
        },
        success: function(data) {
            $("#show").html(data);
        }
    });

}
</script>
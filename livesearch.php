<?php
include 'admin/connection.php';
if(isset($_POST['input'])){
    $input=$_POST['input'];
    $query="SELECT * FROM `search_ins` WHERE ins_name LIKE '{$input}%' OR b_code LIKE '{$input}%'";
    $result= mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        ?>
<table class="table  table-striped">
    <div class="selection">
        <thead class="thead-dark">
            <tr>
                <th>Branch Code</th>
                <th>Institute Name</th>
                <th>address</th>
                <th>Phone No</th>
                <th>valid_upto</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php
        while($row=mysqli_fetch_assoc($result)){
            $b_code=$row['b_code'];
            $ins_name=$row['ins_name'];
            $address=$row['address'];
            $phone=$row['phone'];
            $valid_upto=$row['valid_upto'];
            $email=$row['email'];
            ?>
            <tr>
                <td><?php echo $b_code;?></td>
                <td><?php echo $ins_name;?></td>
                <td><?php echo $address;?></td>
                <td><?php echo $phone;?></td>
                <td><?php echo $valid_upto;?></td>
                <td><?php echo $email;?></td>
            </tr>
            <?php
}?>

        </tbody>
    </div>
</table>
<?php

}

else{?>

<center>
    <h3 style="color:red; text-transform: uppercase; position:absoulte;">Sorry...</h3>
</center>
<center>
    <h3 style="color:blue; text-transform: uppercase;  ">this organization not listed with us for scholarship scheme
    </h3>
</center>
<?php
}
}
?>
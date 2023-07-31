<?php
session_start();
include_once 'connection.php';

if(isset($_POST['date1']) && isset($_POST['date2']) && isset($_POST['date3'])){
    // $min = $_POST['date1'];
    // $max = $_POST['date2'];
    // $ins = $_POST['date3'];
    // $sql="SELECT * FROM gdfproject_members WHERE 1";
    // if($min!="" && $max!=""){
    // $sql .=" AND visit_date BETWEEN '{$min}' AND '{$max}'";
    // }
    // if($ins!=""){
    // $sql .=" AND branch_id ='{$ins}' ORDER BY student_name";
    // }
 }
else{
    $sql = "SELECT * FROM gdfproject_members WHERE 1";
    // $sql = "SELECT * FROM gdfproject_members g LEFT JOIN gdfproject_branch b ON g.member_branch_id=b.id WHERE 1";
}
    $i=0;
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
      {
          
          ?>



<tr>
    <td class="justify-content-center align-middle p-3"><?php echo ++$i;?></td>

    <td class="justify-content-center align-middle p-1"><img src="profile/profile.png" class="img-thumbnail w-50"
            alt="">
    </td>

    <td class="align-middle p-1"><?php echo $row["member_name"];?></td>
    <td class="align-middle p-1"><?php echo $row["username"];?></td>
    <td class="align-middle p-1"><?php echo $row["member_password"];?></td>
    <td class="align-middle p-1"><?php echo $row["designation"];?></td>
    <td class="align-middle p-1"><?php echo $row["member_salary"];?></td>
    <td class="align-middle p-1"><?php echo $row["member_email"];?></td>
    <td class="align-middle p-1"><?php echo $row["member_phone"];?></td>
    <td class="p-2">
        <button type="button" class="edit-btn btn btn-success m-2" data-eid="<?php echo $row['id'];?>"
            data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>
        <button type="button" class="delete-btn btn btn-danger" data-id="<?php echo $row['id'];?>"><i
                class="fa-solid fa-trash"></i></button>
    </td>
</tr>



<?php
      }
    }  
?>
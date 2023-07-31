<?php

  include 'connection.php';
  $limit_per_page = 1;

  $page = "";

$output="";

  if(isset($_POST["page_no"])){
    $page = $_POST["page_no"];
  }else{
    $page = 1;
  }

  $offset = ($page - 1) * $limit_per_page;

  $sql_total = "SELECT * FROM exam_question";
  $records = mysqli_query($conn,$sql_total) or die("Query Unsuccessful.");
  $total_record = mysqli_num_rows($records);
  $total_pages = ceil($total_record/$limit_per_page);

  $output .='<div id="pagination">';
  for($i=1;$i<= $total_pages;$i++){
    $class_name = "";
    if($i == $page){
      $class_name = "active";
    }
    $output .= "<button class='{$class_name} m-1 btn bg-success text-white' id='{$i}' href=''>{$i}</button>";
  }

 
  $output .='</div>';

  echo $output;


  
  $sql = "SELECT * FROM exam_question LIMIT {$offset},{$limit_per_page}";
  $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
  $output= "";
  

  if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)) {
        $output .= "<div class='card m-3'>
        <div class='card-header bg-black text-white'>
        {$row["s_no"]} Q .  {$row["question"]}
        </div>
        <form action='#' method='post'>
        <div class='card-body'>
            <div class='container'>
                <div class='row'>
    
                    <div class='input-group p-3'>
                        <div class='input-group-text w-100 p-3'>
                            <input type='radio' class='mr-3' aria-label='Radio button for following text input'
                                name='{$row["s_no"]}' value='a'>
                            A 
                            <span class='mx-3'>{$row["o1"]}</span>
                        </div>
                    </div>
    
                    <div class='input-group p-3'>
                        <div class='input-group-text w-100 p-3'>
                            <input type='radio' class='mr-3' aria-label='Radio button for following text input'
                                name='{$row["s_no"]}' value='b'>
                            B <span class='mx-3'>{$row["o2"]}</span>
                        </div>
                    </div>
    
                    <div class='input-group p-3'>
                        <div class='input-group-text w-100 p-3'>
                            <input type='radio' class='mr-3' aria-label='Radio button for following text input'
                                name='{$row["s_no"]}' value='c'>
                            C <span class='mx-3'>{$row["o3"]}</span>
                        </div>
                    </div>
    
                    <div class='input-group p-3'>
                        <div class='input-group-text w-100 p-3'>
                            <input type='radio' class='mr-3' aria-label='Radio button for following text input'
                                name='{$row["s_no"]}' value='d'>
                            D <span class='mx-3'>{$row["o4"]}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    </form>";?>
<?php
      }
      $output.'<div class="d-flex justify-content-between w-100" style="background-color:red; width:100%;">';
      if($page>1){
        $pagination= $page-1; 
        $output.="<button class='btn all  bg-primary text-white  page-item' id='{$pagination}'><span class=''>previous</span></button>"; 
      }
      if($page<$total_pages){
        $page++; 
        $output.="<button class='btn float-right all bg-primary text-white  page-item' id='{$page}'><span class=''>next</span></button>";
      }
      $output.'</div>';

     echo $output;
              
  }else{
    echo "<h2>No Record Found.</h2>";
  }
?>
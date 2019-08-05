<?php
  require "init.php";

    $slr_name =$_POST["slr_name"];
  //$slr_name="soumo";
    //$book_name =$_POST["book_name"];
  $sql="SELECT slr_id,slr_name,book_name,image,atr_name,price FROM sell WHERE slr_name='$slr_name'";


  $res=mysqli_query($con,$sql);
  if($res)
  {
    while ($row=mysqli_fetch_array($res)) {
      $flag[]=$row;
    }
    print(json_encode($flag));
  }

  mysqli_close($con);


 ?>

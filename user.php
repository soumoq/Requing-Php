
 <?php
 require "init.php";

$name=$_POST["user"];
$pass=$_POST["pass"];

 $sql="select name,user_name,phone from user_info1 where name like '$name' and password like '$pass' ";
  $stmt = $con->prepare($sql);
  $stmt->execute();
  $stmt->bind_result($name, $user_name, $phone);
  $products = array();
  while($stmt->fetch()){
    $temp = array();
    $temp['name'] = $name;
    $temp['user_name'] = $user_name;
    $temp['phone'] = $phone;
    array_push($products, $temp);
  }

  if(mysqli_query($con,$sql))
  {
    echo json_encode(array('name'=>$name,'user_name'=>$user_name,'phone'=>$phone));
    //echo json_encode(array('name'=>$user_name));
  }
  else
   {
    echo json_encode(array('response'=>'Image upload faled'));
  }


   ?>

<?php
// include database connection
include "init.php";

// select the image
$query = "SELECT image FROM `sell` WHERE slr_id=27 ";
$stmt = $con->prepare( $query );

// bind the id of the image you want to select
//$stmt->bindParam(1, $_GET['id']);
$stmt->execute();
<img src=$stmt alt="">

// to verify if a record is found
//$num = $stmt->rowCount();

//if( $num ){
    // if found
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // specify header with content type,
    // you can do header("Content-type: image/jpg"); for jpg,
    // header("Content-type: image/gif"); for gif, etc.
    header("Content-type: image/png");

    //display the image data
    print $row['data'];
    exit;

?>

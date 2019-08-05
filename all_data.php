<?php
  require "init.php";
  $stmt = $con->prepare("SELECT slr_name, book_name,image,price FROM sell");

	//executing the query
	$stmt->execute();

	//binding results to the query
	$stmt->bind_result($slr_name, $book_name, $image, $price);

	$products = array();

	//traversing through all the result
	while($stmt->fetch()){
		$temp = array();
		$temp['slr_name'] = $slr_name;
		$temp['book_name'] = $book_name;
		$temp['image'] = $image;
		$temp['price'] = $price;
		array_push($products, $temp);
	}

	//displaying the result in json format
	echo json_encode($products);
 ?>

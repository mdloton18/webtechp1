<?php  
require_once '../Model/model.php';


if (isset($_POST['createProduct'])) {
	$data['Name'] = $_POST['Name'];
	$data['Costing_Value'] = $_POST['Costing_Value'];
	$data['Sell_Price'] = $_POST['Sell_Price'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../Uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>
<?php
	session_start();

	$errors = array(); 

	// connect to the database
	include "../addbConfig.php";

// initializing variables
	$fileName = "";
	$fileNamee    = "";
	$productname = "";
	$title ="";
	$price = "";
	$stock ="";
	$dis ="";
	$sip = "";
	$war ="";
	$mrprice ="";

  // receive all input values from the form
  
   $fileName = basename($_FILES["fimg"]["name"]); 
   $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
   
   $fileNamee = basename($_FILES["bimg"]["name"]); 
   $fileType = pathinfo($fileNamee, PATHINFO_EXTENSION);
 
  $productname = mysqli_real_escape_string($db, $_POST['productname']);
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $stock = mysqli_real_escape_string($db, $_POST['stock']);
  $dis = mysqli_real_escape_string($db, $_POST['dis']);
  $sip = mysqli_real_escape_string($db, $_POST['sip']);
  $war = mysqli_real_escape_string($db, $_POST['war']);
  $mrprice = mysqli_real_escape_string($db, $_POST['mrprice']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fileName)) { array_push($errors, "Front View of image is required"); }
  if (empty($fileNamee)) { array_push($errors, "Back View of image is required"); }
  if (empty($productname)) { array_push($errors, "Product Name is required"); }
  if (empty($title)) { array_push($errors, "Title is required"); }
  if (empty($price)) { array_push($errors, "Price is required"); }
  if (empty($stock)) { array_push($errors, "Stock Name is required"); }
  if (empty($dis)) { array_push($errors, "Description Name is required"); }
  if (empty($sip)) { array_push($errors, "Specification is required"); }
  if (empty($war)) { array_push($errors, "warrenty is required"); }



  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM roti WHERE productname='$productname' OR title='$title' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['productname'] === $productname) {
      array_push($errors, "Product is Already Exits");
    }

    if ($user['title'] === $title) {
      array_push($errors, "Product is Already Exits");
    }
  }
  
// Allow certain file formats 
    $allowTypes = array('jpg','png','jpeg','gif'); 
    
  // Finally, register user if there are no errors in the form
	if (count($errors) == 0 && in_array($fileType, $allowTypes)) {
		$image = $_FILES['fimg']['tmp_name']; 
		$imgContent = addslashes(file_get_contents($image));
		
		$imagee = $_FILES['bimg']['tmp_name'];
		
		$imgContentt = addslashes(file_get_contents($imagee));
		 
		//insert data by Sql Qury

		$query = "INSERT INTO roti (fimg, bimg, productname, title, price, stock, dis, sip, war,mrp) 
		VALUES('$imgContent', '$imgContentt', '$productname', '$title', '$price', '$stock', '$dis', '$sip', '$war','$mrprice')";
		mysqli_query($db, $query);
		
		$_SESSION['productname'] = $productname;
		$_SESSION['success'] = "Your Product is Added Sucessfully";
		header("Location: addRoti.php"); 
		
	}
?>
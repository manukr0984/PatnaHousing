<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="en-in" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Greater Patna Housing</title>
<link href="bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="layout1.css" />
</head>

<body>
<?php include 'header.php';?>
<br />
<!-- Wrap all page content here -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patna11";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	 
if (!empty($_FILES["uploadedimage"]["name"])) {

	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext;
	$target_path = "images/".$imagename;

if(move_uploaded_file($temp_name, $target_path)) {

 	$query_upload="INSERT into images_tbl (images_path,submission_date) VALUES ('".$target_path."','".date("Y-m-d")."')";
	mysqli_query($conn, $query_upload) or die("error in $query_upload == ----> ".mysql_error());  
	
}else{

   exit("Error While uploading image on the server");
} 

}


// Escape user inputs for security
$zipcode = mysqli_real_escape_string($conn, $_REQUEST['zipcode']);
$street = mysqli_real_escape_string($conn, $_REQUEST['street']);
$price = mysqli_real_escape_string($conn, $_REQUEST['price']);
$bedrooms = mysqli_real_escape_string($conn, $_REQUEST['bedrooms']);
$bathrooms = mysqli_real_escape_string($conn, $_REQUEST['bathrooms']);
$sqft = mysqli_real_escape_string($conn, $_REQUEST['sqft']);
$build = mysqli_real_escape_string($conn, $_REQUEST['build']);
$description = mysqli_real_escape_string($conn, $_REQUEST['description']);
 
// attempt insert query execution
$sql = "INSERT INTO sale (zipcode, street, price, bedrooms, bathrooms, sqft, build, description, images_id) VALUES ('$zipcode', '$street', '$price', '$bedrooms', '$bathrooms', '$sqft','$build', '$description', LAST_INSERT_ID())";
if(mysqli_query($conn, $sql)){
    echo "Record added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

if(isset($_REQUEST['feature']))
{
 	foreach ($_REQUEST['feature'] as $feature)
	{
        	$sql = "INSERT INTO salefeaturejoin (id, featureid) VALUES (LAST_INSERT_ID(), '$feature')";
        	if(mysqli_query($conn, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

	}
}
if(isset($_REQUEST['style']))
{
 	foreach ($_REQUEST['style'] as $style)
	{
        	$sql = "INSERT INTO salestylejoin (id, styleid) VALUES (LAST_INSERT_ID(), '$style')";
        	if(mysqli_query($conn, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

	}
}


mysqli_close($conn);
?>
</body>
</html>
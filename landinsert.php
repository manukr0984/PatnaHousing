<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="en-in" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Greater Patna Housing</title>
<link href="bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="layout1.css" />
<style type="text/css">
label,input {
 display: block;
 width: 200px;
 float: left;
 margin-bottom: 10px;
}

label {
 text-align: right;
 width: 175px;
 padding-right: 20px;
}
br {
 clear: left;
}
</style>
</head>

<body>
<?php include 'header.php';?>
<br />
<!-- Wrap all page content here -->
		<?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
?>
<div id="wrap">


    <!-- page content -->
    
    
    <!-- This will be the body of the search page. -->

    <div class="container fill">
        <div class="row fill-vcenter">
            <div class="col-lg-12 text-center">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Register your land</h3>
                    </div>
                </div>
                <div class="row form-row-buffer">
                    <div class="col-xs-2 col-sm-2 col-md-3"></div>
                    <div class="col-xs-8 col-sm-8 col-md-6 transparent-box">

<form action="insertland.php" method="post" enctype="multipart/form-data">

        <label for="zipcode">Zipcode:</label>
        <input type="number" name="zipcode" step="1" pattern="\d+" />
		<br />
        <label for="street">Street:</label>
        <input type="text" name="street" id="street" />
   		<br />
        <label for="price">Price(Rs.):</label>
        <input type="number" name="price" step="1" pattern="\d+" />
		<br />
		<label for="lotsize">Lotsize in sqft:</label>
        <input type="number" name="lotsize" step="1" pattern="\d+" />
		<br />
		<label for="description">Description:</label>
        <textarea rows="5" cols="50" name="description" id="description"></textarea>
   		<br />
   		<label for="uploadedimage">Upload Image:</label>
   		<input name="uploadedimage" type="file" />
		<br />
    <input type="submit" value="Submit" />
</form>
</div></div></div></div></div></div>
<?php
 		}else {
 			echo "Please <a href='login.php' target='_blank'>login</a> to register your land";
 		} ?>

</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="en-in" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Greater Patna Housing</title>
<link href="bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="layout1.css" />
<style type="text/css">
label,input,select {
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
                        <h3>Register your house for rental</h3>
                    </div>
                </div>
                <div class="row form-row-buffer">
                    <div class="col-xs-2 col-sm-2 col-md-3"></div>
                    <div class="col-xs-8 col-sm-8 col-md-6 transparent-box">

<form action="insertrental.php" method="post" enctype="multipart/form-data">

        <label for="zipcode">Zipcode:</label>
        <input type="number" name="zipcode" step="1" pattern="\d+" />
		<br />
        <label for="street">Street:</label>
        <input type="text" name="street" id="street" />
   		<br />
        <label for="price">Monthly Price(Rs.):</label>
        <input type="number" name="price" step="1" pattern="\d+" />
		<br />
		<label for="bedrooms">Bedrooms:</label>
		<input type="number" name="bedrooms" step="1" pattern="\d+" />                   
		<br />
		<label for="bathrooms">Bathrooms:</label>
	<input type="number" name="bathrooms" step="1" pattern="\d+" />                 
		<br />
		<label for="sqft">Area(sqft):</label>
		<input type="number" name="sqft" step="1" pattern="\d+" />
		<br />
		<label for="build">Year Built:</label>
		<input type="number" name="build" step="1" pattern="\d+" />                   
		<br />
	<label for="feature">Features:</label>
	<select name="feature[]" id="feature" multiple="multiple" class="multi-select select2-hidden-accessible" tabindex="-1">
    <option value="1" label="Air Conditioning">Air Conditioning</option>
    <option value="2" label="Balcony">Balcony</option>
    <option value="3" label="Basement">Basement</option>
    <option value="4" label="Elevator">Elevator</option>
    <option value="7" label="Furnished">Furnished</option>
    <option value="8" label="Garage">Garage</option>
    <option value="9" label="Garden">Garden</option>
	</select>        
			<br />
	<label for="styke">Styles:</label>		
	<select name="style[]" id="style" multiple="multiple" class="multi-select select2-hidden-accessible" tabindex="-1">
    <option value="815458" label="1 Story">1 Story</option>
    <option value="815460" label="2 Story">2 Story</option>
    <option value="815462" label="3 Story">3 Story</option>
    <option value="815464" label="3+ Story">3+ Story</option>
    <option value="815470" label="Bungalow">Bungalow</option>
    <option value="815484" label="Farmhouse">Farmhouse</option>
    <option value="815485" label="Flat">Flat</option>
    <option value="815490" label="Mansion">Mansion</option>
</select>
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
 			echo "Please <a href='login.php' target='_blank'>login</a> to register your rental";
 		} ?>


</body>
</html>
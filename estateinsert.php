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
                        <h3>Register your upcoming real estate for sale</h3>
                    </div>
                </div>
                <div class="row form-row-buffer">
                    <div class="col-xs-2 col-sm-2 col-md-3"></div>
                    <div class="col-xs-8 col-sm-8 col-md-6 transparent-box">

<form action="insertestate.php" method="post" enctype="multipart/form-data">

        <label for="zipcode">Zipcode:</label>
        <input type="number" name="zipcode" step="1" pattern="\d+" />
		<br />
        <label for="street">Street:</label>
        <input type="text" name="street" id="street" />
   		<br />
        <label for="bookingprice">Booking Price(Rs.):</label>
        <input type="number" name="bookingprice" step="1" pattern="\d+" />
		<br />
		<label for="Carpet Area">Carper Area(sqft):</label>
        <input type="number" name="carpetarea" step="1" pattern="\d+" />
		<br />
	<label for="possession">Year Built:</label>
	<select name="possession" id="year_built">
    <option value="0" label="POSSESSION AFTER">POSSESSION AFTER</option>
    <option value="12017" label="DEC2017">DEC2017</option>
    <option value="22018" label="JAN2018">JAN2018</option>
    <option value="32018" label="MAR2018">MAR2018</option>
    <option value="42018" label="MAY2018">MAY2018</option>
    <option value="52018" label="JUL2018">JUL2018</option>
    <option value="62018" label="SEP2018">SEP2018</option>
    <option value="72018" label="NOV2018">NOV2018</option>
    <option value="82019" label="2019">2019</option>
    <option value="92020" label="2020">2020</option>
	</select>                      
		<br />
	<label for="apartmenttype">Apartment Type:</label>
	<select name="apartmenttype" id="apartmenttype">
    <option value="0" label="APARTMENT TYPE">APARTMENT TYPE</option>
    <option value="11" label="1BHK+">1+</option>
    <option value="21" label="2BHK+">2+</option>
    <option value="31" label="3BHK+">3+</option>
    <option value="41" label="4BHK+">4+</option>
    <option value="51" label="5BHK+">5+</option>
</select>
		<br />
	<label for="feature">Features:</label>
	<select name="feature[]" id="feature" multiple="multiple" class="multi-select select2-hidden-accessible" tabindex="-1">
    <option value="1" label="Lift">Lift</option>
    <option value="2" label="Fire Fighting System">Fire Fighting System</option>
    <option value="3" label="Car Parking">Car Parking</option>
    <option value="4" label="Gymnasium">Gymnasium</option>
    <option value="7" label="Club House">Club House</option>
    <option value="8" label="Children's Play Area">Children's Play Area</option>
    <option value="9" label="Intercom">Intercom</option>
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
 			echo "Please <a href='login.php' target='_blank'>login</a> to register your estate";
 		} ?>


</body>
</html>
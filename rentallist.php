<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="en-in" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Greater Patna Housing</title>
<link href="bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="layout1.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dist/simplePagination.css" />
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : <?php echo $page;?>,
		hrefTextPrefix : 'index.php?page='
    });
	});
</script>
</head>

<body>
<?php include 'header.php';?><br />
<!-- Wrap all page content here -->


<!--Your zipcode/street:<?php echo $_POST["city"]; ?><br />
Option from zipcode/street: <?php echo $_POST["by"]; ?><br />
Your min price is: <?php echo $_POST["min_price"]; ?><br />
Your max price is: <?php echo $_POST["max_price"]; ?><br />
Your bedrooms is: <?php echo $_POST["bedrooms"]; ?><br />
Your bathrooms is: <?php echo $_POST["bathrooms"]; ?><br />
Your square_feet is: <?php echo $_POST["square_feet"]; ?><br />
Your year_build is: <?php echo $_POST["year_built"]; ?><br />
-->




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

$sql = "SELECT * FROM rental";

$ref = "";
if($_GET["by"] == 2)
{
	$stm = " WHERE zipcode = ".$_GET["city"];
	$temp = "&city=".$_GET["city"];
	$ref = $ref.$temp;
	$temp = "&by=".$_GET["by"];
	$ref = $ref.$temp;
}
elseif($_GET["by"] == 5)
{
	$stm =" WHERE street LIKE '%".$_GET["city"]."%'";
	$temp = " &city=".$_GET["city"];
	$ref = $ref.$temp;
	$temp = "&by=".$_GET["by"];
	$ref = $ref.$temp;
}

$sql=$sql.$stm;

$stm=" AND price BETWEEN ".$_GET["min_price"]."  AND ".$_GET["max_price"]." AND bedrooms>=".$_GET["bedrooms"]
." AND bathrooms>=".$_GET["bathrooms"]." AND sqft>=".$_GET["square_feet"]." AND build>=".$_GET["year_built"];

$temp = "&min_price=".$_GET["min_price"]."&max_price=".$_GET["max_price"]."&bedrooms=".$_GET["bedrooms"]."&bathrooms=".$_GET["bathrooms"]."&square_feet=".$_GET["square_feet"]."&year_built=".$_GET["year_built"];
$ref = $ref.$temp;


$sql=$sql.$stm;


if(isset($_GET['feature']))
{
	$stm= " AND id IN (SELECT distinct d.id FROM rentalfeaturejoin d WHERE ";
	$sql=$sql.$stm;
	$i=0;
	foreach ($_GET['feature'] as $feature)
	{
        $i++;

	}
	$j=1;
 	foreach ($_GET['feature'] as $feature)
	{
		if($j<$i)
		{
        	$stm = "d.id  in (SELECT id FROM rentalfeaturejoin WHERE featureid = $feature) AND ";
        	$temp = "&feature[]=".$feature;
			$ref = $ref.$temp;
        	$sql=$sql.$stm;
        	$j++;
        }

	}
	$stm="d.id  in (SELECT id FROM rentalfeaturejoin WHERE featureid = $feature))";
	$temp = "&feature[]=".$feature;
	$ref = $ref.$temp;
	$sql=$sql.$stm;

}

if(isset($_GET['style']))
{
	$stm= " AND id IN (SELECT distinct d.id FROM rentalstylejoin d WHERE ";
	$sql=$sql.$stm;
	$i=0;
	foreach ($_GET['style'] as $style)
	{
        $i++;

	}
	$j=1;
 	foreach ($_GET['style'] as $style)
	{
		if($j<$i)
		{
        	$stm = "d.id  in (SELECT id FROM rentalstylejoin WHERE styleid = $style) AND ";
        	$temp = "&style[]=".$style;
			$ref = $ref.$temp;
        	$sql=$sql.$stm;
        	$j++;
        }

	}
	$stm="d.id  in (SELECT id FROM rentalstylejoin WHERE styleid = $style))";
    $temp = "&style[]=".$style;
	$ref = $ref.$temp;
	$sql=$sql.$stm;

}


$result1 = mysqli_query($conn, $sql);
if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){

$limit = 1;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;
$total_records = mysqli_num_rows($result1); 
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  

for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='rentallist.php?page=".$i.$ref."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  

echo "<br>";  

$stm  = " LIMIT ".$start_from.", ".$limit;  
$sql=$sql.$stm;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {$abc='<div class="b">';$xyz='<div class="key"><dl>';$img="";
			foreach($row as $key=>$value) 
			{
				if($key=="images_id")
				{
				if($value!=null)
				{
				$select_query = "SELECT images_path FROM  images_tbl WHERE images_id=$value";
				$result1 = mysqli_query($conn, $select_query) or die(mysql_error());	
				$data =  mysqli_fetch_assoc($result1);
				$img = '<div align="right"><img src='.$data["images_path"].' alt="" style="width:500px;height:400px;" /></div>';
				}
				}
				elseif($key=="description")
				{
				$abc = $abc.'<br /><b>'.$key.'</b>	: '.$value.'</div>';  
				}
				else
				{
				$xyz = $xyz.'<dt>'.$key.'</dt><dd>'.$value.'</dd><br /><br />';

				}  		
			}
		}echo $xyz.'</dl></div>';echo $abc;	echo $img;

	}
 	else {
    	echo "0 results";
}}
else
{
echo mysqli_num_rows($result1)." entries found matching your preference.";
echo " Please <a href='login.php' target='_blank'>login</a> to view the entries.";

}

mysqli_close($conn);
?> 

</body>

</html>

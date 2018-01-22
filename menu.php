<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-in" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>CSC515 Gym</title>
<script type="text/javascript" src="browsercodelibrary.js"></script>
<script type="text/javascript" src="codelibrary.js"></script>
<script type="text/javascript">
<!--
var itembg = "black";
var itemcolor = "silver";

var menu1url = new Array();
menu1url[1] = "index.php";
menu1url[2] = "aboutus.php";
menu1url[3] = "products.php";
menu1url[4] = "registration.php";
menu1url[5] = "contactus.php";
var menu2url = new Array();
menu2url[1] = "rentalinsert.php";
menu2url[2] = "saleinsert.php";
menu2url[3] = "landinsert.php";
menu2url[4] = "estateinsert.php";
var menu3url = new Array();
menu3url[1] = "rental.php";
menu3url[2] = "sale.php";
menu3url[3] = "land.php";
menu3url[4] = "estate.php";

function dropmenu(menuID) {
	setVisibility('dropdown'+menuID,"visible");
	menuFX(getObj('menutitle'+menuID),'over');
}

function hidemenu(menuID){
	setVisibility('dropdown'+menuID,"hidden");
	menuFX(getObj('menutitle'+menuID),'out');
}

function menuFX(thisobj,theevent){
	if (theevent=='over'){
		setBackground(thisobj,itembg);
		setColor(thisobj,itemcolor);
	}
      else{
		setBackground(thisobj,itemcolor);
		setColor(thisobj,itembg);
	}
}

function goPage(thisobj,menunum,itemnum){
	menuFX(thisobj,"out");
	hidemenu(menunum);	
	window.location.href = eval("menu"+menunum+"url["+itemnum+"]");
}
//-->
</script>
<style type="text/css">
<!--

.menubar { position:relative; height:1.5em; overflow:visible;}

#menubar1 { z-index:7;}

#menu1 { position:absolute;	left:0px; top:0px; width:150px;}

#menu2 { position:absolute; left:150px; top:0px; width:150px;}

#menu3 { position:absolute; left:300px; top:0px; width:150px;}

#menu4 { position:absolute; left:450px; top:0px; width:150px;}

.menutitle {
	background:silver; color:black; font-weight:bolder;
	border: 1px solid navy; padding:0px; position:absolute; 
	left:0px; top:0px; width:150px; height:1.40em;
	text-indent: .2em;
}

.dropdown {
	background:silver; position:absolute;
	left:0px; top:1.15em; width:150px;
	visibility:hidden; z-index:4;
}

.menuitem {
	position:relative; background:silver; color:black;
	font-weight:bolder; border: 1px solid navy;
	width:150px; text-indent: .5em;
}

-->
</style>

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>

<div id="menubar1" class="menubar">
  <div id="menu1" onmouseover="dropmenu('1');" 
                  onmouseout="hidemenu('1');">
    <div id="menutitle1" class="menutitle">Home</div>
    <div id="dropdown1" class="dropdown">
    <!--This div contains a hidden dropdown menu.-->
      <div class="menuitem" onmouseover="menuFX(this,'over');" 
           onmouseout="menuFX(this,'out');" onclick="goPage(this,1,1);">
             Home</div>
      <div class="menuitem" onmouseover="menuFX(this,'over');" 
           onmouseout="menuFX(this,'out');" onclick="goPage(this,1,2);">
             About Us</div>
      <div class="menuitem" onmouseover="menuFX(this,'over');" 
           onmouseout="menuFX(this,'out');" onclick="goPage(this,1,3);">
             Products</div>
      <div class="menuitem" onmouseover="menuFX(this,'over');" 
           onmouseout="menuFX(this,'out');" onclick="goPage(this,1,4);">
             Registration</div>
      <div class="menuitem" onmouseover="menuFX(this,'over');" 
           onmouseout="menuFX(this,'out');" onclick="goPage(this,1,5);">
             Contact Us</div>
    </div>
  </div>
  <div onmouseover="dropmenu('2');" onmouseout="hidemenu('2');" id="menu2">
    <div id="menutitle2" class="menutitle">Seller</div>
    <div class="dropdown" id="dropdown2">
    <!--This div contains a hidden dropdown menu.-->
      <div class="menuitem" onmouseover="menuFX(this,'over');" 
           onmouseout="menuFX(this,'out');" onclick="goPage(this,2,1);">
        Rent Home/Apartment</div>
      <div class="menuitem" onmouseover="menuFX(this,'over');" 
           onmouseout="menuFX(this,'out');" onclick="goPage(this,2,2);">
        Sell Home/Apartment</div>
      <div class="menuitem" onmouseover="menuFX(this,'over');" 
           onmouseout="menuFX(this,'out');" onclick="goPage(this,2,3);">
        Sell Land</div>
      <div class="menuitem" onmouseover="menuFX(this,'over');" 
           onmouseout="menuFX(this,'out');" onclick="goPage(this,2,4);">
        Upcoming Real Estate</div>
    </div>
  </div>
  <div onmouseover="dropmenu('3');" onmouseout="hidemenu('3');" id="menu3">
    <div id="menutitle3" class="menutitle">Buyer</div>
    <div id="dropdown3" class="dropdown">
    <!--This div contains a hidden dropdown menu.-->
      <div class="menuitem" onmouseover="menuFX(this,'over');" 
           onmouseout="menuFX(this,'out');" onclick="goPage(this,3,1);">
             Home/Apartment Rental</div>
      <div class="menuitem" onmouseover="menuFX(this,'over');" 
           onmouseout="menuFX(this,'out');" onclick="goPage(this,3,2);">
             Home/Apartment for Sale</div>
      <div class="menuitem" onmouseover="menuFX(this,'over');" 
           onmouseout="menuFX(this,'out');" onclick="goPage(this,3,3);">
             Land for Sale</div>
      <div class="menuitem" onmouseover="menuFX(this,'over');" 
           onmouseout="menuFX(this,'out');" onclick="goPage(this,3,4);">
             Upcoming Real Estate</div>
  </div>
</div>


</div>
</body>

</html>

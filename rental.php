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
<?php include 'header.php';?><br />
<!-- Wrap all page content here -->
<div id="wrap">


    <!-- page content -->
    
    
    <!-- This will be the body of the search page. -->

    <div class="container fill">
        <div class="row fill-vcenter">
            <div class="col-lg-12 text-center">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Home/Apartment Rentals <span class="zurple-tinted-text">In Greater Patna Area </span> and Nearby</h3>
                    </div>
                </div>
                <div class="row form-row-buffer">
                    <div class="col-xs-2 col-sm-2 col-md-3"></div>
                    <div class="col-xs-8 col-sm-8 col-md-6 transparent-box">
                        <form action="rentallist.php" method="get" id="property_search_form">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 search-input-field">
                                    <input type="text" name="city" id="city" value="800013" autocomplete="off" class="form-control form-control mandatory" />                                
                                    </div>

                            </div>

                            <div class="row form-row-buffer hideShow">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 sm-font text-left" style="padding: 1px 0 0 15px">
                                SEARCH BY:
                              </div>
                            </div>
                            <div class="row hideShow">
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 sm-font text-left no-padd">
                                    <label class="checkbox-inline no-padd">
                                        <input type="radio" name="by" id="by_zip" value="2" checked="checked" /> ZIP CODE
                                    </label>
                                </div>
                                                                                              
                                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 sm-font text-left no-padd">
                                <label class="checkbox-inline no-padd">
                                  <input type="radio" name="by" id="by_street" value="5" /> STREET
                                </label>
                              </div>
                             </div>
                            <div class="row hideShow bottom-border" style="margin-top: 15px;">
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 form-row-buffer">
                                    <select name="min_price" id="min_price"  class="form-control form-control mandatory">
    <option value="0" label="MIN. PRICE">MIN. PRICE</option>
    <option value="1000" label="Rs.1000">Rs.1,000</option>
    <option value="2000" label="Rs.2000">Rs.2000</option>
    <option value="3000" label="Rs.3000">Rs.3000</option>
    <option value="4000" label="Rs.4000">Rs.4000</option>
    <option value="5000" label="Rs.5000">Rs.5000</option>
    <option value="6000" label="Rs.6000">Rs.6000</option>
    <option value="8000" label="Rs.8000">Rs.8000</option>
    <option value="10000" label="Rs.10000">Rs.10000</option>
    <option value="12000" label="Rs.12000">Rs.12000</option>
    <option value="14000" label="Rs.14000">Rs.14000</option>
    <option value="16000" label="Rs.16000">Rs.16000</option>
    <option value="18000" label="Rs.18000">Rs.18000</option>
    <option value="20000" label="Rs.20000">Rs.20000</option>
    <option value="25000" label="Rs.25000">Rs.25000</option>
    <option value="30000" label="Rs.30000">Rs.30000</option>
    <option value="35000" label="Rs.35000">Rs.35000</option>
    <option value="40000" label="Rs.40000">Rs.40000</option>
    <option value="45000" label="Rs.45000">Rs.45000</option>
    <option value="50000" label="Rs.50000">Rs.50000</option>
    <option value="55000" label="Rs.55000">Rs.55000</option>
    <option value="60000" label="Rs.60000">Rs.60000</option>
    <option value="70000" label="Rs.70000">Rs.70000</option>
    <option value="80000" label="Rs.80000">Rs.80000</option>
    <option value="90000" label="Rs.90000">Rs.90000</option>
    <option value="1000000" label="MAX. PRICE">MAX. PRICE</option>
</select>                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 form-row-buffer">
                                        <select name="max_price" id="max_price" helper="formSelect" type="text" class="form-control form-control mandatory">
<option value="0" label="MIN. PRICE">MIN. PRICE</option>
    <option value="1000" label="Rs.1000">Rs.1,000</option>
    <option value="2000" label="Rs.2000">Rs.2000</option>
    <option value="3000" label="Rs.3000">Rs.3000</option>
    <option value="4000" label="Rs.4000">Rs.4000</option>
    <option value="5000" label="Rs.5000">Rs.5000</option>
    <option value="6000" label="Rs.6000">Rs.6000</option>
    <option value="8000" label="Rs.8000">Rs.8000</option>
    <option value="10000" label="Rs.10000">Rs.10000</option>
    <option value="12000" label="Rs.12000">Rs.12000</option>
    <option value="14000" label="Rs.14000">Rs.14000</option>
    <option value="16000" label="Rs.16000">Rs.16000</option>
    <option value="18000" label="Rs.18000">Rs.18000</option>
    <option value="20000" label="Rs.20000">Rs.20000</option>
    <option value="25000" label="Rs.25000">Rs.25000</option>
    <option value="30000" label="Rs.30000">Rs.30000</option>
    <option value="35000" label="Rs.35000">Rs.35000</option>
    <option value="40000" label="Rs.40000">Rs.40000</option>
    <option value="45000" label="Rs.45000">Rs.45000</option>
    <option value="50000" label="Rs.50000">Rs.50000</option>
    <option value="55000" label="Rs.55000">Rs.55000</option>
    <option value="60000" label="Rs.60000">Rs.60000</option>
    <option value="70000" label="Rs.70000">Rs.70000</option>
    <option value="80000" label="Rs.80000">Rs.80000</option>
    <option value="90000" label="Rs.90000">Rs.90000</option>
    <option value="1000000" label="MAX. PRICE" selected="selected">MAX. PRICE</option>
</select>                                </div>
                            </div>
                            <div class="row hideShow">
                                <div class="col-xs-12 col-sm-6 col-md-6 form-row-buffer">
                                        <select name="bedrooms" id="bedrooms" class="form-control form-control">
    <option value="0" label="BEDROOMS">BEDROOMS</option>
    <option value="1" label="1+">1+</option>
    <option value="2" label="2+">2+</option>
    <option value="3" label="3+">3+</option>
    <option value="4" label="4+">4+</option>
    <option value="5" label="5+">5+</option>
</select>                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 form-row-buffer">
                                        <select name="bathrooms" id="bathrooms" helper="formSelect" type="text" class="form-control form-control">
    <option value="0" label="BATHROOMS">BATHROOMS</option>
    <option value="1" label="1+">1+</option>
    <option value="2" label="2+">2+</option>
    <option value="3" label="3+">3+</option>
    <option value="4" label="4+">4+</option>
    <option value="5" label="5+">5+</option>
</select>                                </div>
                            </div>
                            <div class="row  hideShow">
                                                                    <div class="col-xs-12 col-sm-6 col-md-6 form-row-buffer">
                                        <select name="square_feet" id="square_feet" helper="formSelect" class="form-control form-control">
    <option value="0" label="SQ. FT. (MIN)" selected="selected">SQ. FT. (MIN)</option>
    <option value="500" label="500">500</option>
    <option value="1000" label="1000">1000</option>
    <option value="1500" label="1500">1500</option>
    <option value="2000" label="2000">2000</option>
    <option value="2500" label="2500">2500</option>
    <option value="3000" label="3000">3000</option>
    <option value="3500" label="3500">3500</option>
    <option value="4000" label="4000">4000</option>
    <option value="4500" label="4500">4500</option>
    <option value="5000" label="5000">5000</option>
    <option value="5500" label="5500">5500</option>
    <option value="6000" label="6000">6000</option>
    <option value="6500" label="6500">6500</option>
    <option value="7000" label="7000">7000</option>
    <option value="7500" label="7500">7500</option>
    <option value="8000" label="8000">8000</option>
    <option value="8500" label="8500">8500</option>
    <option value="9000" label="9000">9000</option>
    <option value="9500" label="9500">9500</option>
    <option value="10000" label="10000">10000</option>
</select>                                    </div>
                                                                                                    <div class="col-xs-12 col-sm-6 col-md-6 form-row-buffer">
                                        <select name="year_built" id="year_built" class="form-control form-control">
    <option value="0" label="BUILT AFTER">BUILT AFTER</option>
    <option value="1940" label="1940">1940</option>
    <option value="1950" label="1950">1950</option>
    <option value="1960" label="1960">1960</option>
    <option value="1970" label="1970">1970</option>
    <option value="1980" label="1980">1980</option>
    <option value="1990" label="1990">1990</option>
    <option value="2000" label="2000">2000</option>
    <option value="2001" label="2001">2001</option>
    <option value="2002" label="2002">2002</option>
    <option value="2003" label="2003">2003</option>
    <option value="2004" label="2004">2004</option>
    <option value="2005" label="2005">2005</option>
    <option value="2006" label="2006">2006</option>
    <option value="2007" label="2007">2007</option>
    <option value="2008" label="2008">2008</option>
    <option value="2009" label="2009">2009</option>
    <option value="2010" label="2010">2010</option>
    <option value="2011" label="2011">2011</option>
    <option value="2012" label="2012">2012</option>
    <option value="2013" label="2013">2013</option>
    <option value="2014" label="2014">2014</option>
    <option value="2015" label="2015">2015</option>
    <option value="2016" label="2016">2016</option>
    <option value="2017" label="2017">2017</option>
</select>                                    </div>
                                                            </div>

                            <div class="row  hideShow">
                                <div class="col-xs-12 col-sm-6 col-md-6 form-row-buffer multicont">
                                                                          <select name="feature[]" id="feature" multiple="multiple" class="form-control form-control multi-select select2-hidden-accessible" tabindex="-1">
    <option value="1" label="Air Conditioning">Air Conditioning</option>
    <option value="2" label="Balcony">Balcony</option>
    <option value="3" label="Basement">Basement</option>
    <option value="4" label="Elevator">Elevator</option>
    <option value="7" label="Furnished">Furnished</option>
    <option value="8" label="Garage">Garage</option>
    <option value="9" label="Garden">Garden</option>
	</select>                                                                                                      </div>
                                                                  <div class="col-xs-12 col-sm-6 col-md-6 form-row-buffer multicont">
                                    <select name="style[]" id="style" multiple="multiple" class="form-control form-control multi-select select2-hidden-accessible" tabindex="-1">
    <option value="815458" label="1 Story">1 Story</option>
    <option value="815460" label="2 Story">2 Story</option>
    <option value="815462" label="3 Story">3 Story</option>
    <option value="815464" label="3+ Story">3+ Story</option>
    <option value="815470" label="Bungalow">Bungalow</option>
    <option value="815484" label="Farmhouse">Farmhouse</option>
    <option value="815485" label="Flat">Flat</option>
    <option value="815490" label="Mansion">Mansion</option>
</select>                                 </div>
                                                                                            </div>

                            <div class="row">

                                <div class="col-xs-12 col-sm-6 col-md-6 form-row-buffer">
                                    <input class="btn btn-zurple-tinted btn-block" type="submit" value="SEARCH" />
                                </div>

                            </div>

                            
                        </form>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-3"></div>
                </div>
            </div>
        </div>

    </div>

    
</div><!--/.wrap -->
</body>

</html>

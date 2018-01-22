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
<div id="wrap">


    <!-- page content -->
    
    
    <!-- This will be the body of the search page. -->

    <div class="container fill">
        <div class="row fill-vcenter">
            <div class="col-lg-12 text-center">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Land for Sale <span class="zurple-tinted-text">In Greater Patna Area </span> and Nearby</h3>
                    </div>
                </div>
                <div class="row form-row-buffer">
                    <div class="col-xs-2 col-sm-2 col-md-3"></div>
                    <div class="col-xs-8 col-sm-8 col-md-6 transparent-box">
                        <form action="landlist.php" method="get" id="property_search_form">
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
    <option value="100000" label="Rs.100000">Rs.100000</option>
    <option value="200000" label="Rs.200000">Rs.200000</option>
    <option value="300000" label="Rs.300000">Rs.300000</option>
    <option value="400000" label="Rs.400000">Rs.400000</option>
    <option value="500000" label="Rs.500000">Rs.500000</option>
    <option value="600000" label="Rs.600000">Rs.600000</option>
    <option value="800000" label="Rs.800000">Rs.800000</option>
    <option value="1000000" label="Rs.1000000">Rs.1000000</option>
    <option value="1200000" label="Rs.1200000">Rs.1200000</option>
    <option value="1400000" label="Rs.1400000">Rs.1400000</option>
    <option value="1600000" label="Rs.1600000">Rs.1600000</option>
    <option value="1800000" label="Rs.1800000">Rs.1800000</option>
    <option value="2000000" label="Rs.2000000">Rs.2000000</option>
    <option value="2500000" label="Rs.2500000">Rs.2500000</option>
    <option value="3000000" label="Rs.3000000">Rs.3000000</option>
    <option value="3500000" label="Rs.3500000">Rs.3500000</option>
    <option value="4000000" label="Rs.4000000">Rs.4000000</option>
    <option value="4500000" label="Rs.4500000">Rs.4500000</option>
    <option value="5000000" label="Rs.5000000">Rs.5000000</option>
    <option value="5500000" label="Rs.5500000">Rs.5500000</option>
    <option value="6000000" label="Rs.6000000">Rs.6000000</option>
    <option value="7000000" label="Rs.7000000">Rs.7000000</option>
    <option value="8000000" label="Rs.8000000">Rs.8000000</option>
    <option value="9000000" label="Rs.9000000">Rs.9000000</option>
    <option value="10000000" label="Rs.10000000">Rs.10000000</option>
    <option value="20000000" label="Rs.20000000">Rs.20000000</option>
    <option value="30000000" label="Rs.30000000">Rs.30000000</option>
    <option value="40000000" label="Rs.40000000">Rs.40000000</option>
    <option value="50000000" label="Rs.50000000">Rs.50000000</option>
    <option value="60000000" label="Rs.60000000">Rs.60000000</option>
    <option value="80000000" label="Rs.80000000">Rs.80000000</option>
    <option value="100000000" label="MAX. PRICE">MAX. PRICE</option>
</select>                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 form-row-buffer">
                                        <select name="max_price" id="max_price" class="form-control form-control mandatory">
    <option value="0" label="MIN. PRICE">MIN. PRICE</option>
    <option value="100000" label="Rs.100000">Rs.1,00000</option>
    <option value="200000" label="Rs.200000">Rs.200000</option>
    <option value="300000" label="Rs.300000">Rs.300000</option>
    <option value="400000" label="Rs.400000">Rs.400000</option>
    <option value="500000" label="Rs.500000">Rs.500000</option>
    <option value="600000" label="Rs.600000">Rs.600000</option>
    <option value="800000" label="Rs.800000">Rs.800000</option>
    <option value="1000000" label="Rs.1000000">Rs.1000000</option>
    <option value="1200000" label="Rs.1200000">Rs.1200000</option>
    <option value="1400000" label="Rs.1400000">Rs.1400000</option>
    <option value="1600000" label="Rs.1600000">Rs.1600000</option>
    <option value="1800000" label="Rs.1800000">Rs.1800000</option>
    <option value="2000000" label="Rs.2000000">Rs.2000000</option>
    <option value="2500000" label="Rs.2500000">Rs.2500000</option>
    <option value="3000000" label="Rs.3000000">Rs.3000000</option>
    <option value="3500000" label="Rs.3500000">Rs.3500000</option>
    <option value="4000000" label="Rs.4000000">Rs.4000000</option>
    <option value="4500000" label="Rs.4500000">Rs.4500000</option>
    <option value="5000000" label="Rs.5000000">Rs.5000000</option>
    <option value="5500000" label="Rs.5500000">Rs.5500000</option>
    <option value="6000000" label="Rs.6000000">Rs.6000000</option>
    <option value="7000000" label="Rs.7000000">Rs.7000000</option>
    <option value="8000000" label="Rs.8000000">Rs.8000000</option>
    <option value="9000000" label="Rs.9000000">Rs.9000000</option>
    <option value="10000000" label="Rs.10000000">Rs.10000000</option>
    <option value="20000000" label="Rs.20000000">Rs.20000000</option>
    <option value="30000000" label="Rs.30000000">Rs.30000000</option>
    <option value="40000000" label="Rs.40000000">Rs.40000000</option>
    <option value="50000000" label="Rs.50000000">Rs.50000000</option>
    <option value="60000000" label="Rs.60000000">Rs.60000000</option>
    <option value="80000000" label="Rs.80000000">Rs.80000000</option>
    <option value="100000000" label="MAX. PRICE" selected="selected">MAX. PRICE</option>
</select>                                </div>
                            </div>
                            <div class="row  hideShow">
                                                                  <div class="col-xs-12 col-sm-6 col-md-6 form-row-buffer">
                                      <select name="lot_sqft" id="lot_sqft" class="form-control form-control">
    <option value="0" label="LOT SIZE" selected="selected">LOT SIZE</option>
    <option value="1000" label="1,000+ sq ft">1,000+ sq ft</option>
    <option value="2000" label="2,000+ sq ft">2,000+ sq ft</option>
    <option value="4000" label="4,000+ sq ft">4,000+ sq ft</option>
    <option value="6000" label="6,000+ sq ft">6,000+ sq ft</option>
    <option value="8000" label="8,000+ sq ft">8,000+ sq ft</option>
    <option value="10890" label="10,890+ sq ft / .25+ acres">10,890+ sq ft / .25+ acres</option>
    <option value="21780" label="21,780+ sq ft / .5+ acres">21,780+ sq ft / .5+ acres</option>
    <option value="43560" label="1+ acre">1+ acre</option>
    <option value="87120" label="2+ acres">2+ acres</option>
    <option value="130680" label="3+ acres">3+ acres</option>
    <option value="174240" label="4+ acres">4+ acres</option>
    <option value="217800" label="5+ acres">5+ acres</option>
    <option value="435600" label="10+ acres">10+ acres</option>
    <option value="871200" label="20+ acres">20+ acres</option>
    <option value="1306800" label="30+ acres">30+ acres</option>
    <option value="1742400" label="40+ acres">40+ acres</option>
    <option value="2178000" label="50+ acres">50+ acres</option>
    <option value="4356000" label="100+ acres">100+ acres</option>
</select>                                  </div>
                                                            </div>

 <div class="row">

                                <div class="col-xs-12 col-sm-6 col-md-6 form-row-buffer">
                                    <input class="btn btn-zurple-tinted btn-block" type="submit" value="SEARCH" />
                                </div>

                            </div>


</form>
</div></div></div></div></div></div>
</body>
</html>
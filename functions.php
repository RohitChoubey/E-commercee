<?php

// require MySQL Connection
require ('dbconfig.php');

// require Product Class
require ('collections/Product.php');
require ('list/cProduct.php');
require ('list/rProduct.php');
require ('list/hProduct.php');
require ('list/fProduct.php');
require ('list/sProduct.php');
require ('list/iProduct.php');
require ('list/bProduct.php');

require ('list/fmProduct.php');
require ('list/fwProduct.php');
/* require ('list/gProduct.php'); */
require ('list/acProduct.php');
require ('list/refiProduct.php');
require ('list/wmProduct.php');
require ('list/dryProduct.php');

require ('list/triProduct.php');
require ('list/hairProduct.php');
require ('list/tanProduct.php');
require ('list/soProduct.php');
/* require ('list/microProduct.php'); */
require ('list/tvProduct.php');
require ('list/homeProduct.php');   
require ('list/pizzaProduct.php'); 
require ('list/wbProduct.php');
require ('list/croProduct.php');
require ('list/bedProduct.php');
require ('list/towelProduct.php');
require ('list/cookProduct.php');
require ('list/bagProduct.php');
require ('list/mcProduct.php');
require ('list/watchProduct.php');
/* require ('list/deoProduct.php'); */
require ('list/lockerProduct.php');
require ('list/lapibagproduct.php');
require ('list/blueproduct.php');
require ('list/vproduct.php');
require ('list/airproduct.php');
require ('list/lunchproduct.php');
require ('list/otherproduct.php');
require ('list/roproduct.php');
require ('list/heaterproduct.php');
/* require ('addOffer/offproduct.php'); */

// require Cart Class
/* require ('database/Cart.php'); */


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

$tanproduct = new tanProduct($db);
$tanproduct_shuffle = $tanproduct->getData();
/* 
$offproduct = new offProduct($db);
$offproduct_shuffle = $offproduct->getData();
 */

$heaterproduct = new heaterProduct($db);
$heaterproduct_shuffle = $heaterproduct->getData();

$roproduct = new roProduct($db);
$roproduct_shuffle = $roproduct->getData();


$otherproduct = new otherProduct($db);
$otherproduct_shuffle = $otherproduct->getData();

$lunchproduct = new lunchProduct($db);
$lunchproduct_shuffle = $lunchproduct->getData();

$airproduct = new airProduct($db);
$airproduct_shuffle = $airproduct->getData();


$vproduct = new vProduct($db);
$vproduct_shuffle = $vproduct->getData();

$blueproduct = new blueProduct($db);
$blueproduct_shuffle = $blueproduct->getData();

$lapibagproduct = new lapibagProduct($db);
$lapibagproduct_shuffle = $lapibagproduct->getData();

/* $deoproduct = new deoProduct($db);
$deoproduct_shuffle = $deoproduct->getData(); */

$watchproduct = new watchProduct($db);
$watchproduct_shuffle = $watchproduct->getData();

$mcproduct = new mcProduct($db);
$mcproduct_shuffle = $mcproduct->getData();

$bagproduct = new bagProduct($db);
$bagproduct_shuffle = $bagproduct->getData();

$towelproduct = new towelProduct($db);
$towelproduct_shuffle = $towelproduct->getData();

$cookproduct = new cookProduct($db);
$cookproduct_shuffle = $cookproduct->getData();

$bedproduct = new bedProduct($db);
$bedproduct_shuffle = $bedproduct->getData();

$wbproduct = new wbProduct($db);
$wbproduct_shuffle = $wbproduct->getData();

$pizzaproduct = new pizzaProduct($db);
$pizzaproduct_shuffle = $pizzaproduct->getData();

/* $microproduct = new microProduct($db);
$microproduct_shuffle = $microproduct->getData();
 */
$tvproduct = new tvProduct($db);
$tvproduct_shuffle = $tvproduct->getData();

$homeproduct = new homeProduct($db);
$homeproduct_shuffle = $homeproduct->getData();


$soproduct = new soProduct($db);
$soproduct_shuffle = $soproduct->getData();


$hairproduct = new hairProduct($db);
$hairproduct_shuffle = $hairproduct->getData();

$cproduct = new cProduct($db);
$cproduct_shuffle = $cproduct->getData();

$rproduct = new rProduct($db);
$rproduct_shuffle = $rproduct->getData();

$hproduct = new hProduct($db);
$hproduct_shuffle = $hproduct->getData();

$fproduct = new fProduct($db);
$fproduct_shuffle = $fproduct->getData();

$sproduct = new sProduct($db);
$sproduct_shuffle = $sproduct->getData();

$dryproduct = new dryProduct($db);
$dryproduct_shuffle = $dryproduct->getData();

$iproduct = new iProduct($db);
$iProductproduct_shuffle = $iproduct->getData();

$bproduct = new bProduct($db);
$bProductproduct_shuffle = $bproduct->getData();

$fmproduct = new fmProduct($db);
$fmProductproduct_shuffle = $fmproduct->getData();


$fwproduct = new fwProduct($db);
$fwProductproduct_shuffle = $fwproduct->getData();

/* 
$gproduct = new gProduct($db);
$gProductproduct_shuffle = $gproduct->getData(); */


$acproduct = new acProduct($db);
$acProductproduct_shuffle = $acproduct->getData();

$refiproduct = new refiProduct($db);
$refiProductproduct_shuffle = $refiproduct->getData();

$wmproduct = new wmProduct($db);
$wmProductproduct_shuffle = $wmproduct->getData();

$triproduct = new triProduct($db);
$triProductproduct_shuffle = $triproduct->getData();


// Cart object
/* $Cart = new Cart($db ); */

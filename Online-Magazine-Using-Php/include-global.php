<?php
require_once('function.php');
connectdb();
session_start();

$general = mysql_fetch_array(mysql_query("SELECT sitetitle, wcmsg, color, lid FROM general_setting WHERE id='1'"));
$basetitle = $general[0];

$ogimg = "$baseurl/newsimages/default.jpg";


$basecolor = $general[2];
$baseloader = $general[3];

?>
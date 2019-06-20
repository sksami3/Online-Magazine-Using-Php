<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="software@thesoftking.com" />

    
<meta name="description" content="<?php echo $titleOfMe; ?>"/>
<meta property="og:title" content="<?php echo $titleOfMe; ?>"/>
<meta property="og:site_name" content="<?php echo $basetitle; ?>"/>
<meta property="og:description" content="<?php echo $titleOfMe; ?>"/>
<meta property="og:image" content="<?php echo $ogimg; ?>"/>


<link rel="shortcut icon" href="<?php echo $baseurl; ?>/assets/images/fev-icon.png" />
    

<!-- Stylesheets
============================================= -->
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="<?php echo $baseurl; ?>/assets/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>/assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>/assets/css/dark.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>/assets/css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>/assets/css/animate.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>/assets/css/magnific-popup.css" type="text/css" />

<link rel="stylesheet" href="<?php echo $baseurl; ?>/assets/css/responsive.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>/assets/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $baseurl; ?>/assets/css/colors.php?color=<?php echo $basecolor; ?>" type="text/css" />

<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php echo $titleOfMe; ?></title>
</head>
<body class="stretched" data-loader="<?php echo $baseloader; ?>" data-loader-color='<?php echo "#$basecolor"; ?>'>

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">


        <!-- Header
        ============================================= -->
        <header id="header" class="sticky-style-2">

            <div class="container clearfix">


<div class="row">
<div class="col-md-4">
<!-- Logo
============================================= -->
<div id="logo">
<a href="<?php echo $baseurl; ?>" class="standard-logo">
<img src="<?php echo $baseurl; ?>/assets/images/logo.png" alt="Logo" >
</a>
<a href="<?php echo $baseurl; ?>" class="retina-logo">
<img src="<?php echo $baseurl; ?>/assets/images/logo.png" alt="Logo" >
</a>

</div><!-- #logo end -->
<b style="color: #<?php echo $basecolor; ?>; font-size:18px; text-transform: uppercase;">
<?php
include('dates.php');
?>
</b>
</div>
<div class="col-md-8">
<?php 
showadds($newsdtls[0], 1);
?>
</div>
</div><!--ROW-->
</div>
            </div>


<div class="clearfix"></div>


            <div id="header-wrap">

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="style-2">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="fa fa-reorder"></i></div>

                        <ul>

<li><a href="<?php echo $baseurl; ?>"><div>Home</div></a></li>
<?php
$ddaa = mysql_query("SELECT id, cnm, mnm FROM cats WHERE hide='0' ORDER BY id LIMIT 0,8");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    { 
echo "<li><a  href=\"$baseurl/$data[1]\"><div>$data[2]</div></a>";

$cc = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM subcat WHERE catid = '".$data[0]."'"));
if ($cc[0] >0){

$subcat = mysql_query("SELECT name, cnm FROM subcat WHERE catid = '$data[0]'");


echo "<ul class=\"dropdown-menu\" >";
    while ($data2 = mysql_fetch_array($subcat)){ 
echo "<li class=\"\"><a href=\"$baseurl/subcat/$data2[1]\"><div>$data2[0]</div></a></li>"; 
  }

echo "</ul>";

}

echo "</li>";
  }
?>  
    
                        <li class="dropdown">
                            <a href="#"><div>More <i class="fa fa-angle-down"></i></div></a>
                            <ul>
                         
    
<?php
$ddaa = mysql_query("SELECT id, cnm, mnm FROM cats WHERE hide='0' ORDER BY id LIMIT 1000 OFFSET 8");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    { 
echo "<li><a href=\"$baseurl/$data[1]\"><div>$data[2]</div></a>";
$cc = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM subcat WHERE catid = '".$data[0]."'"));
if ($cc[0] >0){

$subcat = mysql_query("SELECT name, cnm FROM subcat WHERE catid = '$data[0]'");


echo "<ul>";
    while ($data2 = mysql_fetch_array($subcat)){ 
echo "<li style=\"border-bottom:1 px solid red\"><a class=\"\"  href=\"$baseurl/subcat/$data2[1]\" class=\"\">$data2[0]</a></li>"; 
  }

echo "</ul>";

}
echo "</li>";

  }
?>
</ul> 
</li>
                        </ul>



                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="fa fa-search"></i><i class="icon-line-cross"></i></a>
                            <form action="<?php echo $baseurl; ?>/search" method="post">
                                <input type="text" name="search" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div><!-- #top-search end -->

                    </div>

                </nav><!-- #primary-menu end -->

            </div>

        </header><!-- #header end -->


        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
                    <div>
                        <div class="container clearfix">
                            <span class="label label-danger bnews-title">Breaking News:</span>

                            <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                                <div class="flexslider">
                                    <div class="slider-wrap">



<?php

$ddaa = mysql_query("SELECT id, ttl FROM news WHERE headlines='1' AND hide='0' ORDER BY id DESC");
while ($data = mysql_fetch_array($ddaa)){
echo "<div class=\"slide\"><a href=\"$baseurl/article/$data[0]\"><strong>$data[1]</strong></a></div>";
}
?>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

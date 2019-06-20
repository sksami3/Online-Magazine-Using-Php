<?php
include ('include/header.php');
?>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo">
<?php
include ('include/sidebar.php');
?>

<div class="page-content-wrapper">
<div class="page-content">
<h3 class="page-title"> Dashboard
<small>Statistics</small>
</h3>
<hr>

<div class="row">
<div class="col-md-12">

<?php
$adminN = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM admin"));
$addsN = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM adds"));
$catsN = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM cats"));
$subcatN = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM subcat"));
?>



<!-- START -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="dashboard-stat blue">
<div class="visual">
<i class="fa fa-th"></i>
</div>
<div class="details">
<div class="number"><?php echo $catsN[0]; ?></div>
<div class="desc"> TOTAL  CATEGORY </div>
</div>
</div>
</div>
<!-- END -->

<!-- START -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="dashboard-stat yellow">
<div class="visual">
<i class="fa fa-th"></i>
</div>
<div class="details">
<div class="number"><?php echo $subcatN[0]; ?></div>
<div class="desc"> TOTAL SUB CATEGORY </div>
</div>
</div>
</div>
<!-- END -->

<!-- START -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="dashboard-stat purple">
<div class="visual">
<i class="fa fa-desktop"></i>
</div>
<div class="details">
<div class="number"><?php echo $addsN[0]; ?></div>
<div class="desc"> TOTAL  ADVIRTISEMENT </div>
</div>
</div>
</div>
<!-- END -->


<!-- START -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="dashboard-stat dark">
<div class="visual">
<i class="fa fa-users"></i>
</div>
<div class="details">
<div class="number"><?php echo $adminN[0]; ?></div>
<div class="desc"> TOTAL  ADMIN/STAFF </div>
</div>
</div>
</div>
<!-- END -->


<!-- ############################## -->




<?php 
$dt = date("Y-M-d");
$tms = strtotime($dt);
$tmst = $tms;
$tmend = $tmst+24*60*60;


$ddaa = mysql_query("SELECT id, cnm, mnm FROM cats ORDER BY id");
while ($data = mysql_fetch_array($ddaa)){


$numA = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM adds WHERE cat='".$data[0]."'"));
$numN = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM news WHERE cats='".$data[0]."'"));
$numTD = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM news WHERE cats='".$data[0]."' AND tm BETWEEN '".$tmst."' AND '".$tmend."'"));
 ?>



<!-- START -->
<div class="col-md-6">

<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title"><?php echo $data[2]; ?></h3>
</div>
<div class="panel-body">


<div class="row">
    

<!-- START -->
<div class="col-md-4 col-xs-12">
<div class="dashboard-stat blue">
<div class="visual">
<i class="fa fa-newspaper-o"></i>
</div>
<div class="details">
<div class="number"><?php echo $numN[0]; ?></div>
<div class="desc"> TOTAL  NEWS </div>
</div>
</div>
</div>
<!-- END -->

<!-- START -->
<div class="col-md-4 col-xs-12">
<div class="dashboard-stat yellow">
<div class="visual">
<i class="fa fa-newspaper-o"></i>
</div>
<div class="details">
<div class="number"><?php echo $numTD[0]; ?></div>
<div class="desc"> NEWS TODAY </div>
</div>
</div>
</div>
<!-- END -->

<!-- START -->
<div class="col-md-4 col-xs-12">
<div class="dashboard-stat purple">
<div class="visual">
<i class="fa fa-desktop"></i>
</div>
<div class="details">
<div class="number"><?php echo $numA[0]; ?></div>
<div class="desc"> TOTAL  ADVIRTISEMENT </div>
</div>
</div>
</div>
<!-- END -->

</div>



 </div>
</div>


</div>
<!-- END -->

<?php 

}
?>



</div>
</div>
</div>
</div>





<?php
include ('include/footer.php');
?>


</body>
</html>
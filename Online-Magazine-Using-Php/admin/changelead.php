<?php
include ('include/header.php');
?>

</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo">


<?php
include ('include/sidebar.php');
?>

 

		
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                   
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Manage
                        <small>Lead News</small>
                    </h3>
                    <!-- END PAGE TITLE-->

					<hr>



<?php 
if ($_POST) {
$main_1 = $_POST["main_1"];
$main_2 = $_POST["main_2"];
$main_3 = $_POST["main_3"];
$main_4 = $_POST["main_4"];
$main_5 = $_POST["main_5"];


///-------------------->> reset Position
mysql_query("UPDATE news SET main='0'");
///-------------------->> reset Position



mysql_query("UPDATE news SET main='1' WHERE id='".$main_1."'");
mysql_query("UPDATE news SET main='2' WHERE id='".$main_2."'");
mysql_query("UPDATE news SET main='3' WHERE id='".$main_3."'");
mysql_query("UPDATE news SET main='4' WHERE id='".$main_4."'");
mysql_query("UPDATE news SET main='5' WHERE id='".$main_5."'");


}


?>









<div class="row">
<div class="col-md-2"><pre>POSITION</pre></div>
<div class="col-md-2"><pre>NEWS ID</pre></div>
<div class="col-md-8"><pre>HEADLINE</pre></div>
</div>
<br><br>




<form action="" method="post">
<?php 
for ($i=1; $i <6 ; $i++) { 
$data = mysql_fetch_array(mysql_query("SELECT id, ttl, thumb, main FROM news WHERE main='".$i."'"));
?>

<div class="row">

<div class="col-md-2"><pre><?php echo $i; ?></pre></div>


<div class="col-md-2">
<input type="text" name="main_<?php echo $i;?>" class="form-control input-lg" value="<?php echo $data[0];?>">
</div>
<div class="col-md-8"><pre><?php echo $data[1]; ?></pre></div>

</div>
<br>



<?php
}
?>



<button type="submit" class="btn btn-success btn-lg btn-block">UPDATE </button>

</form>






                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
			


<?php
 include ('include/footer.php');
 ?>


</body>
</html>
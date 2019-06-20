<?php
include('include-global.php');
$search = $_POST['search'];

$titleOfMe = "$basetitle - $search";
?>


<?php
include('include-header.php');
?>





    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">



<h3 class="category-headding "><a href="#">Search: <?php echo $search; ?></a></h3>
<div class="headding-border bg-color-1"></div>


<div class="row">







<?php
$i = 1;

$count = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM news WHERE hide='0' AND ttl LIKE '%$search%' OR btext LIKE '%$search%' ORDER BY id DESC"));

if($count[0]==0){
?> 
<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 ">
<h3>No News Found... <br><br><br><br><br></h3>
</div>

	

<?php	
}else{



$ddaa = mysql_query("SELECT id, ttl, thumb, btext, tm FROM news WHERE hide='0' AND ttl LIKE '%$search%' OR btext LIKE '%$search%' ORDER BY id DESC");
    echo mysql_error();
    while ($mainnews = mysql_fetch_array($ddaa))
    { 

$mainnewstxt = strip_tags(implode(' ', array_slice(explode(' ', $mainnews[3]), 0, 32)));
$ctntm = date("jS F, Y | H:i:s A",$mainnews[4]);
?>

 

<!-- =================5====================== -->
<div class="col-md-6 col-sm-6">


<div class="ipost clearfix">
<div class="entry-title">
<h3><a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>"><?php echo $mainnews[1]; ?></a></h3>
</div>
<div class="entry-image">
<a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>"><img class="image_fade" src="<?php echo "$baseurl/newsimages/$mainnews[2]"; ?>" alt="Image" style="opacity: 1;"></a>


</div>

<ul class="entry-meta">
<li><i class="fa fa-calendar"></i> <?php echo $ctntm; ?></li>
</ul>
<div class="catnm"><?php catName($mainnews[0]); ?></div>

<div class="entry-content">
<p><a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>" style="color:#000;"> <?php echo $mainnewstxt; ?> ...</a></p><br><br>
</div>
</div>


</div>
<!-- =================5====================== -->

<?php
if($i%2 == 0){
?>

</div>


<?php
if ($i%4==0) {
 showadds(0,1); 
}
?>


<div class="row">

  
<?php
}

$i++;
}
}
?>







</div><!-- row -->



<?php showadds(0,1); ?>


                <!-- left content inner -->

            </div>
            <!-- /.left content inner -->








<div class="col-md-4 col-sm-4 left-padding">
<?php 
include('include-right-top.php');
?>

<?php showadds(0,2); ?>


<!-- ARCHIVE -->

<h3 class="category-headding ">ARCHIVE</h3>
<div class="headding-border"></div>
<div id="datepicker"></div>
<div style="margin-top: 20px;"></div>

<!-- ARCHIVE -->



<?php showadds(0,3); ?>
</div>









        </div>
        <!-- row end -->
    </div>
    <!-- container end -->








<?php
include('include-footer.php');
?>





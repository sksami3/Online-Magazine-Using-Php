<?php
include('include-global.php');
$titleOfMe = "$basetitle";
include('include-header.php');
?>





    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">


<div class="row">



<!-- =================1====================== -->

 <?php
$mainnews = mysql_fetch_array(mysql_query("SELECT id, ttl, thumb, btext, desk, cros, tm FROM news WHERE main='1' AND hide='0' ORDER BY id DESC"));
$mainnewstxt = strip_tags(implode(' ', array_slice(explode(' ', $mainnews[3]), 0, 24)));
?> 
<div class="col-md-8 col-sm-8">


<div class="ipost clearfix">
<div class="entry-title">
<h2><a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>"><?php echo $mainnews[1]; ?></a></h2>
</div>
<div class="entry-image">
<a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>"><img class="image_fade" src="<?php echo "$baseurl/newsimages/$mainnews[2]"; ?>" alt="Image" style="opacity: 1;"></a>
</div>



<div class="entry-content">



<p><a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>" style="color:#000;"> <?php echo $mainnewstxt; ?> ...</a></p>
</div>
</div>



</div>
<!-- =================1====================== -->








<!-- =================2====================== -->
 <?php
$mainnews = mysql_fetch_array(mysql_query("SELECT id, ttl, thumb, btext, desk, cros, tm FROM news WHERE main='2' AND hide='0' ORDER BY id DESC"));
$mainnewstxt = strip_tags(implode(' ', array_slice(explode(' ', $mainnews[3]), 0, 38)));
?> 
<div class="col-md-4 col-sm-4">



<div class="ipost clearfix">
<div class="entry-title">
<h3><a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>"><?php echo $mainnews[1]; ?></a></h3>
</div>
<div class="entry-image">
<a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>"><img class="image_fade" src="<?php echo "$baseurl/newsimages/$mainnews[2]"; ?>" alt="Image" style="opacity: 1;"></a>
</div>
<div class="entry-content">
<p><a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>" style="color:#000;"> <?php echo $mainnewstxt; ?> ...</a></p>
</div>
</div>


</div>
<!-- =================2====================== -->




</div><!-- row -->



<div class="row" style="margin-top: 20px;">

<!-- =================3====================== -->
 <?php
$mainnews = mysql_fetch_array(mysql_query("SELECT id, ttl, thumb, btext, desk, cros, tm FROM news WHERE main='3' AND hide='0' ORDER BY id DESC"));
$mainnewstxt = strip_tags(implode(' ', array_slice(explode(' ', $mainnews[3]), 0, 28)));
?> 

<div class="col-md-4 col-sm-4">


<div class="ipost clearfix">
<div class="entry-title">
<h3><a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>"><?php echo $mainnews[1]; ?></a></h3>
</div>
<div class="entry-image">
<a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>"><img class="image_fade" src="<?php echo "$baseurl/newsimages/$mainnews[2]"; ?>" alt="Image" style="opacity: 1;"></a>
</div>
<div class="entry-content">
<p><a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>" style="color:#000;"> <?php echo $mainnewstxt; ?> ...</a></p>
</div>
</div>


</div>
<!-- =================3====================== -->








<!-- =================4====================== -->
 <?php
$mainnews = mysql_fetch_array(mysql_query("SELECT id, ttl, thumb, btext, desk, cros, tm FROM news WHERE main='4' AND hide='0' ORDER BY id DESC"));
$mainnewstxt = strip_tags(implode(' ', array_slice(explode(' ', $mainnews[3]), 0, 28)));
?> 
<div class="col-md-4 col-sm-4">


<div class="ipost clearfix">
<div class="entry-title">
<h3><a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>"><?php echo $mainnews[1]; ?></a></h3>
</div>
<div class="entry-image">
<a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>"><img class="image_fade" src="<?php echo "$baseurl/newsimages/$mainnews[2]"; ?>" alt="Image" style="opacity: 1;"></a>
</div>
<div class="entry-content">
<p><a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>" style="color:#000;"> <?php echo $mainnewstxt; ?> ...</a></p>
</div>
</div>


</div>
<!-- =================4====================== -->





<!-- =================5====================== -->
 <?php
$mainnews = mysql_fetch_array(mysql_query("SELECT id, ttl, thumb, btext, desk, cros, tm FROM news WHERE main='5' AND hide='0' ORDER BY id DESC"));
$mainnewstxt = strip_tags(implode(' ', array_slice(explode(' ', $mainnews[3]), 0, 28)));
?> 
<div class="col-md-4 col-sm-4">


<div class="ipost clearfix">
<div class="entry-title">
<h3><a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>"><?php echo $mainnews[1]; ?></a></h3>
</div>
<div class="entry-image">
<a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>"><img class="image_fade" src="<?php echo "$baseurl/newsimages/$mainnews[2]"; ?>" alt="Image" style="opacity: 1;"></a>
</div>
<div class="entry-content">
<p><a href="<?php echo "$baseurl/article/$mainnews[0]"; ?>" style="color:#000;"> <?php echo $mainnewstxt; ?> ...</a></p>
</div>
</div>


</div>
<!-- =================5====================== -->




</div><!-- row -->



<?php 
showadds(0,1);
?>


                <!-- left content inner -->

            </div>
            <!-- /.left content inner -->








<div class="col-md-4 col-sm-4 left-padding">
<?php 
include('include-right-top.php');
?>
</div>









        </div>
        <!-- row end -->
    </div>
    <!-- container end -->

<!-- ############################# 2nd row ################################ -->

    <!-- second content -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">





<?php
$ddaa = mysql_query("SELECT id, cnm, mnm FROM cats WHERE hide='0' ORDER BY id LIMIT 0,4");
while ($data = mysql_fetch_array($ddaa)){ 
?>


<div class="row">
<div class="col-sm-12 col-md-12">


<div class="fancy-title title-border">
<h3 style="text-transform: uppercase;"><?php echo $data[2]; ?></h3>
</div>

<?php
$cthd = mysql_fetch_array(mysql_query("SELECT id, ttl, thumb, btext, tm FROM news WHERE hide='0' AND cats='".$data[0]."' ORDER BY id DESC LIMIT 0,1"));

$cttxt = strip_tags(implode(' ', array_slice(explode(' ', $cthd[3]), 0, 32)));
$cttm = date("jS F, Y | H:i:s A",$cthd[4]);
?>



<div class="ipost clearfix">
<div class="col_half bottommargin-sm">
<div class="entry-image">
<a href="<?php echo "$baseurl/article/$cthd[0]"; ?>"><img class="image_fade" src="<?php echo "$baseurl/newsimages/$cthd[2]"; ?>" alt="Image" style="opacity: 1;"></a>
</div>
</div>
<div class="col_half bottommargin-sm col_last">
<div class="entry-title">
<h3><a href="<?php echo "$baseurl/article/$cthd[0]"; ?>"><?php echo $cthd[1]; ?></a></h3>
</div>
<div class="entry-content">

<p><a href="<?php echo "$baseurl/article/$cthd[0]"; ?>" style="color:#000;"> <?php echo $cttxt; ?> ...</a></p>
</div>
</div>
</div>



<div class="clear"></div>



<?php

$ctnws = mysql_query("SELECT id, ttl, thumb, tm FROM news WHERE hide='0' AND cats='".$data[0]."' ORDER BY id DESC LIMIT 1,4");
echo mysql_error();
while ($dtaa = mysql_fetch_array($ctnws))
{ 
$ctntm = date("jS F, Y | H:i:s A",$dtaa[3]);
?>




<div class="col-md-6" style="margin-bottom: 20px;">

<div class="spost clearfix">
<div class="entry-image">
<a href="<?php echo "$baseurl/article/$dtaa[0]"; ?>"><img src="<?php echo "$baseurl/newsimages/$dtaa[2]"; ?>" alt=""></a>
</div>
<div class="entry-c">
<div class="entry-title">
<h4><a href="<?php echo "$baseurl/article/$dtaa[0]"; ?>"><?php echo $dtaa[1]; ?></a></h4>
</div>
<ul class="entry-meta">
<li><i class="fa fa-calendar"></i> <?php echo $ctntm; ?></li>
</ul>
</div>
</div>
<br>


</div>
<?php
}
?>

</div>
</div><!-- row -->

<?php
showadds(0,1); 
}
?>
  












                    
                </div><!-- left end  col-8 -->







<div class="col-md-4 col-sm-4 left-padding">
<aside>
<?php 
include('include-right-btm.php');
?>
</aside>
</div>




            </div>
        </div>
    </section>
    <!-- second content end -->






<!-- all category  news ============================================ -->

<section>
<div class="container">
<div class="row">






<?php
$ddaa = mysql_query("SELECT id, cnm, mnm FROM cats WHERE hide='0' ORDER BY id LIMIT 6,6");
while ($data = mysql_fetch_array($ddaa)){ 
?>


<div class="col-md-4">


<div class="fancy-title title-border">
<h3 style="text-transform: uppercase;"><?php echo $data[2]; ?></h3>
</div>



<?php

$ctnws = mysql_query("SELECT id, ttl, thumb, tm FROM news WHERE hide='0' AND cats='".$data[0]."' ORDER BY id DESC LIMIT 0,4");
while ($dtaa = mysql_fetch_array($ctnws)){ 
$ctntm = date("jS F, Y | H:i:s A",$dtaa[3]);
?>




<div class="col-md-12" style="margin-bottom: 20px;">

<div class="spost clearfix">
<div class="entry-image">
<a href="<?php echo "$baseurl/article/$dtaa[0]"; ?>"><img src="<?php echo "$baseurl/newsimages/$dtaa[2]"; ?>" alt=""></a>
</div>
<div class="entry-c">
<div class="entry-title">
<h4><a href="<?php echo "$baseurl/article/$dtaa[0]"; ?>"><?php echo $dtaa[1]; ?></a></h4>
</div>
<ul class="entry-meta">
<li><i class="fa fa-calendar"></i> <?php echo $ctntm; ?></li>
</ul>
</div>
</div>
<br>


</div>
<?php
}
?>

</div><!-- md-4 -->

<?php
}
?>
  











</div>
</div>
</section>






<?php
include('include-footer.php');
?>
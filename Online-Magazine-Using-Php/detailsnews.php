<?php
include('include-global.php');

$nid = $_GET['newsid'];

$cat = mysql_fetch_array(mysql_query("SELECT cats FROM news WHERE id = '$nid'"));

$newsdtls = mysql_fetch_array(mysql_query("SELECT id, ttl, img, btext, desk, cros, tm, cats, hits FROM news WHERE id='".$nid."'"));

////---------->> HITS
$nht = $newsdtls[8]+1;
mysql_query("UPDATE news SET hits='".$nht."' WHERE id='".$nid."'");
////---------->> HITS

$tmmm = date("h:i A, F d, Y", $newsdtls[6]);

$ogimg = "$baseurl/newsimages/$newsdtls[2]";

$titleOfMe = "$newsdtls[1] - $basetitle";
?>

 <style type="text/css" media="print">
        @page 
        {
            size: auto;   /* auto is the current printer page size */
            margin: 10mm;  /* this affects the margin in the printer settings */
        }

        body 
        {
            background-color:#FFFFFF;        
            margin: 10px;  /* the margin on the content before printing */
      padding: 20px;
       }

@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}

    </style>
  <script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
</script>
<?php
include('include-header.php');
?>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1421567158073949";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>









    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">

            <!-- AddToAny BEGIN -->
<div class="pull-right" style="margin-top: -44px;">
<a class="a2a_dd" href="https://www.addtoany.com/share">  <button class="btn btn-sm" style="background: #<?php echo $basecolor; ?>; color:#fff;"> Share </button></a>
<script async src="https://static.addtoany.com/menu/page.js"></script>
</div>
<!-- AddToAny END -->


<div id="print">



<h3> <strong><?php echo $newsdtls[1]; ?></strong></h3>

<hr>
<strong>
<?php echo $newsdtls[4]; ?>,<?php echo $newsdtls[5]; ?> |  Published:  <?php echo $tmmm; ?><br><br>




</strong>

<div class="row">

<div class="col-md-12 col-sm-12">
<div class="post-wrapper wow fadeIn" data-wow-duration="1s">

<div class="post-thumb">
<img class="img-responsive" src="<?php echo "$baseurl/newsimages/$newsdtls[2]"; ?>" alt="IMG">
</div>

</div>
<div class="post-title-author-details">

<p style="color: #000;"><?php echo $newsdtls[3]; ?></p><br><br><br>
</div>
</div>





</div><!-- row -->
</div>

<div class="pull-right" style="margin-top:0px;">
<a href="" onclick="printContent('print')" class="btn btn-sm"  style="background: #<?php echo $basecolor; ?>; color:#fff;"><i class="fa fa-print"></i> Print</a>
</div>
<br>

<?php showadds($cat[0], 1) ?>
<br><br>




<?php
$data = mysql_fetch_array(mysql_query("SELECT cnm, mnm FROM cats WHERE id='".$newsdtls[7]."'"));
?>






<div class="row">



<div  style="background: #f6f6f6;">
<div class="fb-comments" data-href="<?php echo "$baseurl/article/$nid"; ?>" data-width="100%" data-numposts="5"></div>
</div>
</div>








                <!-- left content inner -->

            </div>
            <!-- /.left content inner -->








<div class="col-md-4 col-sm-4 left-padding">
<?php 
include('include-right-top3.php');
?>
<?php showadds($cat[0], 2) ?>
<?php showadds($cat[0], 3) ?>
</div>









        </div>
        <!-- row end -->
    </div>
    <!-- container end -->








<?php
include('include-footer.php');
?>
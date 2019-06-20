<?php
include('include-global.php');
$cnm = mysql_real_escape_string($_GET['cnm']);
$newsdtls = mysql_fetch_array(mysql_query("SELECT id, mnm FROM cats WHERE cnm='".$cnm."'"));
$titleOfMe = "$newsdtls[1] - $basetitle";
include('include-header2.php');


//--------------------->> Page Number

$newsPerPage = mysql_fetch_array(mysql_query("SELECT pageat FROM general_setting WHERE id='1'"));
$ttl = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM news WHERE cats='".$newsdtls[0]."'"));
$tpg = ceil($ttl[0]/$newsPerPage[0]);


if (isset($_GET['page'])) {
$page=mysql_real_escape_string($_GET["page"]);
}else{
$page=0;
}

if($page<="0" || $page==""){
$page = 1;
}


$start = $page*$newsPerPage[0]-$newsPerPage[0];
//echo "$page - $tpg - $start ";
?>





    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">






<div class="row">


 
 <?php
$i = 1;
$ddaa = mysql_query("SELECT id, ttl, thumb, btext, tm FROM news WHERE hide='0' AND cats='".$newsdtls[0]."' ORDER BY id DESC LIMIT ".$start.",".$newsPerPage[0]."");
    echo mysql_error();
    while ($mainnews = mysql_fetch_array($ddaa))
    { 
$ctntm = date("jS F, Y | H:i:s A",$mainnews[4]);
$mainnewstxt = strip_tags(implode(' ', array_slice(explode(' ', $mainnews[3]), 0, 32)));
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

showadds($newsdtls[0], 1);
echo "<br>";
}
?>


<div class="row">

  
<?php
}

$i++;
}
?>


</div><!-- row -->

<div class="row">
<div class="text-center">
    <ul class="pagination">


<?php 
$prevnum=$page-1;
$prev ="<li> <a href=\"$baseurl/$cnm/$prevnum\"> &lt;&lt;</a> </li>";
if($page<="1"){
$prev ="<li class=\"disabled\"> <a href=\"#\"> &lt;&lt;</a> </li>";
}

echo $prev;


$pSt = $page-2;
if ($pSt<=1) {
$pSt = 1;
}



$pEnd = $pSt+4;
if ($pEnd > $tpg) {
$pEnd = $tpg;
}

$pSt = $pEnd-4;
if ($pSt<=1) {
$pSt = 1;
}

while ($pSt <= $pEnd) {

if ($pSt==$page) {
echo "<li class=\"active\"><a href=\"#\"> $pSt</a> </li> ";
}else{
echo "<li><a href=\"$baseurl/$cnm/$pSt\"> $pSt</a> </li> ";
}

$pSt++;
}









$nextnum=$page+1;
$next ="<li> <a href=\"$baseurl/$cnm/$nextnum\">&gt;&gt;</a> </li> ";
if($page>=$tpg){
$next ="<li class=\"disabled\"> <a href=\"#\">&gt;&gt;</a> </li> ";
}

echo $next;
?>





</ul>
</div>

</div><!-- row -->



<?php 
showadds($newsdtls[0], 1);
 ?>


                <!-- left content inner -->

            </div>
            <!-- /.left content inner -->








<div class="col-md-4 col-sm-4 left-padding">
<?php 
include('include-right-top2.php');
include('include-right-btm2.php');
?>
</div>









        </div>
        <!-- row end -->
    </div>
    <!-- container end -->








<?php
include('include-footer.php');
?>
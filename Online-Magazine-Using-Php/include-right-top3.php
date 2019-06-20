<?php 
showadds($cat[0], 2);
?>

<div class="widget widget_links clearfix">

<h4>More From <?php echo $data[1]; ?> Category</h4>


<?php
$ddaa = mysql_query("SELECT id, ttl, tm, thumb FROM news WHERE hide='0' AND cats='".$newsdtls[7]."' AND id<>$nid ORDER BY id DESC   LIMIT 0,6");
echo mysql_error();
while ($data = mysql_fetch_array($ddaa))
{

$ctntm = date("jS F, Y | H:i:s A",$data[2]);
?>


<div class="spost clearfix">

<div class="entry-image">
<a href="<?php echo "$baseurl/article/$data[0]"; ?>"><img src="<?php echo "$baseurl/newsimages/$data[3]"; ?>" alt=""></a>

</div>
<div class="entry-c">
<div class="entry-title">
<h4><a href="<?php echo "$baseurl/article/$data[0]"; ?>"><?php echo $data[1]; ?></a></h4>
</div>
<ul class="entry-meta">
<li><i class="fa fa-calendar"></i> <?php echo $ctntm; ?></li>
</ul>
</div>
</div>


<?php
}
?>  

<br>

</div>
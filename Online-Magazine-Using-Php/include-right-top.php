<?php 
showadds(0, 2);
?>

<div class="widget widget_links clearfix">

<h4>MOST RECENT</h4>


<?php
$ddaa = mysql_query("SELECT id, ttl, tm, thumb FROM news WHERE hide='0' ORDER BY id DESC LIMIT 0,6");
echo mysql_error();
while ($data = mysql_fetch_array($ddaa))
{

$ctntm = date("jS F, Y | H:i:s A",$data[2]);
?>


<div class="spost clearfix">

<div class="entry-image">
<a href="<?php echo "$baseurl/article/$data[0]"; ?>"><img src="<?php echo "$baseurl/newsimages/$data[3]"; ?>" alt=""></a>

</div>
<div class="entry-c"><div class="catnm"><?php catName($data[0]); ?></div>
<div class="entry-title">
<h4><a href="<?php echo "$baseurl/article/$data[0]"; ?>"><?php echo $data[1]; ?></a></h4>
</div>
</div>
</div>


<?php
}
?>  

<br>

</div>

<?php 
showadds(0, 2); ?>

<!-- ARCHIVE -->

<h3 class="category-headding ">ARCHIVE</h3>
<div class="headding-border"></div>
<div id="datepicker"></div>
<div style="margin-top: 20px;"></div>

<!-- ARCHIVE -->


<?php 
showadds(0, 3); 
?>



<?php
$data = mysql_fetch_array(mysql_query("SELECT id, cnm, mnm FROM cats WHERE hide='0' AND id='5'"));
?>
<div class="row">
<div class="col-sm-12 col-md-12">
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
</div>
</div><!-- row -->

  
<?php 
showadds(0, 2);
?>







<?php
$data = mysql_fetch_array(mysql_query("SELECT id, cnm, mnm FROM cats WHERE hide='0' AND id='6'"));
?>
<div class="row">
<div class="col-sm-12 col-md-12">
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
</div>
</div>
<!-- row -->

  





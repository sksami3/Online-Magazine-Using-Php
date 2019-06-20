<?php
include ('include/header.php');
?>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
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
                    <h3 class="page-title"> Add New News<small></small></h3>
                    <!-- END PAGE TITLE-->

					<hr>

					
					
					
					
					
			<div class="row">
			<div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
               <form class="form-horizontal" action="" method="post" role="form" enctype="multipart/form-data">
                                        <div class="form-body">

		   
<?php



if($_POST)
{

$ttl = mysql_real_escape_string($_POST["ttl"]);
$btext = mysql_real_escape_string($_POST["btext"]);
$desk = mysql_real_escape_string($_POST["desk"]);
$cros = mysql_real_escape_string($_POST["cros"]);

$pos = $_POST["pos"];



// ------Grab comma separated value-----

    $cat = $_POST["cat"];
    $arr = explode(',', $cat);
    
    $catid = $arr['0'];
    $subcat = $arr['1'];

    



///-------------------->> reset Position
mysql_query("UPDATE news SET main='0' WHERE main='".$pos."'");
///-------------------->> reset Position






// IMAGE UPLOAD //////////////////////////////////////////////////////////


if (empty($_FILES['bgimg']['name'])) {
$bgimg = "default.jpg";
$thumb = "thumb_default.jpg";
}else{

	$folder = "../newsimages/";
	$extention = strrchr($_FILES['bgimg']['name'], ".");


$dt = date("YmdHis", $tm);
$random = rand(1000,9999);
$fnm = $_FILES['bgimg']['name'];
	
	$string = strtolower($fnm);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", "", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "_", $string);
    $ok = substr("$string", 0, -3);
	
$fnl = "$dt$random$ok"."levcon";

	$new_name = $fnl;
	$bgimg = $new_name.'.jpg';
	$uploaddir = $folder . $bgimg;
	move_uploaded_file($_FILES['bgimg']['tmp_name'], $uploaddir);
//////////////////////////////////////////////////////////////////////////



//------------------>>> RESIZE
include_once("abirimageclass.php");

$target_file = $folder.$bgimg;
$resized_file = $folder.'thumb_'.$bgimg;
$wmax = 400;
$hmax = 260;
$ext = ".jpg";
ak_img_resize($target_file, $resized_file, $wmax, $hmax, $ext);

$thumb = $resized_file;
//------------------>>> RESIZE

}




$err1=0;
$err2=0;
$err3=0;


if(trim($ttl)==""){
$err1=1;
}

if(trim($btext)==""){
$err2=1;
}


$error = $err1+$err2;


if ($error == 0){
	
$res = mysql_query("INSERT INTO news SET ttl='".$ttl."', img='".$bgimg."', thumb='".$thumb."', btext='".$btext."',  desk='".$desk."',  cros='".$cros."',  cats='".$catid."', subcat='".$subcat."',  tm='".$tm."',  who='".$uid."',  main='".$pos."',  hide='0'");
echo mysql_error();
if($res){
	
	
echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Added Successfully! 

</div>";
}else{
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Some Problem Occurs, Please Try Again. 

</div>";
}
} else {
	
if ($err1 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Title Can Not be Empty!!!

</div>";
}		
	
if ($err2 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

News Text Can Not be Empty!!!

</div>";
}		

if ($err3 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

You have to choose a Catagorey!!!

</div>";
}		

}




}

?>										
										
										
										
										
										
										
					<div class="form-group">
                    <label class="col-md-2"><strong>News Title</strong></label>
                    <div class="col-md-10">
                     <input class="form-control input-lg" name="ttl" placeholder="Head Line ....." type="text">
                    </div>
                    </div>
                     
						
                    <div class="form-group">
                    <label class="col-md-2"><strong>News Category</strong></label>
                    <div class="col-md-10">
                     
<select name="cat" id="" class="form-control">
            <option value="">Select Category</option>
        <?php $cat = mysql_query("SELECT * FROM cats");

        while ($cats = mysql_fetch_array($cat)) { ?> 
            <option value="<?php echo $cats['id']; ?>,0"><?php echo $cats['mnm']; ?></option>

        <?php   
             $sub = mysql_query("SELECT * FROM subcat WHERE catid = '$cats[0]'");

            while ($subs = mysql_fetch_array($sub)) { ?>


            <option value="<?php echo $cats['id']; ?>,<?php echo $subs['id'];?>">&nbsp;&nbsp;--<?php echo $subs['name']; ?></option>



            <?php }
            
         } ?>
        </select>



                    </div>
                    </div>

					<div class="form-group">
                    <label class="col-md-2"><strong>Featured Image</strong></label>
                    <div class="col-md-6">
                    <input name="bgimg" type="file" id="bgimg" />
                    </div>
					<br/><br/><br/>
                    </div>
                     
					 
					 
					 
					<div class="form-group">
                    <label class="col-md-2"><strong>Details News</strong></label>
                    <div class="col-md-10">
                    <textarea id="shaons" class="form-control" rows="10" name="btext"></textarea>
                    </div>
                    </div>
 
	                <div class="form-group">
                    <label class="col-md-2"><strong>DESK</strong></label>
                    <div class="col-md-10">
                     <input class="form-control input-lg" name="desk" placeholder="EX: Online Desk" type="text">
                    </div>
                    </div>
 
 
	                <div class="form-group">
                    <label class="col-md-2"><strong>Correspondent</strong></label>
                    <div class="col-md-10">
                     <input class="form-control input-lg" name="cros" placeholder="EX: News Agency" type="text">
                    </div>
                    </div>
 
   
   
   
                    <div class="form-group">
                    <label class="col-md-2"><strong>Position</strong></label>
                    <div class="col-md-10">
                    
<select class="form-control input-lg" name="pos">
<option value="0">NORMAL NEWS</option>
<option value="1">1st Position - Headline</option>
<option value="2">2nd Position - Right Side of Headline</option>
<option value="3">3rd Position - Bottom Left of Headline</option>
<option value="4">4th Position - Bottom center of Headline</option>
<option value="5">5th Position - Bottom right of Headline</option>

</select>
                    </div>
                    </div>






 
 
 
 <div style="margin-top:60px;"></div>
 
 

					 
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-6">
                                                    <button type="submit" class="btn blue btn-block">Submit</button>
                                                </div>
                                            </div>
											
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>		
                        </div><!---ROW-->		
					
					
					
					
					
					
			
					
					
					
					
					
					
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
			


<?php
 include ('include/footer.php');
 ?>
       
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->


</body>
</html>
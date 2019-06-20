<?php
include ('include/header.php');
if($usid[2]!=100){
redirect('home.php');
}
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
                    <h3 class="page-title"><i class="fa fa-cogs"></i> General Setting
                        <small></small>
                    </h3>
                    <!-- END PAGE TITLE-->

					<hr>

					
					
					
					
			<div class="row">
			<div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form class="form-horizontal" action="" method="post" role="form">
                                        <div class="form-body">

		   
<?php

if($_POST)
{



//------------------------------->> Post The Form Value
$name = mysql_real_escape_string($_POST["name"]);
$wcmsg = mysql_real_escape_string($_POST["btext"]);
$pageat = mysql_real_escape_string($_POST["pageat"]);
$color = mysql_real_escape_string($_POST["color"]);



//------------------------------->> Post The Form Value

//------------------------------->> CONDITIONS

$err1=0;
$err2=0;

if(trim($name)=="")
      {
$err1=1;
}

//------------------------------->> CONDITIONS

$error = $err1+$err2;


if ($error == 0){
	

$res = mysql_query("UPDATE general_setting SET sitetitle='".$name."', wcmsg='".$wcmsg."', pageat='".$pageat."', color='".$color."' WHERE id='1'");
if($res){
	
	
echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	
Updated Successfully! 
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

Site Name Can Not be Empty!!!

</div>";
}   

	
}

}


$old = mysql_fetch_array(mysql_query("SELECT sitetitle, wcmsg, pageat, color FROM general_setting WHERE id='1'"));
?>										
										
										
										
										


<div class="form-group">
<label class="col-md-2 control-label"><strong>Website Name</strong></label>
<div class="col-md-5">
<input class="form-control input-lg" name="name" value="<?php echo $old[0]; ?>" type="text">
</div>
</div>


<div class="form-group">
<label class="col-md-2 control-label"><strong>BASE COLOR CODE</strong></label>
<div class="col-md-5">
<div class="input-group mb15">
<span class="input-group-addon" style="background: #<?php echo $old[3]; ?>; color:#fff;">#</span>
<input class="form-control input-lg" name="color" required="" value="<?php echo $old[3]; ?>" type="text">
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-2 control-label"><strong>NEWS PER PAGE</strong></label>
<div class="col-md-5">
<input class="form-control input-lg" name="pageat" value="<?php echo $old[2]; ?>" type="text">
</div>
<div class="col-md-3">
<b style="color:red;"> 10 Recomanded </b>
</div>
</div>

<br>
<br>
<br>

<div class="form-group">
<label class="col-md-2 control-label"><strong>Footer Text</strong></label>
<div class="col-md-10">
<textarea id="shaons" class="form-control" rows="10" name="btext"><?php echo $old[1]; ?></textarea>
</div>
</div>
                     
                  

					 
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
        <script>
        
    
        
        </script>
        
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

</body>
</html>
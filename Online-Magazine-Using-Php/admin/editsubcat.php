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
                    <h3 class="page-title"> Edit Sub Category
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
$iidd = $_GET['id'];


if($_POST)
{


$cat = $_POST["cat"];
$name = $_POST["name"];
$cnm = $_POST["cnm"];

$err1=0;
$err2=0;
$err3=0;




if(trim($cat)=="")
      {
$err1=1;
}

if(trim($name)=="")
      {
$err2=1;
}

$uuu = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM subcat WHERE cnm='".$cnm."' AND id<>$iidd"));
if($uuu[0]!=0){
$err3=1;
}


$error = $err1+$err2+$err3;


if ($error == 0){
    
$res = mysql_query("UPDATE subcat SET catid='".$cat."', name='".$name."' , cnm='".$cnm."' WHERE id='".$iidd."'");
echo mysql_error();
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

Category Name Can Not be Empty!!!

</div>";
}       
    
if ($err2 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    

Menu Bar Name Can Not be Empty!!!

</div>";
}       


if ($err3 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    

URL TEXT ALREADY EXIST !!!!

</div>";
}   


}




}


$old = mysql_fetch_array(mysql_query("SELECT catid, name, cnm FROM subcat WHERE id='".$iidd."'"));
?>										
										
										
										
										
					<div class="form-group">
                    <label class="col-md-3 control-label"><strong>Select Category</strong></label>
                    <div class="col-md-6">
                    <select class="form-control" name="cat" required>
<?php $oldcat = mysql_fetch_array(mysql_query("SELECT id, mnm FROM cats WHERE id = '$old[0]'")) ?>

                    <option value="<?php echo $oldcat[0]; ?>"><?php echo $oldcat[1]; ?></option>
                    <?php $sel = mysql_query("SELECT id, mnm FROM cats");
                    while ($cat=mysql_fetch_array($sel)) { ?>
                         
                      <option value="<?php echo $cat[0]; ?>"><?php echo $cat[1]; ?></option>               
                 <?php    } ?>
                    </select>
                    </div>
                    </div>              
                                        
                                        
                                        
                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Sub Category Name(FOR URL)</strong></label>
                    <div class="col-md-6">
                     <input value="<?php echo $old[2];?>" class="form-control input-lg" name="cnm" placeholder="(FOR URL, All Small Letter, No Space) Ex: national, cricket" type="text">
                    </div>
                    </div>			




									
					<div class="form-group">
                    <label class="col-md-3 control-label"><strong>Menu Bar Name</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" value="<?php echo $old[1];?>" name="name" placeholder="As you want to show" type="text" required="">
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


</body>
</html>
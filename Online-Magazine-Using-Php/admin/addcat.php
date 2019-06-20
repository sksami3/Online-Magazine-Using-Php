<?php
include ('include/header.php');

if($usid[2]!=100){
redirect('home.php');
}
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
                    <h3 class="page-title"> Add New Category
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

$cnm = $_POST["cnm"];
$mnm = $_POST["mnm"];


$err1=0;
$err2=0;




if(trim($cnm)=="")
      {
$err1=1;
}

if(trim($mnm)=="")
      {
$err2=1;
}


$error = $err1+$err2;


if ($error == 0){
	
$res = mysql_query("INSERT INTO cats SET cnm='".$cnm."', mnm='".$mnm."'");
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

Category Name Can Not be Empty!!!

</div>";
}		
	
if ($err2 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Menu Bar Name Can Not be Empty!!!

</div>";
}		

}




}

?>										
										
										
										
										
										
										
					<div class="form-group">
                    <label class="col-md-3 control-label"><strong>Category Name</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="cnm" placeholder="(FOR URL, All Small Letter, No Space) Ex: national, cricket" type="text">
                    </div>
                    </div>
                     
										
					<div class="form-group">
                    <label class="col-md-3 control-label"><strong>Menu Bar Name</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="mnm" placeholder="Ex: National News " type="text">
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
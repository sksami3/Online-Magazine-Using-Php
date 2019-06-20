<?php
include ('include/header.php');
?>

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
		
		
		
		</head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        
		
	
<?php
include ('include/sidebar.php');
?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> View All Advirtisement <small></small></h3>
					<hr>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    
<?php

if(isset($_GET['hide'])) {
$id = $_GET['id']; 
$act = $_GET['act']; 
mysql_query("UPDATE adds SET hide='".$act."' WHERE id='".$id."'");
//echo mysql_error();
}

?>




              
<?php

     
//------------------------------------------->>> DELETE             

if(isset($_GET['did'])) {
$did = $_GET["did"];
$exist = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM adds WHERE id='".$did."'"));
if($exist[0]>=1){
    
$res = mysql_query("DELETE FROM adds WHERE id='".$did."'");

if($res){
echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    
DELETED Successfully! 
</div>";
}else{
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    
Some Problem Occurs, Please Try Again. 
</div>";
}
}else{
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    
NOT FOUND IN DATABASE (MAY ALREADY DELETED)
</div>";
}   
}
//------------------------------------------->>> DELETE         



?>		


					
					
					
                    <div class="row">
                        <div class="col-md-12">
                            
							
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <!--i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">AAA</span-->
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>

										
										
<tr>
<th> ID# </th>
<th> Image </th>
<th> Size </th>
<th> URL </th>
<th> Engaged </th>
<th> Action </th>
</tr>

</thead><tbody>

<?php
$ddaa = mysql_query("SELECT id, image, isize, hide, hit, uri FROM adds ORDER BY id");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {

/*
		
	if($data[3]!=0){
$hidebtn = "<a href=\"?id=$data[0]&amp;act=0&amp;hide=levcon\"><button class=\"btn green btn-xs\"> <i class=\"fa fa-unlock\"></i> SHOW </button></a>";	
}else{
$hidebtn = "<a href=\"?id=$data[0]&amp;act=1&amp;hide=levcon\"><button class=\"btn red btn-xs\"> <i class=\"fa fa-lock\"></i> HIDE </button></a>";
}		
*/


$hidebtn = "<a href=\"?did=$data[0]\"><button class=\"btn red btn-xs\"> <i class=\"fa fa-times\"></i> DELETE </button></a>";


if($data[2]==1){
$size = "<p class=\"btn blue btn-xs\">728X90</p>";	
}else if($data[2]==2){
$size = "<p class=\"btn blue btn-xs\">300X250</p>";		
}else  if($data[2]==3){
$size = "<p class=\"btn blue btn-xs\">300X600</p>";	
}else {
$size = "<p class=\"btn blue btn-xs\">Unknown</p>";	
}	
	
 echo "                                
 <tr>
 
   <td>$data[0]</td>
   <td><img src=\"../addimages/$data[1]\" style=\"width:100px; \" alt=\"Add\"></td>
   <td>$size</td>
   <td>$data[5]</td>
   <td>$data[4]</td>
   <td>$hidebtn</td>
   


</tr>";
	
	}
	
//$edt = "<a href=\"editcat.php?id=$data[0]\"><button class=\"btn purple btn-xs\"> <i class=\"fa fa-edit\"></i> EDIT</button></a>";
	
?>
				
			

                                            

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                            
                        </div>
                    </div><!-- ROW-->
					
					
					
					
					
			
			
		
					
					
					
					
					
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
            
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
      <?php
 include ('include/footer.php');
 ?>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
		
		 <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
 
 </body>
</html>
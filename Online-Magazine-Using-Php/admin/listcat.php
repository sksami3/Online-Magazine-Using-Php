<?php
include ('include/header.php');
if($usid[2]!=100){
redirect('home.php');
}
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
                    <h3 class="page-title"> View Category <small></small></h3>
					<hr>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    
<?php

if(isset($_GET['id'])) {
	
$id = $_GET['id']; 
$act = $_GET['act']; 

mysql_query("UPDATE cats SET hide='".$act."' WHERE id='".$id."'");
//echo mysql_error();
}
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
<th> Category Name </th>
<th> Menubar Text </th>
<th> Action </th>
</tr>

</thead><tbody>

<?php
$ddaa = mysql_query("SELECT id, cnm, mnm, isl, msl, hide FROM cats ORDER BY id");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {
		
	if($data[5]!=0){
$hidebtn = "<a href=\"?id=$data[0]&amp;act=0\"><button class=\"btn green btn-xs\"> <i class=\"fa fa-unlock\"></i> SHOW </button></a>";	
}else{
$hidebtn = "<a href=\"?id=$data[0]&amp;act=1\"><button class=\"btn red btn-xs\"> <i class=\"fa fa-lock\"></i> HIDE </button></a>";
}	
		
 echo "                                
 <tr>
 
   <td>$data[0]</td>
   <td>$data[1]</td>
   <td>$data[2]</td>
   <td>
   <a href=\"editcat.php?id=$data[0]\"><button class=\"btn purple btn-xs\"> <i class=\"fa fa-edit\"></i> EDIT</button></a>
   $hidebtn
   </td>
   


</tr>";
	
	}
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
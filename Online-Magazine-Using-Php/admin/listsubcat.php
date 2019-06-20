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
<th> Category</th>
<th> Sub Category </th>
<th> Action </th>
</tr>

</thead><tbody>

<?php
$ddaa = mysql_query("SELECT id, catid, name, cnm FROM subcat ORDER BY id");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {
		
$catn = mysql_fetch_array(mysql_query("SELECT mnm, cnm FROM cats WHERE id = '$data[1]'"));
   		
 echo "                                
 <tr>
 
   <td>$data[0]</td>
   <td><b>$catn[0]</b> <small>$baseurl/$catn[1]</small></td>
   <td><b>$data[2]</b>  <small>$baseurl/subcat/$data[3]</small></td>
   <td>
   <a href=\"editsubcat.php?id=$data[0]\"><button class=\"btn purple btn-xs\"> <i class=\"fa fa-edit\"></i> EDIT</button></a>
   
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
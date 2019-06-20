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
                    <h3 class="page-title"> View All News Posted By ME <small></small></h3>
					<hr>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    
<?php

if(isset($_GET['hide'])) {
$id = $_GET['id']; 
$act = $_GET['act']; 
mysql_query("UPDATE news SET hide='".$act."' WHERE id='".$id."'");
//echo mysql_error();
}



if(isset($_GET['headline'])) {
$id = $_GET['id']; 
$act = $_GET['act']; 
mysql_query("UPDATE news SET headlines='".$act."' WHERE id='".$id."'");
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
<th> Headline </th>
<th> Category </th>
<th> Published ON</th>
<th> Author </th>
<th> Headline </th>
<th> Action </th>
</tr>

</thead><tbody>

<?php
$ddaa = mysql_query("SELECT id, ttl, cats, tm, who, hide, headlines FROM news WHERE who='".$uid."' ORDER BY id");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {
		
	if($data[5]!=0){
$hidebtn = "<a href=\"?id=$data[0]&amp;act=0&amp;hide=levcon\"><button class=\"btn green btn-xs\"> <i class=\"fa fa-unlock\"></i> SHOW </button></a>";	
}else{
$hidebtn = "<a href=\"?id=$data[0]&amp;act=1&amp;hide=levcon\"><button class=\"btn red btn-xs\"> <i class=\"fa fa-lock\"></i> HIDE </button></a>";
}		

if($data[6]!=1){
$headbtn = "<a href=\"?id=$data[0]&amp;act=1&amp;headline=levcon\"><button class=\"btn blue btn-xs\"> <i class=\"fa fa-sign-in\"></i> ADD </button></a>";	
}else{
$headbtn = "<a href=\"?id=$data[0]&amp;act=0&amp;headline=levcon\"><button class=\"btn yellow btn-xs\"> <i class=\"fa fa-sign-out\"></i> REMOVE </button></a>";
}	
	
$author = mysql_fetch_array(mysql_query("SELECT username FROM admin WHERE id='".$data[4]."'"));
$dt = date("Y-m-d H:i:s A", $data[3]);	

$cts = "";
$process=explode(",",$data[2]);
reset($process);
foreach ($process as $cid) {
$cnm = mysql_fetch_array(mysql_query("SELECT cnm, mnm FROM cats WHERE id='".$cid."'"));	
$cts = "$cts, $cnm[1]";
}
$cts = substr($cts, 1);


 echo "                                
 <tr>
 
   <td>$data[0]</td>
   <td>$data[1]</td>
   <td>$cts</td>
   <td>$dt</td>
   <td>$author[0]</td>
   <td>$headbtn</td>
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
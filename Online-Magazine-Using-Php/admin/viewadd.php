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
                    <h3 class="page-title"> View Advertisement <small></small></h3>
					<hr>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
			
					
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
<th> Size </th>
<th> URI </th>
<th> Categories </th>
<th> Hits </th>
<th> Action </th>
</tr>

</thead><tbody>

<?php
$ddaa = mysql_query("SELECT id, image, isize, uri, hide, hit, cat FROM adds ORDER BY id");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    
    {


   if($data[2]==1){
    $img='728X90';
   }elseif($data[2]==2){
    $img='300X250';
   }elseif($data[2]==3){
    $img='300X600';
   }



 echo "                                
 <tr id='$data[0]'>
   <td>$data[0]</td>
   <td><span class=\"label label-success\">$img</span></td>
   <td>$data[3]</td>
   
   <td>  ";
   $cats = explode(',', $data['cat']);
foreach ($cats as $cat) {
  $ct = mysql_fetch_array(mysql_query("SELECT mnm, id FROM cats WHERE id = '$cat' "));
  
   echo "<span class=\"label label-info\">$ct[0]</span> </ br>" ;
   if($cat=='0'){
    echo "<span class=\"label label-info\">Home</span> </ br>";
   }
}

echo "
   </td>

   <td>$data[5]</td>
   <td> " ; ?>

   
<!-- button -->
<a class="btn btn-success btn-sm delete_button" data-toggle="modal" href="<?php echo '#viewimg' . $data['id'] ?>">View</a>
 <!-- modal body -->  
<div class="modal fade" id="<?php echo 'viewimg' . $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Advertisement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      
        
      <img src="../addimages/<?php echo $data['image'] ?>" alt="" width="auto">
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<?php
echo "
        <button type=\"button\" class=\"btn btn-danger btn-sm delete_button\" 
        data-toggle=\"modal\" data-target=\"#DelModal\"
        data-id=\"$data[0]\">
         <i class=\"fa fa-times\"></i> DELETE
        </button>


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
            
            
			
			
			







<!-- Modal for DELETE -->
<div class="modal fade" id="DelModal" tabindex="-1" role="dialog" aria-    labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel"> <i class='fa fa-trash'></i> Delete !</h4>
</div>

<div class="modal-body">
<strong>Are you sure you want to Delete ?</strong>
</div>

<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button type="button" class="delete_product btn btn-danger" data-did="0" data-dismiss="modal">DELETE</button>
</div>


</div>
</div>
</div>


<!-- Modal for DEL SUCCESS -->
<div class="modal fade" id="DelDone" tabindex="-1" role="dialog" aria-    labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel"> <i class='fa fa-trash'></i> Delete!</h4>
</div>

<div class="modal-body">      
<b class="msg"></b>         
</div>

<div class="modal-footer">
<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
</div>


</div>
</div>
</div>





			
			
			
			
			
			
			
			
		
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







<script>
    $(document).ready(function(){
        



        
$(document).on( "click", '.delete_button',function(e) {
        var id = $(this).data('id');
        $('.delete_product').data('did', id);

    });








        $('.delete_product').click(function(e){
            
            e.preventDefault();


        var pid = $(this).data('did');

        $.post( 
                  "delete.php",
                  { 
          delete: pid,
          frm: "adds"
          },
                  function(data) {
            
        $("#"+pid).fadeOut("slow");
        $(".msg").text(data);
        $("#DelDone").modal('show');          
                  }
               );



        });


        
    });
</script>
 </body>
</html>
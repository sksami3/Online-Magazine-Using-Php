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
                    <h3 class="page-title"> Add New Advirtisement<small></small></h3>
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


$err1=0;
$err2=0;

$size = $_POST["size"];
$uri = $_POST["uri"];

///-------------------------------->>GRAB CATS

///-------------------------------->>GRAB CATS



// IMAGE UPLOAD //////////////////////////////////////////////////////////
if (empty($_FILES['bgimg']['name'])) {
    $bgimg = 0;
  $err1=1;
}else{

  $folder = "../addimages/";
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

$fnl = "$dt$random"."levcon_advirtisement";
if($extention == ".jpg" || $extention == ".png" ||$extention == ".JPG" || $extention == ".PNG" ||$extention == ".gif"){
  $new_name = $fnl;
  $bgimg = $new_name."$extention";
  $uploaddir = $folder . $bgimg;
  move_uploaded_file($_FILES['bgimg']['tmp_name'], $uploaddir);
}else{
$err2 = 1;  
}
}
//////////////////////////////////////////////////////////////////////////

$error = $err1+$err2;


if ($error == 0){
$cats = $_POST['cats'];
 foreach ($cats as $cat){ 
$res = mysql_query("INSERT INTO adds SET isize='".$size."', image='".$bgimg."', uri='".$uri."', cat='".$cat."', hide='0'");
} 

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

NO IMAGE SELECTED!!!

</div>";
}   
  
if ($err2 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  

UNSUPPORTED IMAGE TYPE. .jpg .png AND .gif ONLY!!!

</div>";
}   


}




}

?>                    
                    
                    
                    
                    
                    

                    
          <div class="form-group">
                    <label class="col-md-2"><strong>Advirtisement Image</strong></label>
                    <div class="col-md-6">
                    <input name="bgimg" type="file" id="bgimg" />
                    </div>
          <br/><br/><br/>
                    </div>
                     
           
           
           
 <div class="form-group">
<label class="col-md-2"><strong>Categories</strong></label>
<div class="col-md-10">
<div class="checkbox-list">

<label class="checkbox-inline"><input id="cats" name="cats[]" value="0" type="checkbox"><strong>Home</strong></label>

<?php           
  $ddaa = mysql_query("SELECT id, cnm, mnm FROM cats WHERE hide='0' ORDER BY id");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {          
echo "<label class=\"checkbox-inline\"><input id=\"cats\" name=\"cats[]\" value=\"$data[0]\" type=\"checkbox\"><strong>$data[2]</strong></label>
";

 }
?>

</div></div></div>

   
                  <div class="form-group">
                    <label class="col-md-2"><strong>Image Size</strong></label>
                    <div class="col-md-6">
          
<select class="form-control input-lg" name="size">
<option value="1">728X90</option>
<option value="2">300X250</option>
<option value="3">300X600</option>

</select>
                    </div>
                    </div>
          
          
   
                  <div class="form-group">
                    <label class="col-md-2"><strong>URL</strong></label>
                    <div class="col-md-6">
          <input class="form-control input-lg" name="uri" type="text">
                    </div>
                    </div>
          
          
          
 
 
 <div style="margin-top:60px;"></div>
 
 

           
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-6">
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
        <!-- END PAGE LEVEL SCRIPTS -->
 


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
          frm: "ads"
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
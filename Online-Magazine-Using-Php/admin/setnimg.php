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
                    <h3 class="page-title"> Set Default Image
                        <small></small>
                    </h3>
                    <!-- END PAGE TITLE-->

					<hr>





    <?php
    
if($_POST)
{

// IMAGE UPLOAD //////////////////////////////////////////////////////////
    $folder = "../newsimages/";
    $extention = strrchr($_FILES['bgimg']['name'], ".");
    $new_name = "default";
    $bgimg = $new_name.'.jpg';
    $uploaddir = $folder . $bgimg;
    move_uploaded_file($_FILES['bgimg']['tmp_name'], $uploaddir);
//////////////////////////////////////////////////////////////////////////

//------------------>>> RESIZE
include_once("abirimageclass.php");
$target_file = $folder.$bgimg;
$resized_file = $folder.$bgimg;
$wmax = 1600;
$hmax = 1000;
$ext = ".jpg";
ak_img_resize($target_file, $resized_file, $wmax, $hmax, $ext);


$target_file = $folder.$bgimg;
$resized_file = $folder.'thumb_'.$bgimg;
$wmax = 400;
$hmax = 260;
$ext = ".jpg";
ak_img_resize($target_file, $resized_file, $wmax, $hmax, $ext);


//------------------>>> RESIZE
}
?>

<div class="row">
<div class="col-md-6">

<form action="" method="post" enctype="multipart/form-data" >
                 
            <div class="form-group">
              <div class="col-sm-12"><input name="bgimg" type="file" id="bgimg" /></div>
              <input name="abir" type="hidden" value="bgimg" />
              <br>
              <br>
              <div class="col-sm-6"> <button type="submit" class="btn btn-primary btn-block">UPLOAD</button></div>
            </div>
                
          </form>

<br>
<b style="color: red;"> THIS IMAGE WILL USED WHEN NO IMAGE IS UPLOADED WITH NEWS
 <br> 1600X1000 [ jpg image ] Recomanded</b>

</div>

          
        <div class="col-md-6">  
        
Current Image : <br/><img src="../newsimages/default.jpg"  alt="IMG" style="width: 100%;">
</div></div>


<?php
include ('include/footer.php');
?>


</body>
</html>
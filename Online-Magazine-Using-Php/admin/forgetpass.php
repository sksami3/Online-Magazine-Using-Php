<?php
require_once('../function.php');
connectdb();
session_start();

if (is_user()) {
    redirect('home.php');
}

$general = mysql_fetch_array(mysql_query("SELECT sitetitle FROM general_setting WHERE id='1'"));
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Admin Login - <?php echo $general[0]; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <div class="menu-toggler sidebar-toggler"></div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="#">
                <img src="<?php echo $baseurl; ?>/images/footer-logo.png" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->













<?php







///////////---------------->>>>>echo "$fstform"

$fstform = '

<form action="" method="post">
<h3>Reset Your Password</h3>
<br>
<input name="username" class="form-control input-lg" type="text" placeholder="USERNAME">
<br>
<button class="btn btn-success btn-block nomargin" type="submit">NEXT STEP</button>

</form>
';



///////////---------------->>>>>echo "$fstform"












if(isset($_POST['vcode']))
{
$code= $_POST["vcode"];
$username = $_POST["user"];

$codeOnDB = mysql_fetch_array(mysql_query("SELECT forgotcode FROM admin WHERE username='".$username."'"));


if($codeOnDB[0]==$code){

$aa = date("YDlJH:i:s");
$md = MD5($aa);
$newpass  = substr($md, 0, 6);
$mdpass = md5($newpass);

mysql_query("UPDATE admin SET password='".$mdpass."', forgotcode='' WHERE username='".$username."'");


echo "<div class=\"alert alert-success alert-dismissable\">
Password Reset Completed Successfully !!
</div>";

echo "<h1 class='center'>YOUR TEMPORARY PASSWORD IS: <br><br><span style=\"color:red;\">$newpass</span><br><br> Change It As Soon As Possible! </h1>";

echo "<b style=\"color:green; font-size: 20px;\"> </b><br/><br/>";

echo "$fstform";

}else{
echo "<div class=\"alert alert-danger alert-dismissable\">
Your Reset Code is Wrong !!!
</div>";
  
echo "$fstform";
}
}elseif(isset($_POST['username']))
{
$username = $_POST["username"];

$count = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM admin WHERE username='".$username."'"));

if($count[0]>=1){
$cde = rand(100000,999999);
mysql_query("UPDATE admin SET forgotcode='".$cde."' WHERE username='".$username."'");





$txt = "
You are request for password reset for your account (Username: $username). To Make sure that you really want to reset your password, Here is the Reset Code :
<br><br>
<h2 style='font-size: 40px; text-align: center; font-weight: bold;'>$cde</h2>
<br><br>
If you are not request for password reset, please ignore this email.
<br><br>
<b style='color:red;'>Please Do Not Share The Code With Others .</b> 
<br>
";

$userContact = mysql_fetch_array(mysql_query("SELECT email FROM admin WHERE username='".$username."'"));

$to = "$userContact[0]";

$headers = "From: NewsPaper <no-reply@thesoftking.com> \r\n";
$headers .= "Reply-To: NewsPaper <no-reply@thesoftking.com> \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = $txt; 
$subject = "PASSWORD RESET CODE";


if (mail($to, $subject, $message, $headers)) {
//   echo 'Your message has been sent.';
} else {
// echo 'There was a problem sending the email.';
}

///////////////////------------------------------------->>>>>>>>>Send Email


echo "<div class=\"alert alert-success alert-dismissable\">
Reset Code Sent to  $userContact[0]
</div>";

?>

<form action="" method="post">
<h3>Reset Your Password</h3>
<br>
<input name="vcode" class="form-control input-lg" type="text" placeholder="RESET CODE">
<input type="hidden" name="user" value="<?php echo $username; ?>">
<br>
<button class="btn btn-lg btn-success btn-block nomargin" type="submit">Reset</button>

</form>

<?php
}else{

echo "<div class=\"alert alert-danger alert-dismissable\">
 NO ACCOUNT FOUND WITH THIS USERNAME.
</div>";

echo "$fstform";

}
}else{


echo $fstform;

}
?>


<div class="col-md-12">
<p style="text-align: center; font-weight: bold; text-transform: uppercase;">
<a href="index.php"> Login Now</a> 
</p>
</div>

</div><!-- row -->


















            
        </div>
       <div class="copyright"> <?php echo date("Y"); ?> © <?php echo $general[0]; ?> </div>
        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/login.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
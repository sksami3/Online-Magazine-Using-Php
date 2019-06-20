<?php

include('config.php');

$baseurl = $GLOBALS['baseurl'];
$adminurl = $GLOBALS['baseurl']."/admin";

date_default_timezone_set("Asia/Dhaka");
$tm = time();
error_reporting(E_ALL);

function connectdb()
{
    global $dbname, $dbuser, $dbhost, $dbpass;
    $conms = @mysql_connect($dbhost,$dbuser,$dbpass); //connect mysql
    if(!$conms) return false;
    $condb = @mysql_select_db($dbname);
    if(!$condb) return false;
    return true;
}

function attempt($username, $password)
{
$mdpass = md5($pass);
$data = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE username='".$username."' and password='".$mdpass."'"));

	if ($data[0] == 1) {
		# set session
		$_SESSION['username'] = $username;
		return true;
	} else {
		return false;
	}
}



function attemptadmin($username, $password)
{
$mdpass = md5($password);
$data = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM admin WHERE username='".$username."' and password='".$mdpass."'"));

	if ($data[0] == 1) {
		# set session
		$_SESSION['username'] = $username;
		return true;
	} else {
		return false;
	}
}



function is_user()
{
	if (isset($_SESSION['username']))
		return true;
}

function redirect($url)
{
echo "<meta http-equiv=\"refresh\" content=\"0; url=$url\" />";
	exit;
}

function totalpost($uid){
$ttl = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM news WHERE who='".$uid."'"));
	
	echo $ttl[0];
}



function catname($nid){
$data = mysql_fetch_array(mysql_query("SELECT cats FROM news WHERE id='".$nid."'"));
$catName = mysql_fetch_array(mysql_query("SELECT mnm From cats WHERE id='".$data[0]."'"));
echo $catName[0];

}



function showadds($cid,$size){
$color = mysql_fetch_array(mysql_query("SELECT color  FROM general_setting WHERE id='1'"));
$basecolor = $color[0];

$baseurl = $GLOBALS['baseurl'];

$count1 = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM adds WHERE isize='".$size."' AND cat='".$cid."'"));
$iid1 = rand(1,$count1[0])-1;
$add1 = mysql_fetch_array(mysql_query("SELECT id, image, hit, cat, uri FROM adds WHERE isize='".$size."' AND cat='".$cid."'
     ORDER BY id LIMIT ".$iid1.",1"));
$newhit = $add1[2]+1;
mysql_query("UPDATE adds SET hit='".$newhit."' WHERE id='".$add1[0]."'");
echo mysql_error();


if ($size==1) {

echo '
<a href="'.$add1[4].'" target="_blank">
  <div class="hidden-sm hidden-xs"> 
<div class="ad" style="border: 1px #'.$basecolor.' solid; margin-bottom:15px; margin-top:15px; width: 100%;" >
<img src="'.$baseurl.'/addimages/'.$add1[1].'" style="width:100%;">
</div>
</div>
</a>
';

}

if ($size==2) {



echo '
<a href="'.$add1[4].'" target="_blank">
<div class="ad" style="border: 1px #'.$basecolor.' solid; margin-bottom:15px; width: 100%;" >
<img src="'.$baseurl.'/addimages/'.$add1[1].'"  style="width:100%;">
</div>
</a>
';
}



if ($size==3) {

echo '
<a href="'.$add1[4].'" target="_blank">
<div class="ad" style="border: 1px #'.$basecolor.' solid; margin-bottom:15px; width: 100%;" >
<img src="'.$baseurl.'/addimages/'.$add1[1].'" style="width:100%;">
</div>
</a>
';

}






}



?>
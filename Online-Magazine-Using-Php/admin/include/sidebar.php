        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="home.php">
                        <img src="<?php echo $baseurl; ?>/assets/images/logo.png" alt="logo" class="logo-default" style="width: 120px; height: 21px; -webkit-filter: brightness(0) invert(1); filter: brightness(0) invert(1);" /> </a>
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="username"> <?php echo $user; ?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
							

<li><a href="mypost.php"><i class="icon-envelope-open"></i> My Posts
<span class="badge badge-danger">  <?php echo totalpost($uid); ?> </span></a></li>
<li><a href="changepassword.php"><i class="fa fa-cogs"></i> Change Password </a></li>
<li><a href="signout.php"><i class="fa fa-sign-out"></i> Log Out </a></li>


                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        
<li class="nav-item start">
<a href="home.php" class="nav-link "><i class="icon-home"></i><span class="title">Dashboard</span></a>
</li>
								
<?php
if($usid[2]==100){
?>

	
<li class="nav-item">
<a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-bars"></i>
<span class="title">Categories</span><span class="arrow "></span></a>
							
<ul class="sub-menu">
<li class="nav-item"><a href="addcat.php" class="nav-link"><i class="fa fa-pencil"></i> Add Category </a></li>
<li class="nav-item"><a href="listcat.php" class="nav-link"><i class="fa fa-desktop"></i> View Categories </a></li>
		
</ul>
</li>
								
<li class="nav-item">
<a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-bars"></i>
<span class="title">Sub Categories</span><span class="arrow "></span></a>
                            
<ul class="sub-menu">
<li class="nav-item"><a href="addsubcat.php" class="nav-link"><i class="fa fa-pencil"></i> Add Sub Category </a></li>
<li class="nav-item"><a href="listsubcat.php" class="nav-link"><i class="fa fa-desktop"></i> View Sub Categories </a></li>
        
</ul>
</li>

                        

								
								
<?php
}
?>
					
                        
<li class="nav-item">
<a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-newspaper-o"></i>
<span class="title">News Management</span><span class="arrow "></span></a>
							
<ul class="sub-menu">
<li class="nav-item"><a href="addnews.php" class="nav-link"><i class="fa fa-plus"></i> Add New News </a></li>
<li class="nav-item"><a href="listnews.php" class="nav-link"><i class="fa fa-desktop"></i> View All News </a></li>
<li class="nav-item"><a href="changelead.php" class="nav-link"><i class="fa fa-cogs"></i> Manage Lead News </a></li>
		
</ul>
</li>
								
                        
				





   
<li class="nav-item">
<a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-cogs"></i>
<span class="title">Website Setting</span><span class="arrow"></span></a>
<ul class="sub-menu">
<li class="nav-item"><a href="setgeneral.php" class="nav-link"><i class="fa fa-cogs"></i> General Setting </a></li>
<li class="nav-item"><a href="setlogo.php" class="nav-link"><i class="fa fa-cogs"></i> Logo Setting </a></li>
<li class="nav-item"><a href="seticon.php" class="nav-link"><i class="fa fa-cogs"></i> Icon Setting </a></li>
<li class="nav-item"><a href="setnimg.php" class="nav-link"><i class="fa fa-cogs"></i> Default Image Setting </a></li>
<li class="nav-item"><a href="setloader.php" class="nav-link"><i class="fa fa-cogs"></i> Pre Loader Setting </a></li>
</ul>
</li>
         


          

                  
                            
                        
                                    
                        
                        
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
			
			
		
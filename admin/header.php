<?php 
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */


session_start();
if(!isset($_SESSION['SESS_FIRST_NAME'])){
    header("location: login.php");
}
?>
<html>
    
      <?php
                            include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
<head>
<title><?php echo $row['site_name']; ?> :: Admin Area </title>
 <?php echo $row['google_code']; ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $row['site_keyword']; ?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script src="../admin/ckeditor/ckeditor.js"></script>
<script type="text/javascript"> $(document).ready(function(){
    $(".close").click (function(){
        $("#myalert").alert();
    });
});
    
    </script>
</head>
                                <?php } ?>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                          
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
               <a class="navbar-brand" href="index.php">Admin CP </a>
                                <?php } ?>
                
            </div>
                <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
	
                
			    <li class="dropdown">
                                <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="../uploads/<?php echo $_SESSION['SESS_PRO_PIC']; ?>" class="roundimage" alt=""/></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
                                                
                                                
                                                
                                                
                                                
                                                             
              
                               
 <li class="m_2"><a href="#"><i class="fa fa-users"></i>
         <?php
$session=session_id();
$time=time();
$time_check=$time-600; //SET TIME 10 Minute

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="sykup"; // Mysql password
$db_name="eblog"; // Database name
$tbl_name="user_online"; // Table name

// Connect to server and select databse
mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select DB");
mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE session='$session'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
if($count=="0"){

$sql1="INSERT INTO $tbl_name(session, time)VALUES('$session', '$time')";
$result1=mysql_query($sql1);
}

else {
$sql2="UPDATE $tbl_name SET time='$time' WHERE session = '$session'";
$result2=mysql_query($sql2);
}

$sql3="SELECT * FROM $tbl_name";
$result3=mysql_query($sql3);
$count_user_online=mysql_num_rows($result3);
echo "Online Admin(s) : $count_user_online ";
                                                // if over 10 minute, delete session 
$sql4="DELETE FROM $tbl_name WHERE time<$time_check";
$result4=mysql_query($sql4);

// Open multiple browser page for result


// Close connection
mysql_close();
                ?> </a></li>
                                   
        
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                <li class="m_2"><a href="#"><i class="fa fa-user-md"></i><?php echo $_SESSION['SESS_FIRST_NAME']; ?> </a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> <?php echo $_SESSION['SESS_LAST_NAME']; ?> </a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						
                                                <li class="m_2"><a href="site_settings.php"><i class="fa fa-wrench"></i> Site Settings</a></li>
                                                <li class="m_2"><a href="ads_settings.php"><i class="fa fa-usd"></i> Ads Settings  </a></li>
						<li class="m_2"><a href="youtube.php"><i class="fa fa-youtube"></i> Youtube Video</a></li>
                                                <li class="divider"></li>
                                                
                                                <li class="m_2 text-center" ><a href="logout.php"><i class="fa fa-lock "></i> <strong>Logout</strong></a></li>	
	        		</ul>
	      		</li>
      
                        
                        
			</ul>
                
			
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="#"><i class="fa fa-comment-o nav_icon"></i>Manage Articles<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="create_news.php">Create Article </a>
                                </li>
                                <li>
                                    <a href="managenews.php">Manage Articles</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Manage Categories<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="create_category.php">Create Category</a>
                                </li>
                                <li>
                                    <a href="manage_cat.php">Categories</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                                    <a href="youtube.php"><i class="fa fa-youtube-square nav_icon"></i> Youtube Video</a>
                                </li>
                                <li>
                                    <a href="quote_page.php"><i class="fa fa-quote-right  nav_icon"></i>Daily Quote</a>
                                </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-user nav_icon"></i>Manage Admin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="create_admin.php">Create Admin</a>
                                </li>
                                <li>
                                    <a href="manage_admin.php">Admin List</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw nav_icon"></i>Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="site_settings.php">Site Setting</a>
                                </li>
                                <li>
                                    <a href="ads_settings.php">Adverts Placement</a>
                                </li>
                                <li>
                                    <a href="create_about.php">About Blog</a>
                                </li>
                                <li>
                                    <a href="add_resources.php">Free Resources</a>
                                </li>
                                
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      
                        <li>
                            <a href="logout.php"><i class="fa fa-lock fa-fw nav_icon"></i>Logout</a>
                        </li>
                        
                    </ul>
                    
                </div>
                <!-- /.sidebar-collapse -->
            </div>
   


<!DOCTYPE html>
<html lang="en">
	<head>
            
		 <?php
                            include('connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                  
               ?>     
									
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
         <meta name="keywords" content="<?php echo $settings['site_keyword']; ?>" />
        
                                <?php }?> <?php
                            //include('connect.php');
				$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM posts_tbl where id= :post_id");
	$result->bindParam(':post_id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){

                                
?>
         <title><?php echo $row['post_title'];?></title>
        <?php }?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="assets/css/facebook.css" rel="stylesheet">
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/flag-icon.css" rel="stylesheet">
        <link href="assets/css/flag-icon.min.css" rel="stylesheet">
        <link href="assets/css/twemoji-awesome.css" rel="stylesheet">
        <link href="assets/css/twemoji-awesome.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-social.css" rel="stylesheet">
        <link href="assets/css/bootstrap-social.min.css" rel="stylesheet">
        
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        
   <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=403202216515066";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js">
</script>

<script type="text/javascript">
 $(document).ready(function() {
     if ($.cookie(‘pop’) == null) {
         $(‘#myModal’).modal(‘show’);
         $.cookie(‘pop’, ’7′);
     }
 });
</script>

<script type="text/javascript">
 $(document).ready(function() {
     $(‘#myModal’).modal(‘show’);
 }); </script>
<script>
   $(document).ready(function () {
    $(".arrow-right").bind("click", function (event) {
        event.preventDefault();
        $(".vid-list-container").stop().animate({
            scrollLeft: "+=336"
        }, 750);
    });
    $(".arrow-left").bind("click", function (event) {
        event.preventDefault();
        $(".vid-list-container").stop().animate({
            scrollLeft: "-=336"
        }, 750);
    });
});     

 </script>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=403202216515066";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

 <!-- Google Analytics Social Button Tracking -->

<script type="text/javascript" src="/js/ga_social_tracking.js"></script>

<!-- LinkedIn Share Button tracking-->

<script type="text/javascript">

function LinkedInShare() {

_gaq.push(['_trackSocial', 'LinkedIn', 'Share']);

}
</script><!--formatted-->


    </head>
     <body>
     	<!-- main right col -->
					<div class="col-sm-12" id="main">
                                           
                                      
						<!-- top nav -->
						<div class="navbar navbar-blue navbar-static-top">  
                                                   <?php
                // include '../connect.php';     
                 $result = ORM::for_table("settings")
                                       ->find_array();
                           ?>
                             <?php  foreach ($result as $settings):?>
                                                    <div class="navbar-header">
                                                        <a  href='index.php' class="sitetitle">   <img src="logo.png" class=""><?php echo $settings['site_name']; ?> </a>
                                                        <?php endforeach;?>
							  <button class="navbar-toggle top" type="button" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							  
							</div>
                                                    
							<nav class="collapse navbar-collapse" role="navigation">
							
                                                       
                                               
							<ul class="nav navbar-nav">
                                                            
							  <li>
                                                              <a href="index.php"><i class=""></i> Home</a>
                                                             
                                                          <li class="dropdown nav">
                      <a href="#" data-toggle="dropdown" class="dropdown-toggle">Posts Categories <b class="caret"></b></a>
                 
                        <ul class="dropdown-menu nav2 ">
                            
										        <?php
                               $result = ORM::for_table("cat_tbl")
                                       ->find_array();
                           ?>
                             <?php  foreach ($result as $ads):?>
                            <li class="nav2"><a href="category.php?id=<?php echo $ads['id'];?>"><?php echo $ads['post_cat'];?></a></li>
                           
                            <?php endforeach; ?>
                        </ul>
                                
                                                          </li>
	
						<li class=""> 
                                                    <a href="free_resources.php"><i class=""></i> Free Resources</a>
                                                                 </li>	 
                                                         
							</ul>
							<ul class="nav navbar-nav navbar-right">
							  <li class="dropdown">
                                                          <li class=""> 
                                                              <a href="about.php"><i class=""></i> About Me</a>
                                                                 </li>
								<li class=""> 
                                                                     <a href="contact.php"><i class=""></i> Contact Me</a>
                                                                 </li>
								
							  </li>
							</ul>
							</nav>
                                                </div>
                                           
                                      
						<!-- /top nav -->			  
                                                <div class="clearfix"></div>
							
							  
								<!-- content -->                      
								
                                                               
                                                                   
								 <!-- main col left --> 
                                                                 <div class=" container" id="main2">
								 <div class="col-sm-8">
                                                                    <?php include 'ads_top.php'; ?>
                                                               
								     <?php
                            
				$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM posts_tbl where id= :post_id");
	$result->bindParam(':post_id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){

                                
?>
									  <div class="panel panel-default">
                                                                             
										<div class="panel-body blog-grids">
                                                                                    <h4><font style="color:#D75B5B" class="a"><?php echo $row['post_title']; ?></font></h4>
                                                                                 
                                                                                        <img src="uploads/<?php echo $row['file'];?>"  class="img-responsive2" alt="<?php echo $row['post_title']; ?>" />
                                                                                           
                                                                                        </a>  
                                                                                        
                                                                                       
                                                                                   <div class="clearfix"></div>      
                                                                                   <div class="col-md-12 we"><?php echo $row['post_body'];?></div>    
                                                                                 
                                                                                  
                                                                          </div> 
									  </div><?php 
                                                                                   $get_related = ORM::for_table("posts_tbl")
                                                                                           ->where_raw("post_tag = ? and id != ?", [$row['post_tag'],$row['id']])
                                                                                           ->limit(1)
                                                                                           ->order_by_expr("RAND()")
                                                                                           ->find_array();
                                                                                   ?>
                                                                                   <?php foreach($get_related as $related):?>
                                                                     <div class=""><span style="color: #D75B5B; font-style: normal">Related Post:</span> <span style=" font-style: italic"><a href="read.php?id=<?=$related["id"]?>"><?=$related["post_title"];?></a></span></div>
                                                                                   <?php endforeach;?>
                                                                             
                                                                     <div class="clearfix"></div>
				                                                 
                                                               <div class="panel"> 
			 						<div class="text-center x-hidden">
                                                                            <h5>Share this post:</h5>   
                                                                          <!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_sharing_toolbox"></div>
                        </div></div>
                                                                    
                                                                    
                                            <div class="fb-comments" data-href="read.php?id=<?php echo $row['id'];?>/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
                                                       <?php }                  ?>            
                                            <div class="clearfix"></div>
                                                                      <?php include 'footer_ads.php'; ?>
                                            
                                            
                                                                 </div>
                                                                
                                                                     
                                                                     
                                                                     
                                                               <?php include 'side_read.php'; ?>
                                                                
								  </div>
                                                                 <div class="clearfix"></div>
								  <!--/row-->
                                                                  <!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your share button code -->
        
        
       
        
        
        
       			  
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							 <?php include 'footer.php'; ?>
<?php if(file_exists("connect.php")):?>
<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */
?>

<html lang="en">
	<head>
            
		 <?php
                 include 'connect.php';     
                 $result = ORM::for_table("settings")
                                       ->find_array();
                           ?>
                             <?php  foreach ($result as $settings):?>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <?php echo $settings['google_code']; ?>
        <meta name="keywords" content="<?php echo $settings['site_keyword']; ?>" />
        <title><?php echo $settings['site_title']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link rel="shortcut icon" href="logo.png" />
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
        <link href="assets/fonts/fontawesome-webfont.svg" rel="stylesheet">
        <link href="assets/fonts/fontawesome-webfont.ttf" rel="stylesheet">
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
                                           
                                      <!--  <div class="well2 " style="padding:0px;"> 
                                            
                                           <img src="assets/img/150 x 150.gif" class="ads"> <?php //echo $settings['site_name']; ?>
									  
                                           
                                        </div>-->
                                    
						<!-- top nav -->
						<div class="navbar navbar-blue navbar-static-top">  
                                                      
                                                      
                                                    <div class="navbar-header">
                                                        <a  href='index.php' class="sitetitle">   <img src="logo.png" class="ads"><?php echo $settings['site_name']; ?> </a>
                                                        
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
                                           <?php                       endforeach;?>
						<!-- /top nav -->
                                                
 <?php else:?>
     <?php header("location: install") ;?>                                       
                                                
 <?php endif; ?>
                                               
                                                
<?php 
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */


include 'header.php';
?>
    
    <body>
        
       <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=403202216515066";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
					
					 
				 
					  
                                                <div class="clearfix"></div>
							
							  
								<!-- content -->                      
								
                                                                
                                                                  
                                                                  
                                                                   <div class="clearfix"></div>
                                                                   
                                                                   
                                                                   
								 <!-- main col left --> 
                                                                 <div class=" container" id="main2">
								 <div class="col-sm-8">
                                                                     
                                                                     <?php  include 'ads_top.php'; ?>
                                                                    <?php
                           
				$result = $db->prepare("SELECT * FROM quote");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                   
                                    

                
               ?>   <div class="scode2 text-center panel panel-body" >
                   
                     <h2><strong>"<?php echo $row['quote']; ?>"</strong></h2>
                     <h5 class="pull-right" >--> <?php echo $row['quote_by']; ?></h5>
                                    </div>
                                   <?php }?>
                                <div class="clearfix"></div>     
                                                                     
                                                                     
                                                                    <?php                     
                            if(!isset($_GET["page"])){
                                $_GET["page"] = 1;
                            }
                                
                                $tbl_name="posts_tbl";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
       
      
         //$query = "SELECT COUNT(*) as num FROM $tbl_name";
	//$total_pages = mysql_fetch_array(mysql_query($query));
	//$total_pages = $total_pages['num'];
	
        // $query = "SELECT COUNT(*) as num FROM $tbl_name";
         $get_posts_tbl = ORM::for_table("$tbl_name")
                 ->find_array();
         
	$total_pages = count($get_posts_tbl);
	
	
	/* Setup vars for query. */
	$targetpage = "pagination.php"; 	//your file name  (the name of this file)
	$limit = 5; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	
				//$news = $db->prepare("SELECT * FROM posts_tbl  ORDER BY id ASC LIMIT $start, $limit");
				//$news->execute();
                                
                             
                            
				
	                          $news = ORM::for_table("posts_tbl")
                                          ->select(['posts_tbl.id','posts_tbl.post_body','posts_tbl.file','posts_tbl.post_title','posts_tbl.date' ] )
                                          ->select("cat_tbl.post_cat")
                                          ->inner_join("cat_tbl","cat_tbl.id = posts_tbl.post_cat")
                                          ->limit($limit)
                                          ->offset($start)
                                          ->order_by_desc('posts_tbl.id')
                                          
                                          ->find_array();
                                       
                                  ?>
                                  <?php foreach ($news as $row):?>

                                
                  <?php               
                                /* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	 ?>
                                                                      
                       
								  <div class="panel panel-default">
                                                                             
										<div class="panel-body blog-grids">
                                                                                   <h4><font class=" title"><a href="read.php?id=<?php echo $row['id'];?>"><?php //echo $row['post_title']; ?></a></font></h4>
                                                                                    <div class="col-md-6 top1" ><a href="read.php?id=<?php echo $row['id'];?>">
                                                                                            <img  src="uploads/<?php echo $row['file'];?>" class="img-responsive">
                                    </a>  </div>          
                                                                                   <div class="col-md-6 text-left"> <h4><font class=" title">
                                                                                           <a href="read.php?id=<?php echo $row['id'];?>"><?php echo $row['post_title']; ?></a>
                                                                                           </font></h4><?php echo strip_tags(substr($row['post_body'],0,180)) ;?>...</div>    
											   </div>
                                                                              <div class="list-unstyled"><a href="read.php?id=<?php echo $row['id'];?>" class="pull-right scode">>>Read more</a> <h5><font style="color: green"><?php //echo $row['date']; ?> </font>   Category: <font style="color: green"><?php echo $row['post_cat'];?></font></h5> </div> 
										 
									  </div>
                                                                     <div class="clearfix"></div>
                                                                     
                                      	 <?php endforeach;?>	 
                                                    
							<?php ?>
                                                                     
                                        <span class="text-muted m-r-sm">
                                                             
                                                             Showing
                                 <?php if($lastpage == $next-1):?>
                                    <?=$total_pages?>
                                <?php else:?>
                                <?=$page * $limit?> 
                            <?php endif;?>
                                                             of <?=$total_pages?>
                                
                                        </span>
                                                    <div class="btn-group">
                             
                                <?php if($page != 1):?>
                                <a class="btn btn-default" href="?page=<?=$prev?>"><i class="">Page <?=$prev?><<</i></a>
                                <?php endif;?>
                                
                                <?php if($lastpage == $next-1):?>
                                
                                <?php else:?>
                                <a class="btn btn-default" href="?page=<?=$next?>"><i class="">>>Page <?=$next?></i></a>
                                <?php endif;?>
                            </div>	
                                                                 
                                                                     
                                                                 </div>
                                           
                           
                                      
                                                                 
                                                               <?php include 'side_right.php'; ?>
                                                                
								  </div>
                                                                 <div class="clearfix"></div>
								  <!--/row-->
							  
							 <?php include 'footer.php'; ?>

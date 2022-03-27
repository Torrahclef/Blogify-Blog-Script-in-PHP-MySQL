
<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */

?>  <div class="col-sm-4">       
    
 
    
<!--Facebook Page--><?php
                           
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                   
                                    

                
               ?>   
     
<!--Facebook Page-->
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?php echo $row['facebook'];?>%2F&tabs=timeline&width=20025&height=215&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=403202216515066" 
        width="100%" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" 
                                allowTransparency="true"></iframe><?php }?>
								   
                                                                      
                        
                 



      <?php
                           
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                   
                                    

                
               ?>   

<div class="panel-body panel text-center"> 
    <a href="http://facebook.com/<?php echo $row['facebook'];?>"> <span class="fa fa-facebook-square"> facebook</spane></a>
    <a href="http://twitter.com/<?php echo $row['twitter'];?>"><span class="fa fa-twitter-square"> Twitter</span></a>
    <a href="http://linkedin.com/<?php echo $row['linkedin'];?>"> <span class="fa fa-linkedin-square "> Linkedin</span></a>
    <a href="http://instagram.com/<?php echo $row['status'];?>"> <span class="fa fa-instagram "> Instagram</span></a>
          
          

</div>
                                <?php }?>
      
      

                                                                  
<div class="clearfix">
</div>                   

      
      <?php include 'ads_side.php';?>
     
                                                                          
                                


									  <div class="panel panel-default ">
                                                                              <div class="panel-heading scode"><font style="color: #D75B5B"><h4>Random Articles</h4></font></div>
										<div class="panel-body">
											<ul class="">
                                                                                               <?php
                           
				$result = $db->prepare("SELECT * FROM posts_tbl ORDER BY RAND() limit 0,10");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++)
                                {        
?>
				
                                                                                            <p>  <li class="text-left" style="color: #FFF"><a href="read.php?id=<?php echo $row['id'];?>"><?php echo $row['post_title'];?></a></li><p>
                                                                  
                                                                   <?php }
             ?>
								</ul>  <hr>    </div>
                                                                               
									  </div>
                                                                      
                                                         
                             
                     				   <div class="panel panel-default hidden-xs  ">
          <div class="panel-heading scode"> <font style="color: #D75B5B"><h4>ARTICLE CATEGORIES</h4></font></div>
          <div class="">
										        <?php
                               $result = ORM::for_table("cat_tbl")
                                       ->find_array();
                           ?>
                             <?php  foreach ($result as $ads):?>
              <ul>
        
                  <p>  <li style="color: #D75B5B"><a href="category.php?id=<?php echo $ads['id'];?>"><?php echo $ads['post_cat'];?></a></li><p>
                                                                                 	
              </ul>			
								   	
                           <?php endforeach;?>
          </div>
                                                                  </div>

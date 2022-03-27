<?php 
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */
?> 


<hr>
                    <script type="text/javascript">
	$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
</script>
                                           
							  
							 
                                                                <?php
                            
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
                             <h5 class="text-center">
				
                                 <p><a href='index.php'><?php echo $row['site_name']; ?></a> © 2016 All rights reserved | Site by  <a href="http://facebook.com/hillsoftsnetwork">  Hillsofts</a></p>
				 </h5>
                            
                            <?php
                                }
                                ?>
                                                              
                                                              
                                                       
							  <hr>
								
							  
							</div><!-- /col-9 -->
						
				

		<!--post modal-->
		
</div>
        
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-572c8b7061c91eeb"></script>

        
</body></html>
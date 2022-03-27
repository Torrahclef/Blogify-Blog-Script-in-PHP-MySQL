<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */


include 'header.php'; ?>
        
            <!-- /.navbar-static-side -->
        </nav>
        
        <div id="page-wrapper">
            
        <div class="graphs">
	     <div class="xs">
  	     
  	         
         
               
                <div class="clearfix"></div>
                
                
                
                
                <form action="save_resources.php" method="post" enctype="multipart/form-data">
        
        	            
              
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                           Add free resources here
                        </div>
                      
                        <hr>
                                          
                        
                        <label>Enter details and links below </label>
                        
                         <?php
                            
				$result = $db->prepare("SELECT * FROM tbl_resources");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                              

                
               ?> 
                        <textarea rows="6" id='body' name="body" class="form-control1 control13"> <?php echo $row['body']; ?></textarea>
                        
                                <?php }?>
                        <script>
                CKEDITOR.replace( 'body' );
            </script>
                        
                         <br>
                       
                       
        <div class="form-group">
             
              <button type="reset" class="btn btn-default">Reset</button>
               <button type="submit" class="btn btn-primary">Save About</button>
            </div>
                     
                    </div>
               </form>
                   
                 </div>
              </div>

         </div>
         <div class="clearfix"> </div>
  
            
              
          
        
      
                
            
        
        
               

            
            
            
            
   <?php include 'footer.php';
   ?>
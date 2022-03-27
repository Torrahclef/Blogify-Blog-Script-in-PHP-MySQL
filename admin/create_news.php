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
        
            <!-- /.navbar-static-side -->
        </nav>
        
        <div id="page-wrapper">
            
        <div class="graphs">
	     <div class="xs">
  	     
  	         
         
               
                <div class="clearfix"></div>
                
                
                
                
               <form action="savenews.php" method="post" enctype="multipart/form-data">
        
        	            
              
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            Please fill details to save a new post
                        </div>
                      
                        <hr>
                        <label>Post Title: </label>
                   
                        <input type="text" name="title" class="form-control1 control3">
                         <label for="selector1">Select Category</label>
<div ><select name="cat" id="selector1"class="form-control1 control3" >
        
         <?php
                           
				$result = $db->prepare("SELECT * FROM cat_tbl");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                              

                
               ?>
        <option value="<?php echo $row['id']?>"> <?php echo $row['post_cat'];?> </option>
				   <?php } ?>						
			</select></div>
								
                             
                        <label>Post Body: </label>
                        <textarea rows="6" id='body' name="body"class="form-control1 control13"> </textarea>
                        <script>
                CKEDITOR.replace( 'body' );
            </script>
                        
                         <br>
                        <label>Tag: </label>
                        <input type="text" name="tag" class="form-control1 control3">
                        <br>
                        <label for="exampleInputFile">Choose photo</label>
        <input type="file" name="file" id="image">
        
       
        <div class="form-group">
             
              <button type="reset" class="btn btn-default">Reset</button>
               <button type="submit" class="btn btn-primary">Submit Article</button>
            </div>
                     
                    </div>
               </form>
                   
                 </div>
              </div>

         </div>
                 </form>
         <div class="clearfix"> </div>
   </div>
            
              
            </div>
          </div>
         </div>
                 </div>
             </div>
        
        
               

            
            
            
            
   <?php include 'footer.php';
   ?>
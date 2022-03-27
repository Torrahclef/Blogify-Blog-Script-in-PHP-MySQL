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
                
                
                
                
               <form action="saveeditnews.php" method="post" enctype="multipart/form-data">
        <div class="col-md-8 inbox_right">
        	<div class="Compose-Message">               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Article
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info">
                            Please Edit details.
                        </div>
                      
                           <?php
                           // include('../connect.php');
				$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM posts_tbl where id= :post_id");
	$result->bindParam(':post_id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){

                                
?>
                        
                        
                        <hr>
                        <label>Post Title: </label>
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="text" name="title" value="<?php echo $row['post_title']; ?>" class="form-control1 control3">
        <?php } ?>
									<label for="selector1">Select Category</label>
									<div ><select name="post_cat" id="selector1"class="form-control1 control3" >
										  <?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM cat_tbl");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                            ?>
                                      <option><?php echo $row['post_cat'];?></option>
                                      <?php } ?>
	                                </select>
                     </div>
                                                                        
                                                                                              <?php
                          //  include('../connect.php');
				$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM posts_tbl where id= :post_id");
	$result->bindParam(':post_id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){

                                
?>
                                                                        
                                                                        
			<label>Post Body: </label>
                        <textarea rows="6" id="body" name="body" value="" class="form-control1 control13"><?php echo $row['post_body']; ?></textarea>
                         <script>
                CKEDITOR.replace( 'body' );
            </script>
                        
                        
                        <br>
                        <label>Tag: </label>
                        <input type="text" name="tag" value="<?php echo $row['tag']; ?>" class="form-control1 control3">
                        <br>
                       
       
        <div class="form-group">
             
              <button type="reset" class="btn btn-default">Reset</button>
               <button type="submit" class="btn btn-primary">Edit News</button>
            </div>
        <?php } ?>
                     
                    </div>
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
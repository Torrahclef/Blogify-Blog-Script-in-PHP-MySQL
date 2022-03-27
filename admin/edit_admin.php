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
                
                
                
                
                <form action="save_edit_admin.php" method="post" enctype="multipart/form-data">
        <div class="col-md-8 inbox_right">
        	<div class="Compose-Message">               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Admin
                    </div>
                    
                    <?php
                          //  include('../connect.php');
				$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM table_admin where id= :admin_id");
	$result->bindParam(':admin_id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){

                                
?>
                    
                    
                    
                    <div class="panel-body">
                        
                      
                        <hr>
                        
                        
                        
                        <label>Name</label>
                   <input type="hidden" name="id" value="<?=$id?>">
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control1 control3">
                         <label>Email</label>
                   
                        <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control1 control3">
                        <label>Username </label>
                   
                        <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control1 control3">
                    
                        <label>Password </label>
                        <input type="text" name="password" value="<?php echo $row['password']; ?>" class="form-control1 control3">
                        <br>
                        
                        
                        <label for="exampleInputFile">Choose Photo</label>
        <input type="file" name="file" id="image">
       
        <div class="form-group">
             
              <button type="reset" class="btn btn-default">Reset</button>
               <button type="submit" class="btn btn-primary">Submit Article</button>
            </div>
                     <?php
        } ?>
           
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
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
                
                
                
                
               <form action="save_admin.php" method="post" enctype="multipart/form-data">
        <div class="col-md-8 inbox_right">
        	<div class="Compose-Message">               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Post New Articles
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info">
                            Please fill details to save a new post
                        </div>
                      
                        <hr>
                        <label>Name</label>
                   
                        <input type="text" name="name" class="form-control1 control3">
                         <label>Email</label>
                   
                        <input type="text" name="email" class="form-control1 control3">
                        <label>Username </label>
                   
                        <input type="text" name="username" class="form-control1 control3">
                        					
                      
                        <label>Password </label>
                        <input type="text" name="password" class="form-control1 control3">
                        <br>
                        
                        
                        <label for="exampleInputFile">File input</label>
        <input type="file" name="file" id="image">
        
        <div class="form-group">
             
              <button type="reset" class="btn btn-default">Reset</button>
               <button type="submit" class="btn btn-primary">Submit Article</button>
            </div>
                     
                    </div>
                 </div>
              </div>

         </div>
                 </form>
         <div class="clearfix"> </div>
   </div>
            
              
            </div>
          </div>
         
            
        
               

            
            
            
            
   <?php include 'footer.php';
   ?>
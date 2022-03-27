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
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	     <h3>Site Admins</h3>
  	        
          
             <div class="col-md-10 inbox_right">
         	
            <div class="mailbox-content">
              
                <table class="table">
                     <thead>
        <tr>
          <th>Name</th>
          <th> Email</th>
          <th>Username</th>
          
        </tr>
      </thead>
                      <?php
                            
				$result = $db->prepare("SELECT * FROM table_admin ORDER BY id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
                            
                    <tbody>
                       
                            
                            <td>
                               <?php echo $row['name']; ?>
                            </td>
                           
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['username']; ?>
                            </td>
                            
                           
                            <td class="hidden-xs">
                               
                              
                                <a href="edit_admin.php?id=<?php echo $row['id']; ?>" class="fa fa-edit btn btn-xs btn-success warning_4 " >Edit</a>
                                <a href="delete_admin.php?id=<?=$row['id'] ?>" class="fa fa-eraser btn btn-xs btn-success warning_4 delbtn" >Delete</a>
                               
                                  
                            </td>
                       
                        
                        
                    </tbody>
                    <?php
                                }
                                ?>
                </table>
               </div>
             </div>
            
          
            <div class="clearfix"> </div>
      
             
             
             
             
          </div>
       
        
        
     <?php include 'footer.php'; ?>
<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */

include 'header.php';?>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>MANAGE CATEGORY</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Category Name</th>
          <th>Action</th>
          
        </tr>
      </thead>
      <tbody>
          
          <?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM cat_tbl");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                              

                
               ?> 
        <tr class="active">
          <th scope="row"><?php echo $row['id'];?></th>
          <td><?php echo $row['post_cat'];?></td>
          <td>
              <a href="delete_cat.php?id=<?=$row['id'] ?>" class="fa fa-eraser btn btn-xs btn-success warning_4 delbtn" >Delete</a>
          
          </td>
          
        </tr>
                                <?php }  ?>
        
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
  </div>
  </div>
            
 
<?php include 'footer.php'; ?>
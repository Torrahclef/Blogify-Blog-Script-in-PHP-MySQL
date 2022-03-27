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
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>Youtube Video Link</h3>
  	    <div class="well1 white">
              
                
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" action="save_youtube.php" method="post" novalidate="novalidate" ng-submit="submit()">
          <fieldset>
              <?php
                           
				$result = $db->prepare("SELECT * FROM youtube");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                              

                
               ?> 
           
              
              <div class="form-group">
               <label class="control-label" >Youtube Link </label>
                        <textarea rows="2" name="youtube_url" class="form-control1 control2"><?php echo $row['youtube_url']; ?></textarea>
              </div>
              
              
              
        <?php }?>
               
            <div class="form-group">
              
              <button type="reset" class="btn btn-default">Reset</button>
              <button type="submit" class="btn btn-primary">Save Video</button>
            </div>
          </fieldset>
        </form>
              
    </div>
        </div>
    <?php include'footer.php'; ?>
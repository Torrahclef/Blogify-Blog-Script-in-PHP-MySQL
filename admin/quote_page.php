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
  	    <h3>Daily Quote</h3>
  	    <div class="well1 white">
              
                
                <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" method="post"  action="save_quote.php" method="post" novalidate="novalidate" ng-submit="submit()">
          <fieldset>
              <?php
                           
				$result = $db->prepare("SELECT * FROM quote");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                              

                
               ?> 
           
              
              <div class="form-group">
               <label class="control-label" >Enter Quote of the day: </label>
                        <textarea rows="2" name="quote" class="form-control1 control2"><?php echo $row['quote']; ?></textarea>
              </div>
               <div class="form-group">
               <label class="control-label" >Quote by: </label>
              <input type="text" name="quote_by" value="<?php echo $row['quote_by']; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
            
               </div>
              
              
              
        <?php }?>
               
            <div class="form-group">
              
              <button type="reset" class="btn btn-default">Reset</button>
              <button type="submit" class="btn btn-primary">Save Quote</button>
            </div>
          </fieldset>
        </form>
              
    </div>
        </div>
    <?php include'footer.php'; ?>
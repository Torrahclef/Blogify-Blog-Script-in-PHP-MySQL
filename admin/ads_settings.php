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
  	    <h3>Ads Placements</h3>
  	    <div class="well1 white">
              <?php
                          
				$result = $db->prepare("SELECT * FROM table_ads");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                              

                
               ?> 
                
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" action="save_ad_setting.php" method="post" novalidate="novalidate" ng-submit="submit()">
          <fieldset>
            
              <div class="form-group">
               <label class="control-label" >Bigger Size (728 X 90) </label>
                        <textarea rows="2" name="header_ads" class="form-control1 control2"><?php echo $row['header_ads']; ?></textarea>
              </div>
              
              <div class="form-group">
               <label class="control-label" >Side Ads Code (Responsive)</label>
                        <textarea rows="2" name="side_ads" class="form-control1 control2"><?php echo $row['side_ads']; ?></textarea>
              </div>
              
              <div class="form-group">
               <label class="control-label" >Footer Ads Code</label>
                        <textarea rows="2" name="footer_ads" class="form-control1 control2"><?php echo $row['footer_ads']; ?></textarea>
              </div>
              
           
                <?php
}
?>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          </fieldset>
        </form>
             
      </div>
    </div>
    <?php include'footer.php'; ?>
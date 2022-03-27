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
  	    <h3>Create Category</h3>
  	    <div class="well1 white">
              
                
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" action="save_category.php" method="post" novalidate="novalidate" ng-submit="submit()">
          <fieldset>
            <div class="form-group">
              <label class="control-label">Category Name</label>
              <input type="text" name="name" title="Enter Category" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
            </div>
            
          
               
            <div class="form-group">
              
              <button type="reset" class="btn btn-default">Reset</button>
              <button type="submit" class="btn btn-primary">Create Category</button>
            </div>
          </fieldset>
        </form>
              
    </div>
        </div>
        
            
    <?php include'footer.php'; ?>
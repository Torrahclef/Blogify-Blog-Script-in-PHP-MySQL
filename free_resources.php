 <?php 
 /**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */
 
 include 'header.php';; ?>
	
							
							  
								<!-- content -->                      
								
                                                               
                                                                   
								 <!-- main col left --> 
                                                                 <div class=" container" id="main2">
								 <div class="col-sm-8">
                                                                    
                                                               <?php include 'ads_top.php';?>
								     <div class="panel panel-default">
                                                                             
										<div class="panel-body blog-grids">
                                                                                  
                                                                                    
                                                                                    <div class="">
		
		
                  <?php
                         
				$result = $db->prepare("SELECT * FROM tbl_resources");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                              

                
               ?> 
			        <h2 class="c-head ">Free-Resources</h2>
                               <?php echo $row['body']; ?>
			
                                <?php } ?>  </div>
                                                                             
                                                                                                 </div>  </div>
                                                                     <div class="clearfix"></div>
									
                                                                     
                                                            
                                 
                                      </div>
                                                                
                                                                     
                                                                     
                                                                     
                                                                     
                                                               <?php include 'side_right.php'; ?>
                                                                
								  </div>
                                                                 <div class="clearfix"></div>
								  <!--/row-->
                                                                  <!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your share button code -->
        
        
       <script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
        
        
        
       			  
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							 <?php include 'footer.php'; ?>
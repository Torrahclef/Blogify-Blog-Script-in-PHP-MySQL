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
                                                                    <?php include 'ads_top.php'; ?>
                                                               
								     <div class="panel panel-default">
                                                                             
										<div class="panel-body blog-grids">
                                                                                  
                                                                                    
                                                                                    <div class=" ">
		
		<div class="contact-section ">
			        <h3 class="c-head">Contact-me</h3>
				<div class="singel_right">
			     <div class="lcontact span_1_of_contact">
				      <div class="contact-form ">
                                          <form method="post"  name="contactform" action="contact-form-handler.php" enctype="multipart/form-data">
					    	    <p class="comment-form-author"><label for="author">Your Name:</label>
					    	    	<input type="text" class="textbox" name='name'v alue="Enter your name here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
						    	</p>
						        <p class="comment-form-author"><label for="author">Email:</label>
						     	   <input type="text" class="textbox" name='email' value="Enter your email here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						        </p>
                                                        
						        <p class="comment-form-author"><label for="author">Message:</label>
						    	  <textarea value="Enter your message here..." onfocus="this.value = '';" name='message' onblur="if (this.value == '') {this.value = 'Message';}">Enter your message here...</textarea>
						        </p>
						        <input name="submit" type="submit" id="submit" value="Submit">
					        </form>
				       </div>
                                 <hr>
			     </div>
                               
                              <?php
                         
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
                                  
                                    
			     <div class="contact_grid span_2_of_contact_right ">
					<h3>Address</h3>
				    <div class="address">
						<i class="pin_icon"></i>
					    <div class="contact_address">
                                                <span class="fa fa-location-arrow"> <?php echo $row['street']; ?></span><br>
 <?php echo $row['city']; ?><br><?php echo $row['country']; ?>
					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="phone"></i>
					    <div class="contact_address">
                                                <span class="fa fa-phone">    <?php echo $row['phone']; ?></span>
					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="mail"></i>
					    <div class="contact_email">
                                                <span class="fa fa-envelope">    <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></span>
					    </div>
					    <div class="clearfix"></div>
					</div>
		        </div>
                                    
                               
                                   
                                    
		        <div class="clearfix"></div>
                         <hr>
		    </div>
		  
                                 <?php }?>
                                
                              
                                
				
		</div>
	</div>
                                                                                    
                                                                          </div>
                                                                             
									  </div>
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
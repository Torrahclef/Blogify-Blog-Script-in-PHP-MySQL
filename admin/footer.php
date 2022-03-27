 <div class="copy_layout"> <?php
 /**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */
 
 
 
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
     <p>Copyright © 2015 <?php echo $row['site_name'];?>. All Rights Reserved | Design by <a href="http://facebook.com/hillsoftsnetwork" target="_blank">Hillsofts</a> </p>
                                <?php } ?> 


 </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
           <script type="text/javascript">
$(document).ready(function(){
     $("body").on("click",".delbtn",function(event){
         event.preventDefault();
         if(confirm("Are you sure you want to delete?")){
            window.location = $(this).attr("href");
         }
     });
});
</script>
</body>
</html>

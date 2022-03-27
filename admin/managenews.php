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
  	     <h3>All News</h3>
  	        
          
             <div class="col-md-10 inbox_right">
         	<form action="#" method="GET">
               <!-- Input Group -->
            </form>
            <div class="mailbox-content">
               <div class="mail-toolbar clearfix">
			    
			    <div class="float-right">
			        <?php                     //include('../connect.php');
                            if(!isset($_GET["page"])){
                                $_GET["page"] = 1;
                            }
                                
                                $tbl_name="posts_tbl";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
                            /*$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages['num'];
	*/
        $get_posts_tbl = ORM::for_table("$tbl_name")
                 ->find_array();
         
	$total_pages = count($get_posts_tbl);
	/* Setup vars for query. */
	$targetpage = "pagination.php"; 	//your file name  (the name of this file)
	$limit = 10; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	
				$result = $db->prepare("SELECT * FROM posts_tbl  ORDER BY id DESC LIMIT $start, $limit");
				$result->execute();
                                
                                /* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	 ?>
			              
                            <span class="text-muted m-r-sm">Showing
                                 <?php if($lastpage == $next-1):?>
                                    <?=$total_pages?>
                                <?php else:?>
                                <?=$page * $limit?> 
                            <?php endif;?>
                                of <?=$total_pages?>
                                        </span>
                            
                            <div class="btn-group">
                                <?php if($page != 1):?>
                                <a class="btn btn-default" href="?page=<?=$prev?>"><i class="fa fa-angle-left"></i></a>
                                <?php endif;?>
                                
                                <?php if($lastpage == $next-1):?>
                                
                                <?php else:?>
                                <a class="btn btn-default" href="?page=<?=$next?>"><i class="fa fa-angle-right"></i></a>
                                <?php endif;?>
                            </div>
                        
			        
			    </div>
               </div>
                <table class="table">
                      <?php
        
				for($i=1; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
                            
                    <tbody>
                       
                            <td class="hidden-xs">
                                <?php echo $i; ?>
                            </td>
                            <td>
                               <?php echo $row['post_title']; ?>
                            </td>
                            <td>
                            </td>
                            <td>
                                <?php echo $row['date']; ?>
                            </td>
                            
                           
                            <td class="hidden-xs">
                               
                                <a href="../printing.php?id=<?=$row['id'] ?>" target="_blank" class="fa fa-eye-slash btn btn-xs btn-primary">View</a>
                                <a href="editnews.php?id=<?php echo $row['id']; ?>" class="fa fa-edit btn btn-xs btn-success warning_4 " >Edit</a>
                                <a href="deletenews.php?id=<?=$row['id'] ?>" class="fa fa-eraser btn btn-xs btn-success warning_4 delbtn" >Delete</a>
                               
                                  
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
       
        
        
       <div class="copy_layout">
         <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
       </div>
    </div>
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
<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */

                               $result = ORM::for_table("table_ads")
                                       ->find_array();
                           ?>
                             <?php  foreach ($result as $ads):?>
                                 <div class="panel"> 
			 						<div class="text-center x-hidden">
<div class="panel-body hidden-xs text-center"><?php echo $ads['footer_ads']; ?></div>
        
                                                                        </div></div>
        
                           <?php endforeach;?>	
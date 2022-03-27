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
                             
<div class="panel-body hidden-xs text-center"><?php echo $ads['header_ads']; ?></div>
        
        
        
                           <?php endforeach;?>					
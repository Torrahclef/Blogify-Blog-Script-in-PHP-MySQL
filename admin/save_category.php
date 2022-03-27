<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */

session_start();
include('../connect.php');
$a = $_POST['name'];

 {

  //do your write to the database filename and other details   
        $sql = "INSERT INTO cat_tbl (post_cat) VALUES (:a)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a));

header("location: manage_cat.php");
    }


?>
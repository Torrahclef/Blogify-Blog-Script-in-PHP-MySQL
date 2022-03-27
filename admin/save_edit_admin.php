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
$b = $_POST['email'];
$c = $_POST['username'];
$d = $_POST['password'];
$id = $_POST["id"];

// query

$sql = "UPDATE table_admin SET `name`=?,`email`=?,`username`=?,`password`=? WHERE id=$id";


//$sql = "INSERT INTO settings (site_name,site_title,email,site_keyword,street,city,country,phone,facebook,twitter,linkedin,status) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l)";

$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d));

//$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d, ':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i, ':j'=>$j, ':k'=>$k, ':l'=>$l));
header("location: edit_admin.php?id=$id ");


?>
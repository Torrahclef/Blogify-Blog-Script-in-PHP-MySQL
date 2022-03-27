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

$a = $_POST['title'];
$b = $_POST['cat'];
$c = $_POST['body'];
$d = $_POST['tag'];
$id = $_POST["id"];

// query

$sql = "UPDATE posts_tbl SET `post_title`=?,`post_cat`=?,`post_body`=?,`post_tag`=? WHERE id=$id";


//$sql = "INSERT INTO settings (site_name,site_title,email,site_keyword,street,city,country,phone,facebook,twitter,linkedin,status) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l)";

$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d));

//$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d, ':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i, ':j'=>$j, ':k'=>$k, ':l'=>$l));
header("location: editnews.php?id=$id ");


?>
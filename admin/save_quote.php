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

$a = $_POST['quote'];
$b= $_POST['quote_by'];
// query
//$sql = "INSERT INTO youtube (youtube_url, date) VALUES (:a, now())";
$sql = "UPDATE quote SET `quote`=?, `quote_by`=? WHERE id= 1";


//$sql = "INSERT INTO settings (site_name,site_title,email,site_keyword,street,city,country,phone,facebook,twitter,linkedin,status) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l)";

$q = $db->prepare($sql);
$q->execute(array($a,$b));

//$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d, ':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i, ':j'=>$j, ':k'=>$k, ':l'=>$l));
header("location: quote_page.php");


?>
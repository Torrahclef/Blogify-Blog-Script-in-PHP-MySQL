<?php include'header.php';?>
<body id="login">

  <h2 class="form-heading">Blogify INSTALLATION</h2>
  <form class="form-signin app-cam" method="post" action="">
      <p>SET DATABASE</p>
      <input type="text" name='dbhost' class="form-control1" placeholder="DB HOST" value="localhost" autofocus="" required="">
      <input type="text" name='dbuser'  class="form-control1" placeholder="DB USER" autofocus="" required="">
      <input type="text" name='dbpass' class="form-control1" placeholder="DB PASS" autofocus="" required="">
      <input type="text" name='dbname' class="form-control1" placeholder="DB NAME" autofocus="" required="">

	  <p> CREATE ADMIN</p>
          <input type="text" name='name' class="form-control1" placeholder="FULL NAME " autofocus="" required="">
          <input type="text" name='email' class="form-control1" placeholder="EMAIL" autofocus="" required="">
          <input type="text" name='username' class="form-control1" placeholder="USER NAME" autofocus="" required="">
          <input type="password" name='password' class="form-control1" placeholder="PASSWORD" required="">
      <button class="btn btn-lg btn-success1 btn-block" type="submit">Submit</button>

  </form>
  <?php include'footer.php';?>

  <?php
  if(isset($_POST["dbhost"])){
      $string_db = '<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu
 * Hillsofts Technology Ltd.
 * (hillsofts@gmail.com)
 * ................................................................
 */

/* Database config */
$db_host		= "'.$_POST["dbhost"].'";'.'
$db_user		= "'.$_POST["dbuser"].'";'.'
$db_pass		= "'.$_POST["dbpass"].'";'.'
$db_database	= "'.$_POST["dbname"].'";'.'
include "idiorm.php";
/* End config */
 ORM::configure("mysql:host=".$db_host.";dbname=".$db_database);
 ORM::configure("username",$db_user);
 ORM::configure("password",$db_pass);


$db = new PDO("mysql:host=".$db_host.";dbname=".$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn = mysql_connect($db_host, $db_user,$db_pass);
mysql_select_db($db_database);
$mysqli = new mysqli;


';

   $mn=   fopen("../connect.php", "w");
   fwrite($mn, $string_db);
   fclose($mn);
   include '../connect.php';
     $string_query = file_get_contents("blogify.sql");

   $db->exec($string_query);

   $new_admin =ORM::for_table("table_admin")
           ->create();
   $new_admin->name = $_POST["name"];
   $new_admin->email = $_POST["email"];
   $new_admin->username = $_POST["username"];
   $new_admin->password = $_POST["password"];

   if($new_admin->save()){
       header("location: ../admin");
   }
  }

  ?>
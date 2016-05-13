 * @author anael hernadez rivera
 * @version 1.0 
<?php
  session_start();
  unset($_SESSION["usuario"]); 
  session_destroy();
  header("Location: login.php");
 // exit;
?>
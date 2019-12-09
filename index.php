<!DOCTYPE html>
<html lang="en">
<?php
session_start();
      if(isset($_SESSION["active_admin"]))
      {
            require "Rapid/required/settings.php";
            require "Rapid/required/database.php";
            require "header.php";
            require "content.php";
            require "footer.php";
      }
      else { echo"unautharised accces";}
?>
</html>

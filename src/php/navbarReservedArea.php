<?php
switch ($_SESSION["accountLog"][1]) {
     case 1:
          $_GET["barAccess"] = array("Aggiungi" => array(array("Locale", "#"), array("Account", "#")));
          break;
     case 2:
          break;
     case 3:
          break;
     default: unset($_GET["barAccess"]);
}

require 'navbarFactory.php';
?>

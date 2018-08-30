<?php
    function checkPage($arg) {
      switch ($arg) {
        case "home":
          $title = "Home";
          break;
        case "downloads":
          $title = "Downloads";
          break;
      }
 return $title;
}
?>
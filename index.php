<!DOCTYPE html>

<html>
   <head>
      <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>I completed the prework</title>
   </head>
   <body>
      <?php

      $statement = "<h1>I completed the prework!</h1>";
      echo $statement;

      echo "<span class='date'>Date: ", longdate(time()), "</span>";

      function longdate($timestamp) {
         return date("l F jS Y", $timestamp);
      }

      ?>
   </body>
</html>

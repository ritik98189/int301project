<?php
   $connection=mysqli_connect("localhost","root","somu","mysql") or die("Could not connect!",mysqli_connect_error());
   if($connection){
      echo "Connection is sucessful";
    }
    mysql_close($connection);
?>

<?php
   echo 'hello there<br>';
   
   $dbhost = 'localhost';
   $dbuser = 'john';
   $dbpass = 'chicken';
   
   echo 'hello hello<br>';	

   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   mysql_close($conn);
?>
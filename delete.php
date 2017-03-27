<?php

   $dbhost = '127.0.0.1';
   $dbuser = 'john';
   $dbpass = 'chicken';
   $dbname = 'TASKDB';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   if(! $conn )
   {
   die('Could not connect: ' . mysqli_error());
   }
   
   $id = $_GET['id'];

   $sql = "DELETE FROM task where id=$id";
   //echo "$sql";
         
   mysqli_query( $conn, $sql ) or die (mysqli_error($conn));	 
            
   echo "Deleted data successfully\n";
            
   mysqli_close($conn);

   header( 'Location: open1.php' ) ;
   ?>

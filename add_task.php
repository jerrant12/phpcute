<html>
   
   <head>
      <title>Add New Task</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['add']))
	 {
         $dbhost = '127.0.0.1';
         $dbuser = 'john';
         $dbpass = 'chicken';
	 $dbname = 'TASKDB';
	 
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
            
         if(! $conn )
	 {
            die('Could not connect: ' . mysqli_error());
         }

	 $task = $_POST['task_desc'];

	 $sql = "INSERT INTO task (task_desc) VALUES ('$task')";
//         echo "$sql";
         
         mysqli_query( $conn, $sql ) or die (mysqli_error($conn));	 
            
         echo "Entered data successfully\n";
            
         mysqli_close($conn);

	 header( 'Location: open1.php' ) ;
         }
	 else
	 {
         ?>
            
      <form method = "post" action = "<?php $_PHP_SELF ?>">
        <table width = "400" border = "0" cellspacing = "1" 
               cellpadding = "2">
                  
          <tr>
            <td width = "100">Task Description</td>
            <td><input name = "task_desc" type = "text" id = "task_desc"></td>
          </tr>
                  
          <tr>
            <td width = "100"> </td>
            <td> </td>
          </tr>
                  
          <tr>
            <td width = "100"> </td>
            <td>
              <input name = "add" type = "submit" id = "add" 
                     value = "Add Task">
            </td>
          </tr>
                  
        </table>
      </form>
      
      <?php
         }
	 ?>
      
   </body>
</html>

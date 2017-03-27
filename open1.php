<?php

//Step1
 $db = mysqli_connect('127.0.0.1','john','chicken','TASKDB')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h2>Task List</h2>

 
 <?php
    //Step2
    $query = "SELECT * FROM task";
    $result = mysqli_query($db, $query) or die('Error querying database.');
    ?>

 <table border="1" >
   <tr><th>ID</th><th>Task Description</th><th>Actions</th></tr>

   <?php
    
      while ($row = mysqli_fetch_array($result))
      {
      $id = $row['id'];
      $desc = $row['task_desc'];
      echo "<tr><td>";
      echo $row['id'];
      echo "</td><td>";
      echo $row['task_desc'];
      echo "</td><td>";
      echo "<a href=\"delete.php?id=$id\">Delete</a> ";
      echo "<a href=\"update_task.php?id=$id&task_desc=$desc\">Update</a>";
      echo "</td></tr>";  
      }
      ?>
 </table>

 <?php
    //Step 4
    
    mysqli_close($db);
    ?>
 
 <a href="add_task.php"> Add Task </a>
 
 </body>
</html>

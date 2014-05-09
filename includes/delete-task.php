<?php 
    
    require("connect.php");
    
    $task_id = strip_tags( $_POST['task_id'] );
    
    mysql_query("INSERT INTO archive SELECT * FROM tasks WHERE id='$task_id'");
    mysql_query("DELETE FROM tasks WHERE id='$task_id'");
    
    if(mysql_affected_rows()>0){   // Just for testing
        echo "Success";
    }else{
        echo "Error deleting Data";
    }
?>
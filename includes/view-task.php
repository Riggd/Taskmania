<?php
    $query = mysql_query("SELECT * FROM tasks ORDER BY date ASC, time ASC");
    $numrows = mysql_num_rows($query);

    if($numrows>0){
	while( $row = mysql_fetch_assoc( $query ) ){

	    $task_id = $row['id'];
	    $task_name = $row['task'];

	    echo '<li>
                    <span>'.$task_name.'</span>
		    <img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg" />
		  </li>';
	}
    }
?>
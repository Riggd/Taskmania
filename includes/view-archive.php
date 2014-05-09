<?php
    require("connect.php");
    $query = mysql_query("SELECT * FROM archive ORDER BY date ASC, time ASC");
    $numrows = mysql_num_rows($query);

    if($numrows>0){
        while( $row = mysql_fetch_assoc( $query ) ){

            $arch_name = $row['task'];

            echo '<li class="archive-item">
                        <span>'.$arch_name.'</span>
              </li>';
        }
    }
?>
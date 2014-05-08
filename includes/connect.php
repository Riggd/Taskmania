<?php
    $server = 'derekonay.com';
    $db_user = 'derek_list';
    $db_pass = 'list!@#';
    $db_name = 'derek_todo';
    
    mysql_connect($server, $db_user, $db_pass) or
        die("Could not connect to server!");
    mysql_select_db($db_name) or 
        die("Could not connect to database!");    
?>
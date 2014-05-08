<!DOCTYPE html>
<html>
<head>
    <title>2014 Summer Todo List</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:200,400,500,600">
</head>
<body>
    <div class="container">
        <div class="todo-title">
            Summer Todo List
        </div>
        <div class="todo-list">
            <ul>
                <?php 
                    require('includes/connect.php');
                    include('includes/view-task.php');
                ?>
            </ul>
        </div>
        <form class="add-task" autocomplete="off">
            <input type="text" name="new-task" placeholder="Oh, shit I have to..." />
        </form>
    </div>
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
</body>
</html>
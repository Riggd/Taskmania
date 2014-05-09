add_task();
show_tasks();
show_archive();
delete_task();

function add_task() {
    $('.add-task').submit(function(){
    var new_task = $('.add-task input[name=new-task]').val();
    
    // Change to task view and fadeout archive items
    $('.archive-item').fadeOut();
    
    if(new_task != ''){
        $.post('includes/add-task.php', { task: new_task }, function( data ) {
            $('.add-task input[name=new-task]').val('');
            $(data).appendTo('.todo-list ul').hide().fadeIn();
        });
    }
    return false; // Ensure that the form does not submit twice
    });
}

function delete_task() {
    $('.delete-button').click( function(){
        var current_element = $(this);
        var id = $(this).attr('id');
               
        $.post('includes/delete-task.php', { task_id: id }, function() {
            current_element.parent().fadeOut("fast", function() { $(this).remove(); });
            alert('it worked');
        });
    });
}

function show_tasks() {
    $('.task-button').click(function(){
        var current_element = $(this);
        var id = $(this).attr('id');       
           
        $.post('includes/view-task.php', { task: id }, function(task) {
            $(task).appendTo('.todo-list ul').hide().fadeIn(); 
        });
        
        $('.archive-item').fadeOut("slow", function() { $('.archive-item').remove(); });
        $('.task-button').attr('disabled','disabled');     
        $('.archive-button').attr('disabled',false);        
    });
 }

function show_archive() { 
    $('.archive-button').click(function(){
        var current_element = $(this);
        var id = $(this).attr('id');
          
        $.post('includes/view-archive.php', { arch_id: id }, function(archive) {
            $(archive).appendTo('.todo-list ul').hide().fadeIn();              
        });
        
        $('.task-item').fadeOut("slow", function() { $('.task-item').remove(); });
        $('.archive-button').attr('disabled','disabled');     
        $('.task-button').attr('disabled',false);  
    });
}
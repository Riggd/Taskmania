add_task();
delete_task();

function add_task() {
    $('.add-task').submit(function(){
    var new_task = $('.add-task input[name=new-task]').val();

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
    $('.delete-button').click(function(){
        var current_element = $(this);
        var id = $(this).attr('id');

        $.post('includes/delete-task.php', { task_id: id }, function() {
            current_element.parent().fadeOut("fast", function() { $(this).remove(); });
        });
    });
}
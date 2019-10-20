<?php
include('../functions.php');

// Initialize field value variables
$task_title = $task_text = $task_due_date = '';
$task_priority = NULL;
$success = false;

//Check if the form has been submitted 
if (isset($_POST['add'])) {
    //Validation 

    //If there are no errors...

    $success = create_task($_POST);

    //Save new task to database
    var_dump($success);

    //Display success message

    // $task_title = $_POST['task_title'];
    // $task_text = $_POST['task_text'];
    // if (isset($_POST['task_priority'])) {
    //     $task_priority = $_POST['task_priority'];
    // } else {
    //     $task_priority = array();
    // }
}




$page_title = 'Add Task';
include('header.php');
?>

<h3 class="mb-5 ">Add your new task</h3>
<div>
    <!-- <?php if ($success) : ?>
        <div class="alert alert-success mt-2">Task has been added. NOW GET TO WORK!</div>
    <?php endif; ?> -->
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo uniqid(); ?>">

        <div class="form-group mb-4">
            <label>Title:</label>
            <!-- <input type="text" name="task_title" class="form-control" value="<?php echo $post_title; ?>"> -->
            <input type="text" name="task_title" class="form-control" value="Task Title">
            <!-- <?php if (!empty($title_error)) : ?>
                <div class="alert alert-danger mt-2"><?php echo $title_error; ?></div>
            <?php endif; ?> -->
        </div>

        <div class="form-group mb-4">
            <label>Description:</label>
            <textarea name="task_text" class="form-control" placeholder="Task Description..."></textarea>
            <!-- <?php if (!empty($text_error)) : ?>
                <div class="alert alert-danger mt-2"><?php echo $text_error; ?></div>
            <?php endif; ?> -->
        </div>

        <div class="form-group mb-4">
            <label>Priority:</label>
            <select class="form-control" name="task_priority">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
        <div class="form-group mb-4">
            <label>Due Date</label>
            <input type="datetime-local" name="task_due_date" value="2019-10-17">
        </div>
        <button type="submit" name="add" class="btn btn-primary">Add Task</button>
    </form>
</div>



<?php include('footer.php'); ?>
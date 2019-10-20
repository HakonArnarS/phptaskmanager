<?php


include('functions.php');
$all_tasks = get_all_tasks();
$page_title = 'Task Manager 3000';
include('components/header.php');
?>

<div class="row">
    <div class="col">
        <h1 class="text-center">To Do</h1>
        <?php include('components/card.php');  ?>
    </div>
    <div class="col">
        <h1 class="text-center">Doing</h1>
        <?php include('components/card.php');  ?>
    </div>
    <div class="col">
        <h1 class="text-center">Done</h1>
        <?php include('components/card.php');  ?>
    </div>
</div>





<?php include('components/footer.php'); ?>
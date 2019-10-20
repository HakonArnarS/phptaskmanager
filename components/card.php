<?php

//include('../functions.php');
?>


<div class="border border-dark rounded p-3">
    <h4>Example Task Title</h4>
    <p>Task Description Example</p>
    <p>Priority: 3</p>
    <div class="form-group mb-4">
        <form>
            <select class="form-control">
                <option>To Do</option>
                <option>Doing</option>
                <option>Done</option>
            </select>
        </form>
    </div>
    <div>
        <button type="submit" name="edit_task" class="btn btn-primary">Edit</button>
        <button type="submit" name="remove" class="btn btn-primary">Remove</button>
    </div>
</div>
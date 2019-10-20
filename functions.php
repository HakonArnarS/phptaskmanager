<?php

function connect()
{
    $credentials = [
        'server' => 'localhost',
        'username' => 'root',
        'password' => 'c0raX1409',
        'database' => 'mytasks',
        'port' => 3306
    ];
    $connection = new mysqli(
        $credentials['server'],
        $credentials['username'],
        $credentials['password'],
        $credentials['database'],
        $credentials['port']
    );
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    // echo "Connected successfully!";
    return $connection;
}

function create_task($task_data)
{
    // if (!is_array($task_data)) {
    //     die("Failed to create new task");
    // }

    $connection = connect();

    $sql = "INSERT INTO tasks(title, description, priority, due_date)";
    $sql .= "VALUES (";
    $sql .= "'" . $task_data['task_title'] . "',";
    $sql .= "'" . $task_data['task_text'] . "',";
    $sql .= $task_data['task_priority'] . ",";
    $sql .= "'" . $task_data['task_due_date'] . "'";
    $sql .= ")";


    if ($connection->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }

    $connection->close();
}

function get_task($task_id)
{
    $connection = connect();

    $sql = "SELECT * FROM mytasks.tasks WHERE ID = $task_id";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        return $row;
    } else {
        die("No task was found");
    }

    $connection->close();
}

function get_all_tasks()
{
    $connection = connect();

    $sql = "SELECT * FROM mytasks.tasks";
    $result = $connection->query($sql);
    $tasks = [];
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            array_push($tasks, $row);
        }
    } else {
        die("0 results");
    }

    $connection->close();

    return $tasks;
}

function update_task($task_id)
{
    $connection = connect();

    $sql = "UPDATE task WHERE id=$task_id";

    if ($connection->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $connection->error;
    }

    $connection->close();
}

function delete_task($task_id)
{
    $connection = connect();

    $sql = "DELETE task WHERE $task_id";

    if ($connection->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $connection->error;
    }

    $connection->close();
}

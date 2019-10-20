<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo (isset($page_title)) ? $page_title : 'Generic title'; ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/sketchy/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css">
</head>

<body>
    <script id="__bs_script__">
        document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
    </script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/phptaskmanager/">Task Manager 3000</a>
        <div class="ml-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/phptaskmanager/components/add_task.php">Add a task</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/phptaskmanager/components/edit_task.php">Editing task</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container py-5">
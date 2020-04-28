<?php session_start();
isset($_SESSION['views']) ? $views = $_SESSION['views'] : $views = NULL;
isset($_SESSION['browser']) ? $browser = $_SESSION['browser'] : $browser = NULL;
isset($_SESSION['role']) ? $role = $_SESSION['role'] : $role = NULL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Session</title>
</head>
<body>
    <?php 
    echo isset($views) ? "<p>There are $views views on this page.</p>" :  "<p>There is no views variable set.</p>";
    /* if (isset($views)) {
        echo "<p>There are $views views on this page.</p>";
    } else {
        echo "<p>There is no views variable set.</p>";
    }*/
    echo isset($browser) ? "<p>Your web browser credentials fall under $browser.</p>" : "<p>There is no browser variable set.</p>";
    echo isset($role) ? "<p>Your user role is $role.</p>" : "<p>There is no views variable set.</p>";
    ?>
    <p>
        <a href="create_session.php">Create Session</a>
        <a href="destroy_session.php">Destroy Session</a>
        <a href="destroy_all_session.php">Destroy All Sessions</a>
    </p>
</body>
</html>
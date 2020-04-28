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
    <title>Destroy Session</title>
</head>
<body>
<p>
        <?php 
        unset($_SESSION['views'], $_SESSION['browser'], $_SESSION['role']);
        ?>
        <a href="create_session.php">Create Session</a>
        <a href="read_session.php">Read Session</a>
        <a href="destroy_all_session.php">Destroy All Sessions</a>
    </p>
</body>
</html>
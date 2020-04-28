<?php session_start();
!isset($_SESSION['views']) ? $_SESSION['views'] = 0 : '';
!isset($_SESSION['browser']) ? $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'] : '';
!isset($_SESSION['role']) ? $_SESSION['role'] = 'admin' : '';
$_SESSION['views'] += 1;
$views = $_SESSION['views'];
$browser = $_SESSION['browser'];
$role = $_SESSION['role'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Session</title>
</head>
<body>
    <?php 
    echo "<p>There are $views views on this page.</p>";
    echo "<p>Your web browser credentials fall under $browser.</p>";
    echo "<p>Your user role is $role.</p>"; 
    ?>
    <p>
        <a href="read_session.php">Read Session</a>
        <a href="destroy_session.php">Destroy Session</a>
        <a href="destroy_all_session.php">Destroy All Sessions</a>
    </p>
</body>
</html>
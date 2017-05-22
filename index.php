<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AmazingApp</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Our stylesheet -->
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <?php
    session_start();

    // Report all errors except E_NOTICE
    error_reporting(E_ALL ^ E_NOTICE);
    $user = new stdClass();
    if (isset($_SESSION["user"]))
    {
        $user = $_SESSION["user"];
    }
    if(isset($_GET['page'])) {
        $view = $_GET['page'];
        $sideview = "sidebar";
        include_once "views/$sideview.php";
    }else {
        $view = "login";
    }
    include_once "views/$view.php";
    ?>
</head>
<body>

<?php echo $sidebarcode ?>

<div id="content">

    <?php echo $content?>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
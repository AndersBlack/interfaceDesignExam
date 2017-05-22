<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AmazingApp</title>

    <!-- Our stylesheet -->
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php
    session_start();
    if(isset($_GET['page'])) {
        $view = $_GET['page'];
        $sideview = "sidebar";
    }else {
        $view = "login";
    }

    if (isset($_SESSION["user"]))
    {
        $user = $_SESSION["user"];
    }

    include_once "views/$sideview.php";
    include_once "views/$view.php";
    ?>
</head>
<body>

<div id="content">
    <?php echo html_entity_decode($sidecontent); ?>
    <?php echo $content?>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Our stylesheet -->
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php
    if(isset($_GET['page'])) {
        $view = $_GET['page'];
    }else {
        $view = "login";
    }
    include_once "views/$view.php";
    ?>
</head>
<body>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AmazingApp</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Our stylesheet -->
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--  Date and time CSS  -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="node_modules/sweetalert/dist/sweetalert.css">

    <?php
    session_start();

    // Report all errors except E_NOTICE
    error_reporting(E_ALL ^ E_NOTICE);
    $user = new stdClass();
    if (isset($_SESSION["user"]))
    {
        $user = $_SESSION["user"];
        $username = $user->username;
        checkForAdmin("users.txt",$username,$user);

        if($user->admin == 1){
            $isShowing = "showing";
            $Color = "adminColor";
            $notShowing = "hide";
        }else{
            $isShowing = "hide";
            $Color = "userColor";
        }
    }
    if(isset($_GET['page'])) {
        $view = $_GET['page'];
        $sideview = "sidebar";
        include_once "views/$sideview.php";
    }else {
        $view = "displayEvents";
        $sideview = "sidebar";
        $Color = "userColor";
        $sideview = "sidebarNoSess";
        include_once "views/$sideview.php";
    }
    include_once "views/$view.php";

    function checkForAdmin($filename, $username, $user) {
        $sArray = file_get_contents($filename);
        $jArray = json_encode($sArray);

        for ($i = 0; $i < count($jArray); $i++){
            if($jArray[$i]->id == $username && $jArray[$i]->admin == 1){
                $user->admin = 1;
                break;
            }
        }

    }

    ?>
</head>
<body>

<?php echo $sidebarcode ?>

<div id="content">

    <?php echo $content?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#lbl-dateEvent" ).datepicker();
    } );

    $(".btn-join-event").click(function(){
        $.ajax({
            "url":"views/isUserLoggedIn.php",
            "method":"get",
            "dataType":"json"
        }).done(function(jData){
            if(jData.status == "logged"){
                $(".form-join-event").css("display","flex");
            } else {
                swal({
                    title: "Please log in to join event!",
                    confirmButtonColor: "#5cb85c",
                    confirmButtonText: "Log in",
                    html: true
            },
                    function(){
                        window.location.href ='views/login.php';
                    });

            }
        });

    })
    </script>

    </body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Velislav
 * Date: 22/05/2017
 * Time: 11:55
 */


if(isset($_GET["username"], $_GET["password"]))
{
    $asUsers = file_get_contents("users.txt");
    $ajUsers = json_decode($asUsers);

    foreach($ajUsers as $jUser)
    {
        if($jUser->username == $_GET["username"] && $jUser->password == $_GET["password"])
        {
            session_start();
            $_SESSION["user"] = $jUser;
            header("Location: index.php?page=profile");
        }
        else
        {
            echo "user not found";
        }
    }
}

$content =
    "<div class=\"wdw-login\">
    <form method=\"get\">
        <input type=\"text\" name=\"username\" id=\"lbl-username\" placeholder=\"username\">
        <input type=\"text\" name=\"password\" id=\"lbl-password\" placeholder=\"password\">
        <input type=\"submit\" id=\"btn-login-submit\" value=\"Log in\">
    </form>
    </div>";



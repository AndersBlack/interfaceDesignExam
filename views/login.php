<?php
/**
 * Created by PhpStorm.
 * User: Velislav
 * Date: 22/05/2017
 * Time: 11:55
 */
session_destroy();
session_unset();

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
            header("Location: index.php?page=displayEvents");
        }
        else
        {
            echo "user not found";
        }
    }
}

$content =
    "<div id=\"wdw-login-master\">
<div class=\"wdw-login-text\">
    <h1>Welcome to Anvil</h1>
    <h5>The best event system in town!</h5>
</div>
<div class=\"wdw-login\">
    <form method=\"get\">
        <input type=\"text\" name=\"username\" id=\"lbl-username\" class=\"form-control\" placeholder=\"username\">
        <input type=\"text\" name=\"password\" id=\"lbl-password\" class=\"form-control\" placeholder=\"password\">
        <input type=\"submit\" id=\"btn-login-submit\" class=\"btn btn-primary\" value=\"Login\">
    </form>
    </div>
    </div>
    </div>";



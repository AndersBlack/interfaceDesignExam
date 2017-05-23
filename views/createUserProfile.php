<?php

require "views/functions.php";

if (isset($_POST['createUser'])){

    $username= $_POST['createUser'];
    $asUsers = file_get_contents("users.txt");
    $ajUsers = json_decode($asUsers);

    $newUser = new stdClass();

    $newUser->id = getGUID();
    $newUser->username = $username;


    array_push($ajUsers , $newUser);


    $asUsers = json_encode($ajUsers);
    file_put_contents("users.txt", $asUsers);;


}

$content = "<div class=\"wdw-createUser\">
    <form method='post'>

        <div class=\"wdw-createEvent-InputArea\">
            <label>Name of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-nameEvent\" name=\"createUser\">
            <input type=\"submit\" class=\"btn btn-primary\" id=\"btn-submitEvent\" value=\"Create User\">
        </div>
       

    </form>
";
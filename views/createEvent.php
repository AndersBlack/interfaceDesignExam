<?php

$users = file_get_contents("users.txt");
$ajUsers = json_decode($users);

$content = "<div class=\"wdw-createEvent\">
    <form>

        <div class=\"wdw-createEvent-InputArea\">
            <label>Name of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-nameEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label>Location of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-localEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label>Theme of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-themeEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label>Date of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-dateEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label>Description of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-descriptionEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label>Partner of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-partnerEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label> Capacity of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-capacityEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label>Manager of the Event:</label>
            <select id=\"drp-users\">";

foreach ( $ajUsers as $jUser) {
    $content .= "<option value='$jUser->username'>$jUser->username</option>";
};


$content .="<!--<input type=\"text\" class=\"createEvent form-control\">-->
            </select>
        </div>

        <div class=\"wdw-createEvent-InputArea\">
            <label>Picture of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-pictureEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <input type=\"button\" class=\"btn btn-primary\" id=\"btn-submitEvent\" value=\"Create event\">
        </div>

    </form>

</div>";

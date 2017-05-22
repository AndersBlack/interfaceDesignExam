<?php
/**
 * Created by PhpStorm.
 * User: AndersBlack
 * Date: 22/05/2017
 * Time: 13.55
 */
// Report all errors except E_NOTICE
error_reporting(E_ALL ^ E_NOTICE);

$sidebarcode = "<div id=\"wdw-sidebar\">
        <div id=\"wdw-hello\"><h4>Welcome ".$user->username."</h4></div>
        <div id=\"wdw-view-list\">
            <a href=\"views/profile.php?page=displayEvents\"><h5>All Events</h5></a>
            <a href=\"views/profile.php?page=displayPartners\"><h5>All Partners</h5></a>
            <a href=\"views/profile.php?page=displayUsers\"><h5>All Users</h5></a>
        </div>
        <div id=\"wdw-add-functions\">
            <a href=\"views/profile.php?page=createEvent\"><h5>Add Event</h5></a>
            <a href=\"views/profile.php?page=createUserProfile\"><h5>Add User</h5></a>
        </div>
    </div>";

?>
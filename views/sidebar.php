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
            <a href=\"index.php?page=displayEvents\"><h5>All Events</h5></a>
            <a href=\"index.php?page=displayPartners\"><h5>All Partners</h5></a>
            <a href=\"index.php?page=displayUsers\"><h5>All Users</h5></a>
        </div>
        <div id=\"wdw-add-functions\">
            <a href=\"index.php?page=createEvent\"><h5>Add Event</h5></a>
            <a href=\"index.php?page=createUserProfile\"><h5>Add User</h5></a>
        </div>
    </div>
            <div class=\"dropdown\">
          <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Menu
          <span class=\"caret\"></span></button>
          <ul class=\"dropdown-menu\">
            <li><a href=\"index.php?page=displayEvents\">All Events</a></li>
            <li><a href=\"index.php?page=displayPartners\">All Partners</a></li>
            <li><a href=\"index.php?page=displayUsers\">All Users</a></li>
            <li><a href=\"index.php?page=createEvent\">Add Event</a></li>
            <li><a href=\"index.php?page=createUserProfile\">Add User</a></li>
          </ul>
        </div>";

?>
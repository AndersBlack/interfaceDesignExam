<?php
/**
 * Created by PhpStorm.
 * User: Velislav
 * Date: 22/05/2017
 * Time: 15:39
 */

$asEvents = file_get_contents("events.txt");
$ajEvents = json_decode($asEvents);

$allEvents = "
    
    <div class='wdw-filters'>
    <h4>Filter by:</h4>
    <div class='filter-location'><a href='index.php?page=filter&value=location'>Location</a></div>
    <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
    <div class='filter-capacity'><a href='index.php?page=filter&value=capacity'>Capacity</a></div>
    <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
    <div class='filter-theme'><a href='index.php?page=filter&value=theme'>Theme</a></div>
    </div>
    <div class='wdw-events'>".displayAllEvents($ajEvents)."</div>
    <div class='btn-admin-func'>+</div>
    <div class='admin-func grow'>
        <button class='btn btn-success'>Add Event</button>
        <button class='btn btn-success'>Add User</button>
    </div>
    </div>
    

";

function displayAllEvents($ajEvents){
    $event="";
    foreach($ajEvents as $jEvent)
    {
        $event .= "
        <a href='?page=displayEventDetails&amp;event_id=$jEvent->id'>
            <div class='event'>
                <div class='event-img'>
                    <img src='$jEvent->image' class='img-circle' alt='event image'>
                </div>
                <div class='event-info'>
                    <div>
                        <h3>$jEvent->eventname</h3>                     
                    </div>
                    <div>
                        <h5>$jEvent->date</h5>                       
                    </div>
                </div>
            </div>
        </a>";
    }
    return $event;
}

$content = $allEvents;
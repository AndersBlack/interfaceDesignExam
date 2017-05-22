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
    <div class='filter-location'>Location</div>
    <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
    <div class='filter-capacity'>Capacity</div>
    <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
    <div class='filter-theme'>Theme</div>
    </div>
    <div class='wdw-events'>".displayAllEvents($ajEvents)."</div>
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
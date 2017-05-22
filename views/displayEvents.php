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
    <div class='filters'>
    <h4>Filter by:</h4>
    <div class='filter-location'>Location</div>
    <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
    <div class='filter-capacity'>Capacity</div>
    <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
    <div class='filter-theme'>Theme</div>
    </div>
    <div class='events'>".displayAllEvents($ajEvents)."</div>
</div>
";

function displayAllEvents($ajEvents){
    $event="";
    foreach($ajEvents as $jEvent)
    {
        $event .= "<div class='event'>
        <div class='wdw-event-img'>
            <img src='$jEvent->image' alt='event image'>
        </div>
        <div class='wdw-event-info'>
            <div>
                <h3>$jEvent->eventname</h3>
                <h5>Partner: $jEvent->partner</h5>
            </div>
            <div>
                <h5>Theme: $jEvent->theme</h5>
                <p>$jEvent->description</p>
            </div>
            <div>
                <h5>$jEvent->date</h5>
                <h5>Capacity: $jEvent->capacity</h5>
            </div>
        </div>
    </div>";
    }
    return $event;
}

$content = $allEvents;
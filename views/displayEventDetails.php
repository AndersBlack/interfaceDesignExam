<?php
/**
 * Created by PhpStorm.
 * User: Velislav
 * Date: 22/05/2017
 * Time: 21:17
 */

$id = $_GET["event_id"];

$asEvents = file_get_contents("events.txt");
$ajEvents = json_decode($asEvents);

$eventDetails = "";
foreach($ajEvents as $jEvent)
{
    if($jEvent->id == $id)
    {
        $eventDetails.="
    <div class='wdw-event-details'>
         <div class='details-img'>
            <img src='$jEvent->image' class='img-circle' alt='event image'>
        </div>
        <h2>$jEvent->eventname</h2>
        <p>$jEvent->date</p>
        <p>$jEvent->location</p>
        <p class='event-details-description'>$jEvent->description</p>
        <p>Theme:</p>
        <h4>$jEvent->theme</h4>
        <p>Capacity:</p>
        <h4>$jEvent->capacity</h4>
        <p>Partner:</p>
        <h4>$jEvent->partner</h4>
        <p>Responsible:</p>
        <h4>$jEvent->responsible</h4>
        <button class='btn btn-primary'>Edit event</button>
    </div>";
    }

}

$content = $eventDetails;
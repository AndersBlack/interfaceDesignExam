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
        <h3>$jEvent->date</h3>
        <p>$jEvent->description</p>
        <h3>Theme:</h3>
        <h4>$jEvent->theme</h4>
        <h3>Capacity:</h3>
        <h4>$jEvent->capacity</h4>
        <h3>Partner:</h3>
        <h4>$jEvent->partner</h4>
        <h3>Responsible:</h3>
        <h4>$jEvent->responsible</h4>
        <button class='btn btn-primary'>Edit event</button>
    </div>";
    }

}

$content = $eventDetails;
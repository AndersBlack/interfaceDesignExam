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
    <form method='post' action='index.php?page=editEvent'>
         <div class='details-img'>
            <img src='$jEvent->image' class='img-circle' alt='event image'>
            <input name='image' type='hidden' value='$jEvent->image'>
        </div>
        <h2>$jEvent->eventname</h2>
        <input name='eventname' type='hidden' value='$jEvent->eventname'>
        <p>$jEvent->date</p>
        <input name='date' type='hidden' value='$jEvent->date'>
        <p>$jEvent->location</p>
        <input name='location' type='hidden' value='$jEvent->location'>
        <p class='event-details-description'>$jEvent->description</p>
        <input name='description' type='hidden' value='$jEvent->description'>
        <p>Theme:</p>
        <h4>$jEvent->theme</h4>
        <input name='theme' type='hidden' value='$jEvent->theme'>
        <p>Capacity:</p>
        <h4>$jEvent->capacity</h4>
        <input name='capacity' type='hidden' value='$jEvent->capacity'>
        <p>Partner:</p>
        <h4>$jEvent->partner</h4>
        <input name='partner' type='hidden' value='$jEvent->partner'>
        <p>Responsible:</p>
        <h4>$jEvent->responsible</h4>
        <input name='responsible' type='hidden' value='$jEvent->responsible'>
        <input name='id' type='hidden' value='$jEvent->id'>
        <input type='submit' class='btn btn-primary' value='Edit event'>
        <a class='btn btn-danger' href='views/deleteEntry.php?entry=event&id=$jEvent->id'>Delete event</a>
        </form>
    </div>";
    }

}

$content = $eventDetails;
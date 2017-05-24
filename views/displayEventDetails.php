<?php
/**
 * Created by PhpStorm.
 * User: Velislav
 * Date: 22/05/2017
 * Time: 21:17
 */
$id = $_GET["event_id"];
$user = $_SESSION['user'];
$username = $user->username;
$asEvents = file_get_contents("events.txt");
$ajEvents = json_decode($asEvents);

if(isset($_POST["cardNumber"]))
{
    foreach($ajEvents as $jEvent) {
        if ($jEvent->id == $id) {
            $jEvent->capacity--;

            $asEvents = json_encode($ajEvents);
            file_put_contents("events.txt", $asEvents);
        }
    }
}

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
        <input type='submit' class='btn btn-primary $isShowing' value='Edit event'>
        <a class='btn btn-danger $isShowing' href='views/deleteEntry.php?entry=event&id=$jEvent->id'>Delete event</a>
        </form>
        <input type='submit' class='btn-join-event btn btn-success $notShowing' value='Join event'>
        <div class='wdw-join-event'>
        <form method='post' action='index.php?page=displayEventDetails&event_id=$id' class='form-join-event'>
        <input class='form-control' name='name' placeholder='name' type='text' value='$username'>
        <input class='form-control' name='cardNumber' placeholder='credit card number' type='text'>
        <input class='btn btn-primary' type='submit' value='Confirm'>
        </form>
        </div>
    </div>";
    }

}

$content = $eventDetails;
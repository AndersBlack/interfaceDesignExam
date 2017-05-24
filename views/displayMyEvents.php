<?php

$userId = $_GET["user_id"];
$user = $_SESSION["user"];

$asEvents = file_get_contents("events.txt");
$ajEvents = json_decode($asEvents);


$event="";
foreach($user->events as $eventId)
{
    foreach($ajEvents as $jEvent)
    if($jEvent->id == $eventId){
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

}
$content=$event;
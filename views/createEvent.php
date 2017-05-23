<?php

$users = file_get_contents("../users.txt");
$jData = json_decode($users);
$options = [];

foreach ( $jData as $jObject) {
    $options[$jObject['username']];
    //echo '<jObject username=' . $jObject->id . '>'. $jObject->username . '</jObject>';
   // echo $jObject->username performer;
    
};





$content = "<div class=\"wdw-createEvent\">
    <form>

        <div class=\"wdw-createEvent-InputArea\">
            <label>Name of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-nameEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label>Location of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-localEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label>Theme of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-themeEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label>Date of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-dateEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label>Description of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-descriptionEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label>Partner of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-partnerEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label> Capacity of the Event:</label>
            <input type=\"text\" class=\"createEvent form-control\" id=\"lbl-capacityEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <label>Manager of the Event:</label>
            <select id=\"drp-users\">
              <!--<input type=\"text\" class=\"createEvent form-control\">-->
            </select>
        </div>

        <div class=\"wdw-createEvent-InputArea\">
            <label>Picture of the Event:</label>
            <input type=\"file\" class=\"createEvent form-control\" id=\"lbl-pictureEvent\">
        </div>
        <div class=\"wdw-createEvent-InputArea\">
            <input type=\"button\" class=\"btn btn-primary\" id=\"btn-submitEvent\" value=\"Create event\">
        </div>

    </form>

</div>";
    //<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
//<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
//<script>
//$( function() {
//    $( "#lbl-dateEvent" ).datepicker();
//} );
//
//
//    $("#btn-submitEvent").click(function () {
//
//
//        var fieldName = $("#lbl-nameEvent").val();
//        var fieldLocal = $("#lbl-localEventEvent").val();
//        var fieldTheme = $("#lbl-themeEventEvent").val();
//        var fieldDate = $("#lbl-dateEventEvent").val();
//        var fieldEvent = $("#lbl-Event").val();
//        var fielDescription = $("#lbl-descriptionEvent").val();
//        var fieldPartner = $("#lbl-partnerEvent").val();
//        var fieldCapacity = $("#lbl-capacityEvent").val();
//        var fieldManager = $("#drp-users").val();
//        var fieldPicture = $("#lbl-pictureEvent").val();
//
//
//    });
//</script>
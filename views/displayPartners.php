<?php
/**
 * Created by PhpStorm.
 * User: Velislav
 * Date: 22/05/2017
 * Time: 15:41
 */

$asPartners = file_get_contents("partners.txt");
$ajPartners = json_decode($asPartners);

$allPartners = "
    <div class='wdw-partners'>".displayAllPartners($ajPartners)."</div>
</div>
";

function displayAllPartners($ajPartners){
    $partner="";
    foreach($ajPartners as $jPartner)
    {
        $partner .= "<div class='partner'>
        <div class='partner-img'>
            <img src='$jPartner->image' alt='partner image'>
        </div>
        <div class='partner-info'>
            <h3>$jPartner->partnername</h3>
        </div>
        <div>
             <h5>Event</h5>
             <p>$jPartner->event</p>
             <h5>Role</h5>
             <p>$jPartner->role</p>
        </div>
    </div>";
    }
    return $partner;
}

$content = $allPartners;
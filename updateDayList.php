<?php
    //Update day dropdown list
    $month = $_REQUEST["month"];
    $numOfDays = gmdate('t', strtotime("first day of " . $month));
    $returnOptions = "";
    for($j = 1; $j<=$numOfDays; $j++) {
    	$returnOptions .= "<option>" . $j . "</option>";
    }

    echo $returnOptions;
?>
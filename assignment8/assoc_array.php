<?php
    $office_hours = array(
        "Monday"    => "8am - 7:30pm",
        "Tuesday"   => "8am - 7:30pm",
        "Wednesday" => "8am - 7:30pm",
        "Thursday"  => "8am - 7:30pm",
        "Friday"    => "11am - 4pm",
        "Saturday"  => "11am - 2pm",
        "Sunday"    => "11am - 2pm"
    );

    function formatOfficeHours($hours) {
        $output = "<ul>";
        foreach ($hours as $day => $time) {
            $output .= "<li>$day: $time</li>";
        }
        $output .= "</ul>";
        return $output;
    }
?>
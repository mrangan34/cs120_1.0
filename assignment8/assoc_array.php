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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Hours</title>
    <style>
        /* CSS styles for the office hours */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            padding: 5px 0;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
        }

        li:last-child {
            border-bottom: none;
        }

        .hours {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Office Hours</h1>
    <?php
    echo formatOfficeHours($office_hours);
    ?>
</body>
</html>
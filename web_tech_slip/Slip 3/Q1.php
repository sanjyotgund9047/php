<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Timetable</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Class Timetable</h2>

    <?php
    // Question: Display a timetable for your class using HTML table tags
    
    // Define the timetable as a multidimensional array
    $timetable = array(
        array("Time", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"),
        array("9:00 AM - 10:00 AM", "Math", "English", "Science", "History", "Geography"),
        array("10:00 AM - 11:00 AM", "English", "Math", "Geography", "Science", "History"),
        array("11:00 AM - 12:00 PM", "Science", "History", "Math", "Geography", "English"),
        array("12:00 PM - 1:00 PM", "History", "Geography", "English", "Math", "Science"),
        // Add more rows for additional time slots
    );

    // Output the timetable using HTML table tags
    echo "<table>";
    foreach ($timetable as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>

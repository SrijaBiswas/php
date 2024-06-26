<?php
// Define start and end dates
$start_date = strtotime('2024-01-01');
$end_date = strtotime('2024-12-31');
// Initialize counters
$total_tuesdays = 0;
$date_range = array();
// Loop through each day in the range
$current_date = $start_date;
while ($current_date <= $end_date) {
// Check if the current day is a Tuesday
    if (date('N', $current_date) == 2) {
        $total_tuesdays++; // Increment Tuesday counter
        $date_range[] = date('Y-m-d', $current_date); // Add date to array
    }
// Move to the next day
    $current_date = strtotime('+1 day', $current_date);
}
// Print the total number of Tuesdays and the start/end dates
$start = date('Y-m-d', $start_date);
$end = date('Y-m-d', $end_date);
echo "Total number of Tuesdays between $start and $end: $total_tuesdays<br>";
// Print the dates of the Tuesdays
echo "Dates of Tuesdays in 2024:<br>";
foreach ($date_range as $date) {
    echo "$date<br>";
}

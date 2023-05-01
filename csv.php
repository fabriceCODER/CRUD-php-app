<?php
// Set headers for CSV file download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="students.csv"');

// Create output stream to write CSV rows
$output = fopen('php://output', 'w');

// Write header row
fputcsv($output, array('id','name', 'email', 'phone','course'));

$conn = mysqli_connect('localhost', 'root', '', 'blog');
$result = mysqli_query($conn, 'SELECT * FROM students');


while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, $row);
}


fclose($output);
?>

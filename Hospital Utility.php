<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Supply List</title>
</head>
<body>

<?php
// Replace these with your actual database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_utility";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the supply_list table
$sql = "SELECT * FROM supply_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data in a table format
    echo "<table border='1'>
            <tr>
                <th>Hospital Name</th>
                <th>First Aid Kit</th>
                <th>Surgical Mask</th>
                <th>Testing Kit</th>
                <th>Syringe</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Hospital Name']}</td>
                <td>{$row['First Aid Kit']}</td>
                <td>{$row['Surgical Mask']}</td>
                <td>{$row['Testing Kit']}</td>
                <td>{$row['Syringe']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>

</body>
</html>

<?php
require_once 'app/model/biereS.model.php'
?>

<?php
// Assuming you have a MySQL database connection established

// Perform a query to retrieve the first value from a table
$query = "SELECT `description` FROM `bière` LIMIT 1";
$result = mysqli_query($description, $query);

// Check if the query was successful
if ($result) {
    // Fetch the first row from the result set
    $row = mysqli_fetch_assoc($result);

    // Access the value of the first column
    $firstValue = $row['description'];

    // Output the first value
    echo "The first value is: " . $firstValue;
} else {
    // Handle any errors that occurred during the query
    echo "Error: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);

?>
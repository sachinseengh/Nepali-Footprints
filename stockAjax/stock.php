<?php
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');

// Check if size and product ID are sent in the GET request
if (isset($_GET['size']) && isset($_GET['id'])) {
    $size = mysqli_real_escape_string($conn, $_GET['size']);  // Sanitize the selected size
    $productId = mysqli_real_escape_string($conn, $_GET['id']);  // Sanitize the product ID

    // Dynamically generate the column name, e.g., "s30", "s31", etc.
    $columnName = "s_" . $size;

    // SQL query to get the stock value from the dynamically generated column
    $sql = "SELECT $columnName FROM product WHERE pid = '$productId'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stock = $row[$columnName];  // Get the stock value for the selected size

        // Display stock availability
        if ($stock > 0) {
            echo "<span class='text-success'>In Stock: $stock</span>";
        } else {
            echo "<span class='text-danger'>Out of Stock</span>";
        }
    } else {
        echo "<span class='text-danger'>No stock information found for this product and size.</span>";
    }
} else {
    echo "<span class='text-danger'>Invalid request.</span>";
}

// Close the database connection
mysqli_close($conn);
?>

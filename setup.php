<?php
    // Connect to Railway MySQL
    $db_server = getenv('DB_HOST') ?: 'localhost';
    $db_user = getenv('DB_USER') ?: 'root';
    $db_pass = getenv('DB_PASS') ?: '';
    $db_name = getenv('DB_NAME') ?: 'campusconnectusersdb';
    $db_port = getenv('DB_PORT') ?: 3306;

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name, $db_port);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // The SQL command to create the table
    $sql = "CREATE TABLE IF NOT EXISTS userdata (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    // Run the command
    if (mysqli_query($conn, $sql)) {
        echo "<h1>Success! Table 'userdata' created.</h1>";
        echo "<p>You can now delete this file and go register.</p>";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
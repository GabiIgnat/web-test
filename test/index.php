<?php
$conn = null;

try {
    $servername = "web-frow.database.windows.net";
    $database = "gabriel";
    $username = "web-admin";
    $password = "Fruits&Vegetables";

    $conn = new PDO("sqlsrv:server=$servername;database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error:" . $e->getMessage();;
    trigger_error("Connection failed: " . $e->getMessage());
}

if($conn != null){
    echo "Connected successfully";
} else {
    echo "Connection failed";
}

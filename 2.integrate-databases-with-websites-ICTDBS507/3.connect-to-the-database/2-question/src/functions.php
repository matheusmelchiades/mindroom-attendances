<?php
// DATABASE CONFIG
$host = "db";
$user = "root";
$password = "qwer1234!";
$database = "ictdbs507_32";

@$connection = new mysqli($host, $user, $password, $database);

if ($connection->connect_error) {
    error_log("[ERROR] - [CONNECTION FAILED] :: " . $connection->connect_error);

    die("
        <h1 style='color: red; text-align: center;'>
            **DATABASE CONNECTION FAILED - Contact Administrator**
        </h1>
    ");
}

function fetchRecords($connection)
{
    $query = "SELECT * FROM users";
    $data = @$connection->query($query);

    $records = [];

    if (!empty($data)) {
        while ($row = $data->fetch_assoc()) {
            $records[] = $row;
        }
    }

    return $records;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #dddddd;
    }

    th {
      background-color: #f2f2f2;
      color: #333333;
      text-transform: uppercase;
      font-size: 14px;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    td {
      color: #555555;
      font-size: 14px;
    }

    td[colspan="6"] {
      text-align: center;
      font-style: italic;
      color: #888888;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>ID</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Email</th>
      <th>Address</th>
      <th>Phone</th>
    </tr>

    <?php

    include 'functions.php';

    $records = fetchRecords($connection);

    if (empty($records)) {
      echo "<tr>";
      echo "<td colspan='6'>No records found</td>";
      echo "</tr>";
    } else {
      echo "<tr>";
      echo "<td colspan='6'>Total records: " . count($records) . "</td>";
      echo "</tr>";

      foreach ($records as $record) {
        echo "<tr>";
        echo "<td>" . $record['id'] . "</td>";
        echo "<td>" . $record['firstname'] . "</td>";
        echo "<td>" . $record['lastname'] . "</td>";
        echo "<td>" . $record['email'] . "</td>";
        echo "<td>" . $record['address'] . "</td>";
        echo "<td>" . $record['phone'] . "</td>";
        echo "</tr>";
      }
    }
    ?>
  </table>
</body>

</html>
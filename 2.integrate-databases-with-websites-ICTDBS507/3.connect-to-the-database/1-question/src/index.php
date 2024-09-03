<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>One Piece Fan Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .header {
      height: 200px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .header img {
      max-width: 100%;
      height: auto;
    }

    .nav {
      position: absolute;
      bottom: 0;
      width: 100%;
      display: flex;
      justify-content: space-around;
      background-color: rgba(128, 0, 0, 0.7);
      padding: 10px 0;
    }

    .nav a {
      color: white;
      text-decoration: none;
      font-size: 1.5em;
      font-weight: bold;
      text-transform: uppercase;
    }

    .content {
      display: flex;
      padding: 20px;
      justify-content: space-between;
    }

    .content div {
      width: 45%;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .content div h2 {
      font-size: 2em;
      margin-bottom: 10px;
      border-bottom: 2px solid #333;
      padding-bottom: 10px;
    }

    .content div p {
      font-size: 1.1em;
      line-height: 1.6;
    }
  </style>
</head>

<body>
  <?php
  // DATABASE CONFIG
  $host = "db";
  $user = "root";
  $password = "qwer1234!";
  $database = "ictdbs507_31";

  @$connection = new mysqli($host, $user, $password, $database);

  if ($connection->connect_error) {
    error_log("[ERROR] - [CONNECTION FAILED] :: " . $connection->connect_error);

    die("
        <h1 style='color: red; text-align: center;'>
            **DATABASE CONNECTION FAILED - Contact Administrator**
        </h1>
    ");
  }
  ?>

  <div class="header">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROZ3JAGSJo8wDDNEs6Cw5ahB-wSW6pZe9bMA&s"
      alt="One Piece Logo" />
  </div>

  <div class="nav">
    <a href="#history">History</a>
    <a href="#storyline">Storyline</a>
  </div>

  <div class="content">
    <div id="history">
      <h2>History</h2>
      <p>
        Eiichiro Oda was inspired by Akira Toriyama's Dragon Ball and Dr.
        Slump at a young age. As a child, he was inspired by the animated
        series Vicky the Viking and wanted to draw a pirate manga series.
        Later, he created Pandaman for Yudetamago's Kinnikuman.
      </p>
    </div>
    <div id="storyline">
      <h2>Storyline</h2>
      <p>
        In a fantastical sea-oriented world full of pirates and giant sea
        creatures, hidden treasures, ships, and island towns, a notorious
        pirate named Gold Roger hid his most valued treasure along with the
        infamous and extremely dangerous sea route known as the Grand Line.
      </p>
    </div>
  </div>
</body>

</html>
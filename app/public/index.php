<!doctype html>
<?php
//echo "<h1>This is served with docker</h1>";

$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

//$query = $pdo->query('SHOW VARIABLES like "version"');
//
//$row = $query->fetch();
//
//echo 'MySQL version:' . $row['Value'];
//
//var_dump($row);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
    <script src="index.js"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
</head>

<body>

<header>
    <h1>CALENDAR</h1>
</header>
<div class="container">
    <div>
        <div class="navigation">
            <button class="left" onclick="prevM()"><</button>
            <h1 class="titles">July</h1>
            <button class="right" onclick="nextM()">></button>
        </div>
    <script>
        document.querySelectorAll('.btndate').forEach(item =>{
            item.addEventListener('click', event =>{
                alert(event.target.value);
            })
        })
    </script>


    <div>
        <ul class="eventslist">
            <li><h1 class="events">Upcoming Events</h1></li>
            <li>
                <div class="people">Leslie Alexander</div>
                <div class="hours">1:00 PM - 2:30 PM</div>
            </li>
            <li>
                <div class="people">Michael Foster</div>
                <div class="hours">3:00 PM - 4:30 PM</div>
            </li>
            <li>
                <div class="people">Dries Vincent</div>
                <div class="hours">5:00 PM - 6:30 PM</div>
            </li>
            <li>
                <div class="people">Lindsay Walton</div>
                <div class="hours">7:00 PM - 8:30 PM</div>
            </li>
            <li>
                <div class="people">Courtney Henry</div>
                <div class="hours">9:00 PM - 10:30 PM</div>
            </li>
        </ul>

    </div>
</div>

</body>
</html>
<!doctype html>
<?php
echo "<h1>This is served with docker</h1>";

$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];

var_dump($row);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
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
            <button class="left"><</button>
        <h1 class="titles">July</h1>
            <button class="right">></button>
        </div>
        <table>
            <tbody>
            <tr>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
                <th>Sun</th>
            </tr>
            <tr>
                <td><input class="btndate" type="button" value="  1"></td>
                <td><input class="btndate" type="button" value="  2"></td>
                <td><input class="btndate" type="button" value="  3"></td>
                <td><input class="btndate" type="button" value="  4"></td>
                <td><input class="btndate" type="button" value="  5"></td>
                <td><input class="btndate" type="button" value="  6"></td>
                <td><input class="btndate" type="button" value="  7"></td>
            </tr>
            <tr>
                <td><input class="btndate" type="button" value="  8"></td>
                <td><input class="btndate" type="button" value="  9"></td>
                <td><input class="btndate" type="button" value="10"></td>
                <td><input class="btndate" type="button" value="11"></td>
                <td><input class="btndate" type="button" value="12"></td>
                <td><input class="btndate" type="button" value="13"></td>
                <td><input class="btndate" type="button" value="14"></td>
            </tr>
            <tr>
                <td><input class="btndate" type="button" value="15"></td>
                <td><input class="btndate" type="button" value="16"></td>
                <td><input class="btndate" type="button" value="17"></td>
                <td><input class="btndate" type="button" value="18"></td>
                <td><input class="btndate" type="button" value="19"></td>
                <td><input class="btndate" type="button" value="20"></td>
                <td><input class="btndate" type="button" value="21"></td>
            </tr>
            <tr>
                <td><input class="btndate" type="button" value="22"></td>
                <td><input class="btndate" type="button" value="23"></td>
                <td><input class="btndate" type="button" value="24"></td>
                <td><input class="btndate" type="button" value="25"></td>
                <td><input class="btndate" type="button" value="26"></td>
                <td><input class="btndate" type="button" value="27"></td>
                <td><input class="btndate" type="button" value="28"></td>
            </tr>
            <tr>
                <td><input class="btndate" type="button" value="29"></td>
                <td><input class="btndate" type="button" value="30"></td>
                <td><input class="btndate" type="button" value="31"></td>

            </tbody>
        </table>
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
            <li><h1 class="titles">Upcoming Events</h1></li>
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
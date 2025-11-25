<?php
$players = array(
    "messi",
    "ronaldo",
    "Jasprit Bumrah",
    "Hardik Pandya",
    "Ravindra Jadeja",
    "Shubman Gill",
    "KL Rahul",
    "Rishabhs Pant"
);
?>
<html>
<head>
    <title>Indian Cricket Players</title>

    <style>
        table {
            width: 40%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>

<body>

<h2 style="text-align:center;">List of Indian Cricket Players</h2>

<table>
<tr>
    <th>Sl. No</th>
    <th>Player Name</th>
</tr>

<?php
$i = 1;
foreach ($players as $player) {
    echo "<tr>
            <td>$i</td>
            <td>$player</td>
          </tr>";
    $i++;
}
?>
</table>

</body>
</html>


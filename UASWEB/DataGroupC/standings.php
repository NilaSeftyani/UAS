<?php
session_start();
require 'db.php';

if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit();
}

// Fetch standings
$sql = "SELECT * FROM standings";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Group C </title>
</head>
<body>
    <h1>Per 03 Juli 2024 20:00 </h1>
    <h1> NIM 211011401658</h1>
    <table border="1">
        <tr>
            <th>Tim</th>
            <th>menang</th>
            <th>Seri</th>
            <th>Kalah</th>
            <th>Poin</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['tim']; ?></td>
            <td><?php echo $row['menang']; ?></td>
            <td><?php echo $row['seri']; ?></td>
            <td><?php echo $row['kalah']; ?></td>
            <td><?php echo $row['poin']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="logout.php">Logout</a>
</body>
</html>

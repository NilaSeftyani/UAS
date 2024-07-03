<?php
session_start();
if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit();
}
include 'db.php';

// Ambil data negara
$countries = [
    ['name' => 'Inggris', 'win' => 1, 'draw' => 2, 'loss' => 0, 'points' => 5],
    ['name' => 'Denmark', 'win' => 0, 'draw' => 3, 'loss' => 0, 'points' => 3],
    ['name' => 'Slovenia', 'win' => 0, 'draw' => 3, 'loss' => 0, 'points' => 3],
    ['name' => 'Serbia', 'win' => 0, 'draw' => 2, 'loss' => 1, 'points' => 2]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
<h2>Data Group C</h2>
<p>Per <?php echo date('d M Y H:i:s'); ?> WIB</p>
<p>NIM:211011401658 <?php echo $_SESSION['nim']; ?></p>
<table border="1">
    <tr>
        <th>Tim</th>
        <th>Menang</th>
        <th>Seri</th>
        <th>Kalah</th>
        <th>Poin</th>
    </tr>
    <?php foreach ($countries as $row) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['win']; ?></td>
            <td><?php echo $row['draw']; ?></td>
            <td><?php echo $row['loss']; ?></td>
            <td><?php echo $row['points']; ?></td>
        </tr>
    <?php } ?>
</table>

<a href="logout.php">Logout</a>
</body>
</html>

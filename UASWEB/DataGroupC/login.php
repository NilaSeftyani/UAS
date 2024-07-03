<?php
session_start();
require 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['211011401658'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE nim = 211011401658 ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nim);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['nim'] = $user['nim'];
            header("Location: standings.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Invalid NIM.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="">
        NIM: <input type="text" name="nim" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

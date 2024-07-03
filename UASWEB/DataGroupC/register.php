<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nim, password) VALUES ('$nim', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Pengguna berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST" action="register.php">
    NIM: <input type="text" name="nim"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Daftar</button>
</form>

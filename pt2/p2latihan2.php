<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        p {
            margin-bottom: 10px;
        }

        p.result {
            font-weight: bold;
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Kalkulator</h2>
    <form method="post" action="">
        <label for="nilai1">Nilai 1:</label>
        <input type="number" name="nilai1" required>

        <label for="operator">Operator:</label>
        <select name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
        </select>

        <label for="nilai2">Nilai 2:</label>
        <input type="number" name="nilai2" required>

        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai1 = $_POST['nilai1'];
        $operator = $_POST['operator'];
        $nilai2 = $_POST['nilai2'];

        switch ($operator) {
            case 'tambah':
                $hasil = $nilai1 + $nilai2;
                break;
            case 'kurang':
                $hasil = $nilai1 - $nilai2;
                break;
            case 'kali':
                $hasil = $nilai1 * $nilai2;
                break;
            case 'bagi':
                if ($nilai2 != 0) {
                    $hasil = $nilai1 / $nilai2;
                } else {
                    $error = "Tidak bisa dibagi dengan 0";
                }
                break;
            default:
                $error = "Operator tidak valid";
                break;
        }
    ?>

    <?php if (isset($error)) : ?>
        <p class="error"><?= $error; ?></p>
    <?php else : ?>
        <h2>Hasil:</h2>
        <p class="result">Nilai 1: <?= $nilai1; ?></p>
        <p class="result">Operator: <?= $operator; ?></p>
        <p class="result">Nilai 2: <?= $nilai2; ?></p>
        <p class="result">Hasil: <?= $hasil; ?></p>
    <?php endif; ?>

    <?php } ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nilai</title>
</head>
<body>
    <h2>Data yang diinput:</h2>
    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" required><br>

        <label for="nilai_tugas">Nilai Tugas:</label>
        <input type="number" name="nilai_tugas" required><br>

        <label for="nilai_uts">Nilai UTS:</label>
        <input type="number" name="nilai_uts" required><br>

        <label for="nilai_uas">Nilai UAS:</label>
        <input type="number" name="nilai_uas" required><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $nama       = $_POST['nama'];
        $jurusan    = $_POST['jurusan'];
        $nilai_tugas= $_POST['nilai_tugas'];
        $nilai_uts  = $_POST['nilai_uts'];
        $nilai_uas  = $_POST['nilai_uas'];

        $rata_rata = ($nilai_tugas + $nilai_uts + $nilai_uas) / 3;
    ?>

    <h2>Hasil:</h2>
    <p>Nama: <?php echo $nama; ?></p>
    <p>Jurusan: <?php echo $jurusan; ?></p>
    <p>Nilai Tugas: <?php echo $nilai_tugas; ?></p>
    <p>Nilai UTS: <?php echo $nilai_uts; ?></p>
    <p>Nilai UAS: <?php echo $nilai_uas; ?></p>
    <p>Rata-rata: <?php echo $rata_rata; ?></p>

    <?php } ?>
</body>
</html>

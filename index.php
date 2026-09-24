<?php
    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $alamat = $_POST["alamat"];
        $telepon = $_POST["telepon"];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulir Pendaftaran</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Formulir Pendaftaran</h1>
        <form action="#" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama"><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br>

            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <input type="radio" name="jenis_kelamin" value="laki-laki">
            <label for="laki-laki">Laki-laki</label>
            <input type="radio" name="jenis_kelamin" value="perempuan">
            <label for="perempuan">Perempuan</label><br>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat"></textarea><br>

            <label for="telepon">Nomor Telepon:</label>
            <input type="tel" id="telepon" name="telepon"><br>

            <input type="submit" name="submit" value="Submit">
        </form>

    </body>
</html>

<?php
if (isset($_POST["submit"])) {
    echo "<div class='hasil'>";
    echo "<h2>Hasil Pendaftaran</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
    echo "Alamat: " . $alamat . "<br>";
    echo "Nomor Telepon: " . $telepon . "<br>";
    echo "</div>";
}
?>
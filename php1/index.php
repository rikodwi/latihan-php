<?php
$nama_depan ="riko ";
$nama_belakang = "dwi";

echo "hallo, selamat datang $nama_depan </br>";
echo 'hallo, selamat datang $nama ';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan php</title>
</head>
<body>
    <h1>
        selamat datang <?php echo $nama_depan . " " . $nama_belakang; ?>
    </h1>
    <?php echo "<h1>selamat datang, nama saya riko dwi</h1>"; ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>latihan looping</title>
</head>
<body>
    <h2>membuat perulangan tabel</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($b = 1; $b <= 3; $b++) {
        echo "<rt>";

        for ($k = 1; $k <= 5; $k++){
        echo "<td> $b,$k </td>";
        }
        echo "</tr>";
    }
         ?>

    </table>
</body>
</html>
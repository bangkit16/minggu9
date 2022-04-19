<?php
$name = "mahasiswa";
$value = "Bangkit";
setcookie($name, $value, time() + 600);
setcookie("kelas", "MI-1E", time() + 3600);

?>

<html>

<body>
    <?php echo "Cookie telah diubah" ?>
</body>

</html>
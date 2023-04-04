<?php
    require_once 'class_kendaraan.php';

    $motor = new Motor("Motor", "Bensin", 2);
    $submarine = new Submarine("Kapal Selam", "Nuclear", 700);

    echo "Info Motor:<br>";
    $motor->getInfo();
    echo "<br>";

    echo "Info Kapal Selam:<br>";
    $submarine->getInfo();
?>
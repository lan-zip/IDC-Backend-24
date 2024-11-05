<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proplayer</title>
</head>
<body>
    <h1>Belajar Tipe Data</h1>

    <?php
    echo "<br><h2>1. Tipe Data Integrar </h2>";
    // inisiasi dan inisialisasi variable
    $a = 10;
    $b = 5;
    $c = $a + 5;
    $d = $b + (10 * 5);
    $e = $d - $c;

    //  Tampilkan Data dengan perintah echo
    echo "Variable a : $a <br>";
    echo "Variable b : $b <br>";
    echo "Variable c : $c <br>";
    echo "Variable d : $d <br>";
    echo "Variable e : $e <br>";

    var_dump($e);

    $nama = ["arlan", "satya", "artha" , "yordi"];
    echo $nama [0];


    ?>

    
</body>
</html>
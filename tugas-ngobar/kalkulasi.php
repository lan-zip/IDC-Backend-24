<?php

class kalkulasi 
{
    function persegi($side) {
      echo "Hasil Luas Persegi dengan sisi $side = " . $side * $side . " cm² <br>";
      echo "Keliling Persegi dengan sisi $side = " . 4 * $side . " cm <br>" . "<br>";
    }


    function persegi_panjang($length , $width) {
          echo "Hasil Luas Persegi panjang dengan panjang: $length, lebar: $width = " . $length * $width . " cm² <br>";
          echo  "Keliling Persegi panjang dengan panjang: $length, lebar: $width = " . 2 * ($length + $width) . " cm <br>" .  "<br>";

    }
  

    function segitiga($base, $height) {
          echo "Hasil Luas Segitiga dengan alas: $base, tinggi: $height = " . 0.5 * $base * $height . " cm² <br>";
          echo "Keliling Segitiga dengan alas: $base, tinggi: $height = " . $base + ($height * 2) . " cm <br>" . "<br>";
    }
  


    function lingkaran($radius) {
      echo "Hasil Luas Lingkaran dengan jari-jari $radius = " . round(pi() * pow($radius, 2), 2) . " cm² <br>";
      echo "Keliling Lingkaran dengan jari-jari $radius = " . round(2 * pi() * $radius, 2) . " cm <br>";
    }
  }
  
  $calc = new kalkulasi();
  $calc->persegi(9);
  $calc->persegi_panjang(14, 9);
  $calc->segitiga(20, 15);
  $calc->lingkaran(14);
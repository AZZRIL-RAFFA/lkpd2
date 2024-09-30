<?php

function compareNames($name1, $name2) {
    $length1 = strlen($name1);
    $length2 = strlen($name2);

    echo "Nama pertama: $name1\n <br>";
    echo "Nama kedua: $name2\n <br>";

if ($length1 > $length2) {
    $diff = $length1 - $length2;
    echo "<b> $name1 </b> memiliki jumlah karakter lebih banyak dari <b> $name2 </b> : selisihnya $diff karakter\n";
    } elseif ($length2 > $length1) {
    $diff = $length2 - $length1;
    echo "<b> $name2 </b> memiliki jumlah karakter lebih banyak dari <b> $name1 </b> : selisihnya $diff karakter\n";
    } else {
    echo "Kedua nama memiliki jumlah karakter yang sama\n";
    }
}

compareNames("Muhammad Azzril Raffa Pratama", "repong");

?>
<?php
function cetakBilangan($n) {
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 4 == 0 && $i % 6 == 0) {
            echo "Pemrograman Website 2024\n";
        } elseif ($i % 5 == 0) {
            echo "2024\n";
        } elseif ($i % 4 == 0) {
            echo "Pemrograman\n";
        } elseif ($i % 6 == 0) {
            echo "Website\n";
        } else {
            echo $i . "\n";
        }
    }
}

// Meminta input dari pengguna
$n = (int) readline("Masukkan nilai n: ");

// Memastikan input adalah bilangan positif
if ($n > 0) {
    cetakBilangan($n);
} else {
    echo "Harap masukkan bilangan bulat positif.\n";
}
?>
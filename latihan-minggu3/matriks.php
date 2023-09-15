<?php
$matrixA = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

$matrixB = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

$resultMatrix = [];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $resultMatrix[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j];
    }
}

echo "Hasil Penjumlahan Matriks A dan B:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $resultMatrix[$i][$j] . " ";
    }
    echo "\n";
}
?>

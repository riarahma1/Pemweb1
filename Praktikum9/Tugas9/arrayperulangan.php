<?php
$nilai = [80, 90, 75, 85, 100];

$total = 0;
foreach ($nilai as $n) {
    $total += $n;
}

$rata_rata = $total / count($nilai);

echo "Jumlah total nilai: $total\n";
echo "Rata-rata nilai: $rata_rata\n";

?>

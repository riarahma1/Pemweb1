<?php
$umur = 66;

if ($umur < 12){
    echo "Kategori: Anak-anak";
} elseif ($umur < 18){
    echo "Kategori: Remaja";
} elseif ($umur < 60){
    echo "Kategori: Dewasa";
} else {
    echo "Kategori: Lansia";
}
?>
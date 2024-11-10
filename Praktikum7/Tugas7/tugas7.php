<?php
$pemasukan=50000000;
$hutangA=16500000;
$bungahutangA=5/100;
$hutangB=9500000;
$bungahutangB=4.5/100;

echo $pemasukan-($hutangA+$hutangA*$bungahutangA+$hutangB+$hutangB*$bungahutangB);
echo "<br />";
echo ($hutangA*$bungahutangA)+($hutangB*$bungahutangB);
echo "<br />";
echo ($hutangA+$hutangA*$bungahutangA)+($hutangB+$hutangB*$bungahutangB);
?>
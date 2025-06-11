<?php
$nilai = 100; //ganti nilai untuk cek hasilnya

echo "Nilai $nilai = ";
Tingkatan($nilai);


   
function Tingkatan($nilai) {
if ($nilai >= 90 && $nilai <= 100) {
    echo "A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    echo "B";
} elseif ($nilai >= 70 && $nilai <= 79) {
    echo "C";
} elseif ($nilai >= 0 && $nilai <= 69) {
    echo "D";
} elseif ($nilai >= 100 )  {
    echo "tidak ada nilai diatas 100 dan tidak termasuk dalam kategori nilai";
}
}

?>
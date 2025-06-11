<?php


$jam = "16:30";
$tugas = true;
$kegiatan = "";


if ($jam >= "15:30" && $jam <= "15:44") {
    $kegiatan = "Andi sedang perjalanan pulang";
} elseif ($jam >= "15:45" && $jam <= "15:59") {
    if ($tugas) {
        $kegiatan = "Andi sedang mandi setelah tiba di rumah";
    } else {
        $kegiatan = "Andi beristirahat setelah tiba di rumah";
    }
} elseif ($jam >= "16:00" && $jam <= "16:30") {
    $kegiatan = "Andi sedang mengaji";
} elseif ($jam >= "16:30" && $jam <= "16:45") {
    $kegiatan = "Andi pergi membeli bumbu masakan";
} elseif ($jam >= "16:45" && $jam <= "17:15") {
    if ($tugas) {
        $kegiatan = "Andi sedang menghafal dialog untuk festival";
    } else {
        $kegiatan = "Andi sedang istirahat";
    }
} elseif ($jam >= "17:15" && $jam <= "17:45") {
    if ($tugas) {
        $kegiatan = "Andi sedang chat dengan Raya membahas festival";
    } else {
        $kegiatan = "Andi sedang chat dengan Raya membahas hal lain";
    }
} elseif ($jam >= "17:45" && $jam <= "17:55") {
    $kegiatan = "Andi sedang istirahat 10 menit";
} elseif ($jam >= "17:55" && $jam <= "18:05") {
    $kegiatan = "Andi sedang sholat maghrib";
} elseif ($jam >= "18:05" && $jam <= "18:25") {
    if ($tugas) {
        $kegiatan = "Andi sedang makan malam bersama keluarga";
    } else {
        $kegiatan = "Andi sedang makan malam sendiri";
    }
} elseif ($jam >= "18:25" && $jam <= "20:25") {
    if ($tugas) {
        $kegiatan = "Andi sedang mengerjakan tugas sekolah";
    } else {
        $kegiatan = "Andi sedang belajar materi sekolah";
    }
} elseif ($jam >= "20:25" && $jam <= "20:35") {
    $kegiatan = "Andi sedang sholat isya";
} elseif ($jam >= "20:35" && $jam <= "21:05") {
    if ($tugas) {
        $kegiatan = "Andi sedang mengobrol dengan keluarga";
    } else {
        $kegiatan = "Andi sedang beristirahat dengan keluarga";
    }
} elseif ($jam >= "21:05" && $jam <= "22:00") {
    $kegiatan = "Andi memiliki waktu bebas sebelum tidur";
} elseif ($jam >= "22:00" || $jam < "04:00") {
    $kegiatan = "Andi sedang tidur";
} elseif ($jam == "04:00") {
    $kegiatan = "Andi bangun pagi";
} else {
    $kegiatan = "Tidak ada kegiatan terjadwal";
}
echo "$jam = $kegiatan";
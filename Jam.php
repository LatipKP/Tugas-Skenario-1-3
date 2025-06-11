<?php
$jam = "00:00"; //Ganti jamnya untuk menentukan waktunya

if($jam >= "00:00" && $jam < "04:00"){
   $waktu = "Dini Hari"; 
}elseif($jam >= "04:00" && $jam < "10:00"){
    $waktu = "Pagi" ;
}elseif($jam >= "10:00" && $jam < "15:00"){
    $waktu = "Siang" ;
}elseif($jam >= "15:00" && $jam < "17:30"){
    $waktu = "Sore" ;
}elseif($jam >= "17:30" && $jam < "18:30"){
    $waktu = "Petang" ;
}elseif($jam >= "18:30" && $jam < "24:00"){
    $waktu = "Malam" ;
}else{
    $waktu = "Dunia Lain";
}
 
echo "$jam = $waktu"

?>
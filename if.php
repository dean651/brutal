<?php 

$nilai = 74;
$kerapihan = 80; 
if ($nilai >= 75 || $kerapihan >= 80) {
    echo "selamat anda lulus" .PHP_EOL;
} else{
    echo "maaf anda tidak lulus";
}
echo"\n";

$nma = 60;
$wawancara = 80;

if ($nma >= 70 ){
    echo "selamat anda lulus" . PHP_EOL;
    if ($wawancara >= 80){
        echo "sangat memuaskan";
    }else{
        echo "maaf ada salah jurusan";
    }

}else{
    echo "maaf ada salah jurusan ";
}
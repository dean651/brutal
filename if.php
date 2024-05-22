<?php 

$nilai = 79;
$kerapihan = 89; 
if ($nilai >= 75 || $kerapihan >= 80) {
    echo "selamat anda lulus" .PHP_EOL;
} else{
    echo "maaf anda tidak lulus";
}
echo"\n";

$nma = 6;
$wawancara = 8;

if ($nma >= 70 ){
    echo "selamat anda lulus" . PHP_EOL;
    if ($wawancara >= 80){
        echo "sangat memuaskan";
    }else{
        echo "maaf ada salah jurusan";
    }

}else{
    echo "maaf ada salah jurusan " . PHP_EOL;
}
echo "\n";
echo"\n";
// perpaduan php dan Mysql

$namaawal = "laki";
$wanita ="wanita";

if ( $namaawal = "laki" && $wanita = "wanita" ){
    echo "aku sama kamu itu ibarat \n 
    PHP dan Mysql, butuh hosting \n 
    menyatukan kita derdua";
} else{ 
    echo "maaf ada salah " ;
}
<?php   

$nilai = [80,78,72,84,92,88];

echo "nilai saya ";
foreach  ($nilai as $datan){
    echo "$datan ";
}
echo "<br>";

    echo "nilai tertinggi adalah " . $nilai[4] . "<br>" . " nilai terkecil adalah " . $nilai[2];

echo "<br>";

$leutik = $nilai;
 sort($leutik);
echo "nilai jika di urutkan dari yang terkecil ";
foreach($leutik as $kecil){
echo  "$kecil ";
}

  echo "<br>";
  $besarbgt = $nilai;
  arsort($besarbgt);
   echo "nilai jika di urutkan dari yang terbesar " ;
   foreach($besarbgt as $besar){
 echo "$besar " ;
   }
echo "<br>";
echo "jadi dibulatkan, rata rata dari keseluruhan nilai saya menjadi: ";

$jmlnilai = round(array_sum($nilai) / 6);{
echo "$jmlnilai";

   echo "<br>";
   echo "setelah melakukan perbaikan untuk nilai " . $nilai[2] . " saya mendapat nilai " . $nilai [2] = 75;}
   
   echo  " jadi nilai saya sekarang " ;
   foreach ($nilai as $update){
    echo "$update ";
   }
echo "<br>";
   echo "sehingga sekarang, urutan nilai saya dari yang terbesar menjadi: " ;
 $nilainew = $nilai;
 arsort($nilainew);
   foreach ($nilainew as $urutan ){
        echo "$urutan  ";
         
    }
   
    



?>

<?php

$kata = explode(" ", strtolower($_POST['kata']));
$kalimat = strtolower(str_replace(" ", "", $_POST['kalimat']));
print_r($kata);
echo "<br>$kalimat<br>" ;

function cekposisi($kar){
  $alphabet = "abcdefghijklmnopqrstuvwxyz";
  $posisi = 1;
  if (stripos($alphabet, $kar)) {
    while ($kar != $alphabet[$posisi - 1]) {
      $posisi++;
    }   
    return $posisi;
  } else {
    return null;
  }
}

function hash__($word)
{
  $hash_ = 0;
  for ($i=0; $i < strlen($word); $i++) { 
    $hash_ += cekposisi($word[$i]);
    // echo cekposisi($word[$i]) . " ";
  }
  $mod = $hash_ % strlen($word); 
  return $mod; 
}
 
// echo cekposisi("p");

foreach ($kata as $key) {
  $jml = strlen($key);
  $total = 0;
  $ketemu = 0;
  for ($i=0; $i < strlen($kalimat); $i++) {
    // echo hash__($key) . "<br>";
    $hash1 = hash__($key);
    $hash2 = hash__(substr($kalimat, $i, $jml));
    echo $hash1 . " " . $hash2 . " | ";
    if ($key == substr($kalimat, $i, $jml)) {
      
      $ketemu += 1;
    }
  }
  echo "<br>ketemu : $ketemu";
  $total += $ketemu;
}

echo "<br>Total : $total";

 ?>

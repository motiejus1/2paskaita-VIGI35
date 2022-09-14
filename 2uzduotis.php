<?php 

// . Papildyti paskaitoje aptartą "Grąžos išdavimo" programą, kad grąžą būtų galima skaičiuoti ir centais.
// Pvz. kintamasis $graza = 123.15, 
// programa turi parodyti ne tik, kiek kupiūrų, bet ir kiek centų monetų(monetų reikšmės:,50,ct,20ct,10ct,,5ct,2ct,1ct)


// $graza = 123.15;

$graza = 123.15;

//123.15 -> 123 * 100 = 12300
//123.15 * 100 = 12315

//12315 -12300 = 15

$grazaSveikojiDalis = intval($graza); //123
$grazaSveikojiDalis = $grazaSveikojiDalis * 100; //12300

$centai = $graza * 100 - $grazaSveikojiDalis; // 15

echo "<h1> $graza </h1>";

$graza = intval($graza); //123
//intval - is realiojo skaiciaus pasiima sveikaji dali
$simtas = intval($graza/100); // 223/100 = 2(.23)
$graza = $graza % 100; // 223 % 100 = 23
$penkiasdesimt = intval($graza/50); // 23/50 = 0(.46)
$graza = $graza % 50; // 23 % 50 = 23
$dvidesimt = intval($graza/20); // 23/20 = 1(.15)
$graza = $graza % 20; // 23 % 20 = 3
$desimt = intval($graza/10); // 3/10 = 0(.3)
$graza = $graza % 10; // 3 % 10 = 3
$penki = intval($graza/5); // 3/5 = 0(.6)
$graza = $graza % 5; // 3 % 5 = 3
$du = intval($graza/2); // 3/2 = 1(.5)
$graza = $graza % 2; // 3 % 2 = 1
$vienas = $graza;
echo "Simtu ".$simtas;
echo "<br>";
echo "penkiasdesimt ".$penkiasdesimt;
echo "<br>";
echo "dvidesimt ".$dvidesimt;
echo "<br>";
echo "desimt ".$desimt;
echo "<br>";
echo "penki ".$penki;
echo "<br>";
echo "du ".$du;
echo "<br>";
echo "vienas ".$vienas;

$graza = $centai;

$penkiasdesimt = intval($graza/50); // 23/50 = 0(.46)
$graza = $graza % 50; // 23 % 50 = 23
$dvidesimt = intval($graza/20); // 23/20 = 1(.15)
$graza = $graza % 20; // 23 % 20 = 3
$desimt = intval($graza/10); // 3/10 = 0(.3)
$graza = $graza % 10; // 3 % 10 = 3
$penki = intval($graza/5); // 3/5 = 0(.6)
$graza = $graza % 5; // 3 % 5 = 3
$du = intval($graza/2); // 3/2 = 1(.5)
$graza = $graza % 2; // 3 % 2 = 1
$vienas = $graza;
echo "penkiasdesimt ".$penkiasdesimt;
echo "<br>";
echo "dvidesimt ".$dvidesimt;
echo "<br>";
echo "desimt ".$desimt;
echo "<br>";
echo "penki ".$penki;
echo "<br>";
echo "du ".$du;
echo "<br>";
echo "vienas ".$vienas;

?>
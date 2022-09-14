<!-- "PHP kintamieji ir operacijos"

 
1.Užduotis "Skaičių apvertimaas"


a. Apsirašyti 4 kintamuosius: skaicius1, skaicius2, skaicius3, skaicius4.

b. Į DIV'us išvesti visus 4 skaičius, jų visų sumą ir sandaugą.

c. Sukeisti skaicius1 ir skaicius2 reikšmes vietomis, pasinaudojant laikinuoju kintamuoju.

d. Sukeisti skaicius3 ir skaicius4 reikšmes vietomis be laikinojo kintamojo.

e. Į <p> išvesti sukeitimo rezultatus.

f. Susikurti kintamąjį maxSkaicius, jam priskirti maksimalią įmanomą skaitinę reikšmę (infinity netinka) ir išvesti į <h1>. -->

 

<?php 

$skaicius1 = 15;
$skaicius2 = 7;
$skaicius3 = 28;
$skaicius4 = 13;

echo "<div>$skaicius1</div>";
echo "<div>$skaicius2</div>";
echo "<div>$skaicius3</div>";
echo "<div>$skaicius4</div>";

$suma = $skaicius1 + $skaicius2 + $skaicius3 + $skaicius4;

echo "<div>Suma: $suma</div>";

$sandauga = $skaicius1 * $skaicius2 * $skaicius3 * $skaicius4;

echo "<div>Sandauga: $sandauga</div>";

//Kintamojo sukeitimo uzdavinys
//$a = 15, $b = 2 -> $a = 2, $b = 15

//c. Sukurti laikina kintamaji
$laikinasisKintamasis = 0;

////$skaicius1 = 15
//$skaicius2 = 7
//$laikinasisKintamasis = 0;

// $skaicius1 neegzistuoja
$laikinasisKintamasis = $skaicius1;
////$skaicius1 = 15
//$skaicius2 = 7
//$laikinasisKintamasis = 15;
$skaicius1 = $skaicius2;
////$skaicius1 = 7
//$skaicius2 = 7
//$laikinasisKintamasis = 15;
$skaicius2 = $laikinasisKintamasis;
////$skaicius1 = 7
//$skaicius2 = 15
//$laikinasisKintamasis = 15;

//$skaicius1 = 15
//$skaicius2 = 7
// $skaicius1 = 7
// $skaicius2 = 7;

//d buda. be laikinojo kintamojo



//kintamasis yra atminties vieta. //kompiuterio atmintis yra BERIBE
//spartinam savo programa - kodo optimizavimas
// kuo maziau kintamuju, tuo greiciau veikia

// aritmetinis - vienas greiciausiu, bet jis veikia tik su skaiciais

// $skaicius3 = 28;
// $skaicius4 = 13;


//$skaicius3 = 28 + 13 = 41
//$skaicius4 = 13
$skaicius3 = $skaicius3 + $skaicius4;

//$skaicius3 = 41
//$skaicius4 = 13
//$skaicius4 = 41 - 13 = 28

$skaicius4 = $skaicius3 - $skaicius4; // 28
// 41 - 28 = 13
$skaicius3 = $skaicius3 - $skaicius4; // 13

//masyvo pagalba/ pasinaudojant rodyklem/pasinaudojant PHP spraga

// XOR metodas - binarine aritmetine operacija, bet veikia su visais kintamaisiais

//0 ir 1 - binarai
//desimtaine sistema - 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
// +,-,*,/
// binarine sistema - 0, 1
// AND, OR, NOT, XOR .....

//AND -> &&
// 0 -mela, 1 - tiesa
// 0 AND 0 = 0 //binarine daugyba 0*0 = 0
// 0 AND 1 = 0 //binarine daugyba 0*1 = 0
// 1 AND 0 = 0 //binarine daugyba 1*0 = 0
// 1 AND 1 = 1 //binarine daugyba 1*1 = 1

//OR -> || binarine sudetis
// 0 OR 0 = 0 //binarine sudetis 0+0 = 0
// 0 OR 1 = 1 //binarine sudetis 0+1 = 1 
// 1 OR 0 = 1 //binarine sudetis 1+0 = 1
// 1 OR 1 = 1 //binarine sudetis 1+1 = 1

//XOR operacija // iskirtinis arba
// 0 XOR 0 = 0 // 0 XOR 0 = 0
// 0 XOR 1 = 1 // 0 XOR 1 = 1
// 1 XOR 0 = 1 // 1 XOR 0 = 1
// 1 XOR 1 = 0 // 1 XOR 1 = 0

$skaicius5 = 12; // 1100
$skaicius6 = 4; // 0100


$skaicius5 = $skaicius5 xor $skaicius6; // 1100 xor 0100 = 1000 -> 8
$skaicius6 = $skaicius5 xor $skaicius6; // 1000 xor 0100 = 1100 -> 12
$skaicius5 = $skaicius5 xor $skaicius6; // 1000 xor 1100 = 0100 -> 4


echo "<p>$skaicius1 $skaicius2 $skaicius3 $skaicius4</p>";
echo "<div class='rezultatas'>".$skaicius5.$skaicius6."</div>";

//f isvesti maxSkaiciu

$maxSkaicius = PHP_FLOAT_MAX;
$maxSkaicius1 = PHP_INT_MAX;
echo "<h1>$maxSkaicius</h1>";
echo "<h1>$maxSkaicius1</h1>";
?>
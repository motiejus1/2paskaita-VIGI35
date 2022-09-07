<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP kintamuju tipai bei operacijos</title>
</head>
<body>
    <?php 
        // $skaicius = 5; //integer
        // $skaicius1 = 10.2; // float
        // $teksas = "tekstas"; //string
    
        // var_dump($skaicius);
        // var_dump($skaicius1);
        // var_dump($teksas);


        // $teksas1 = 'tekstas';

        // //echo/print = integer, float, string

        // $tiesaMelas = true;//boolean
        // $tiesaMelas1 = true;//boolean

        // //print_r($tiesaMelas1);

        // //var_dump() - visiems kitiems kintamiesiems isvesti - debuginimui parodo visa svarbia informacija




        // //masyvas
        // $masyvas = [1,2,3,4,5,6,7,8,9,10]; //masyve kuri galime suskaicuoti

        // var_dump($masyvas);

        // $masyvas1 = array(
        //     "vardas" => "Jonas",
        //     "pavarde" => "Jonaitis"
        // ); //asociatyvaus masyvo sukurime

        // var_dump($masyvas1);
        // // 0 1 .. n+1 numeruojamas, suskaiciuojamas masyvas
        // //"nulis", "vienas" ir t.t. - asociatyvus
        
        // //objektas - kol kas nedarom

        // //NULL
        // //nulis, nera, nieko, tuscias
        // //kintamaji deklaruojam bet jam nepriskiriam reiksmes
        // //kintamasis be reiksmes
        // //$x = $y; //null
        // $x = null;
        // var_dump($x);


        // //Resource - musu sukurtas kintamojo tipas
    
    
        // $skaicius15 = "tekstas"; // aritmetiniame veiksme jis bando teksta paversti i skaiciu
        // $skaicius16 = 15;
        
        // $dalybosOperacija = $skaicius15 / $skaicius16;

        // echo $dalybosOperacija;
        // var_dump($dalybosOperacija);

        // //Aritmetiniai veiksmai
        // $sk1 = 15;
        // $sk2 = 17;
        // $suma = $sk1 + $sk2;
        // $skirtumas = $sk1 - $sk2;
        // $daugyba = $sk1 * $sk2;

        // $dalyba = $sk1 / $sk2;// 15/17 = 0.88235
        
        // $dalybaLiekana = $sk1 % $sk2; //liekana

        // //kvadratine saknis ir kelimas laipsniu

        // $saknis = sqrt($sk1);
        // $laipsnis = pow($sk1, 2);
        
        // echo $saknis;
        // echo "<br>";
        // echo $laipsnis;

        // $apvalinimas = round($saknis, 2); //apvalinimas iki 2 skaiciu po kablelio
        // echo "<br>";
        // echo $apvalinimas;

        // //floor ir ceil(grindys ir lubos) . Floor - apvalina visalaika i mazesne puse. Ceil - apvalina i didesne puse

        // //3.87 = floor - 3, ceil - 4

        // $floor = floor($saknis);
        // $ceil = ceil($saknis);

        // echo "<br>";
        // echo $floor;
        // echo "<br>";
        // echo $ceil;


        //Turime kintamaji $graza(sveikasis skaicius). Apskaiciuoti kiek 100,50,20,10, 5, 2, 1 banknotu reikia atiduoti graza
        //(taip veikia maxima kasa)

        $graza = 223;
        echo "<h1> $graza </h1>";
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
        // 100 - 1, liekana 23
        // 50 - 0, liekana 23
        // 20 - 1, liekana 3
        // 10 - 0, liekana 3
        // 5 - 0, liekana 3
        // 2 - 1, liekana 1
        // 1 - 1, liekana 0

    ?>
</body>
</html>
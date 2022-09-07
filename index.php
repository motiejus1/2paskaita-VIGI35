
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2paskaita</title>
</head>
<body>
    <p>Antros paskaitos medžiaga</p>

       
        <!-- Uzkomentuoti -->
        <!-- TEKSTINE REIKSME MUMS YRA LABAI SVARBI -->

        <p class='text' id="text1">Labas</p>


        <?php 
            // Komentaras
            //          1. Kintamojo deklarvimas
            //          2. Kintamojo priskyrimas
            // 3. Kintamojo panaudojimas
            $kintamas1=2;
            $kintamas = 10;
            $skaicius = 1;
            $skaicius1 = 5;

            //Kintamasis negali prasideti skaiciumi

            // $1 = 5;
            // $la+b =5;
            // Mano kintamasis
            $manoKintamasis = 5;
            $mano_kintamasis = 5;
            $_manoKintamasis = 5;
        
            $kintamasis1 = 5;
            $Kintamasis1 = 10;

            //alternatyva console.log() javascript
            $tekstas = "Labas";
            $tekstas1 = 'rytas';

            //echo $kintamasis1;
            // echo "<h1></h1>";

            //tago atvaizdavimas #1
            echo "<h1>";
            echo $tekstas;   
            echo "</h1>";

             //tago atvaizdavimas #2

             echo "<h1>$tekstas</h1>";

             echo '<h1>$tekstas</h1>';

             //tago atvazdavimo #3

            echo  '<p class="text" id="text1">Labas</p>';

            echo  "<p class='text' id='text1'>Labas</p>";

            //teksto jungiklis tekstas1 ir tekstas2    tekstas1+tekstas2
            //.
                $tekstas1 = "Labas";
                $tekstas2 = "rytas";

                echo $tekstas1.$tekstas2."<br>".$tekstas1;


            echo "<p class='text'".'id="text1'.$tekstas1.'">Labas</p>';
            $class= "class='text'";
            
            echo "<p $class id='text1'>Labas</p>";

            echo "<br>";
            echo "tekstas"; //viengubu ir dvigubu kabuciu atvaizdavimas
            echo "<br>";
            echo 'tekstas';

            echo 'Knygos pavadinimas "Knyga" ';
            echo "Knygos pavadinimas 'Knyga' ";

            //echo ir print skirtumas

            print "tekstas";

            //echo  - void funckija(negrazina)
            //print - grazina reiksme(granzina 1)


            $print = print "tekstas"; //vykdoma funkcija print
            echo $print;

            //echo veikia greiciau print

            //echo - galima atvazduoti kelis kintamuosius
            //print - tik viena
        
        ?>

</body>
</html>
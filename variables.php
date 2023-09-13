
<?php

// Developer: Joel Magalhaes

/*
Voorletters
Achternaam
Roepnaam
Leeftijd
Datum geboorte
geboorte plaats
Basisschool
Middelbareschool
MBO opleiding
Huidige opleiding
*/

//variable


$currentHour = date('H');

if ($currentHour < 18) {
echo '<body style="background: #474A8A; ">';
}

?>
<div class="card">
    <div class="card-body">
<?php

$voorletters = ' LJ';

$achternaam = ' Magalhaes';

$roepnaam = ' Joel';

$leeftijd = ' 23';

$geboorte = ' 30-09-1999';

$plaats = ' Almere';

$basisschool = ' Torteltuin en Buitenburcht';

$middelbareschool = ' Meergronden en OVC';

$mbo = ' Horeca Ondernemer Management';

$huidig = 'ADSD';


echo "Voorletters: $voorletters <br>";

echo "Achternaam: $achternaam <br>";

echo "Roepnaam: $roepnaam <br>";

echo "Leeftijd: $leeftijd <br>";

echo "Geboorte Datum: $geboorte <br>";

echo "Geboorte Plaats: $plaats <br>";

echo "Basisschool: $basisschool <br>";

echo "Middelbareschool $middelbareschool <br>";

echo "MBO opleiding: $mbo <br>";

echo "Huidige opleiding: $huidig<br>";
?>
</div>
</div>
<?php
/* kleur van pagina veranderen gebaseerd op huidige tijd.
12pm achtergrond veranderd kleur.
*/


/*
if ($hour > 18){
    then change colour too $black
} else {
    then change colour too $white
}

*/

//$colour = ('#474A8A');


//echo date('H');
?>

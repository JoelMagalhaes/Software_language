<?php
/**
 * vorige week
 */
/*$name = 'Piet';
$age = 79;
$isMarried = false;
$dob = date( format: '06, 06, 1944');
echo "$name $age <br> $isMarried $dob";
echo "<br>".$dob('Y');
*/


/**f ((date($format: 'Y') - $dob ) == $age){
    echo "leeftijd klopt";
} else {
    echo "leeftijd incorrect";
}
*/

/**
 * Array
 */
/*$Gaastra = [ 'size' => 12],
    $Naish = ['size' => 10]
*/
 //$kites = [
   // $Gin = ['name' => 'Gin', 'size' => 8, 'lines' => 5]
    
    //];

    //die(var_dump($kites));

 $DDD = [
    ['name' => 'Tim', 'age' => 19, 'hobby' => 'gamen'],
    ['name' => 'Meric', 'age' => 21, 'hobby' => 'skaten'],
    ['name' => 'Jeroen', 'age' => 20, 'hobby' => 'gymmen'],
 ];

 //voor elke kites er kite
// foreach ($kites as $kite) {
  //  foreach ($kite as $key => $value) {
    //    echo "$key $value";

 //   }
    //echo "<hrr";
 //}

//die(var_dump($DDD));
sort($DDD);
foreach($DDD as $student){
    echo $student['name'] . " " . $student['age'] . " <hr>";
}

for ($i = 0; $i < count($DDD); $i++) {
    echo $DDD[$i]['name'] .  " " . $DDD[$i]['hobby']. "<br>";
}

for ($person = 0; $i < count($DDD); $i++) {
    echo $DDD[$i]['name'] . " " . $DDD[$i]['hobby']. " <br>";
    if($DDD[$i]['adress']);
}

$numbers = [
    'Stephan' => [1,2,3],
    'Polina' => [4,5,6],
    'Andy' => [7,8,9]
];




foreach($numbers as $number => $value) {
    echo $number . "<br>";
        foreach($value as $item) {
            echo $item . " " . " <hr>";
        }
}

echo rand(1,6) . " <br>";
//echo array_sum($numbers);


//for ($i = 0; $i < count($DDD); $i++) {
//    echo "$DDD[$i] <br>";
//}


//foreach($DDD as $student) {
//}

 //laat naam zien onder elkaar



 /**
  * Multidimensional Array
  */

  /**
   * for-loop
   */

   /**
    * 
    */


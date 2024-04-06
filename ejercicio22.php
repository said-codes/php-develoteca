<?php
$fruits = array("m"=>"mango","o"=>"orange","b"=>"banana","p"=>"pineapple");
$keys = array_keys($fruits);
print_r($keys);
echo "<br>";
echo $fruits["m"];
echo "<br>";
echo $fruits["o"];
echo "<br>";
echo $fruits["b"];
echo "<br>";
echo $fruits["p"];
echo "<br>";

for($index=0; $index < count($fruits); $index++){
    echo $fruits[$keys[$index]];
    echo "<br>";
}

foreach($fruits as $index => $value){
    echo $index. "<br>";
    echo $value;
    echo "<br>";
}

?>

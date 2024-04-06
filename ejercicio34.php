<?php
$content_json = '[
{
    "name": "Juan",
    "lastname": "Perez"
},
{
    "name": "Maria",
    "lastname": "Gomez"
},
{
    "name": "Pedro",
    "lastname": "Gonzalez"
},
{
    "name": "Ana",
    "lastname": "Lopez"
}
]';
//echo $content_json;
$result = json_decode($content_json);
print_r($result);

foreach($result as $person){
    echo $person->name." ".$person->lastname."<br>";
}

?>

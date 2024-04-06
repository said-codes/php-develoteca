<?php

$url= "https://api.dailymotion.com/videos?channel=sport&limit=10";
$options= array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));
$response = file_get_contents($url, false, stream_context_create($options));

$obj_response = json_decode($response);
//print_r($obj_response);

foreach($obj_response->list as $video)
{
   /* echo $video->id."<br>";
    echo $video->title."<br>";
    echo $video->channel."<br>";
    echo $video->owner."<br>";
    echo "<br>";*/
}

?>

<ul>
    <?php foreach($obj_response->list as $video)
    {
        echo "<li>".$video->title."</li>";
    }
    ?>
</ul>

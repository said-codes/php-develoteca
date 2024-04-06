<?php
$archive= "content.txt";
$file_open = fopen($archive, "r");
$content = fread($file_open, filesize($archive));
echo $content;
?>

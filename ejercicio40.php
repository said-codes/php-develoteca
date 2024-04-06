<?php
$archive_name = "archive.txt";
$content_file= "Hello from archive.txt";

$archive_to_create = fopen($archive_name, "w");
fwrite($archive_to_create,$content_file);
fclose($archive_to_create);

?>

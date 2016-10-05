<?php




$content = var_export($_REQUEST['json'], true);
//$content = var_export(file_get_contents("php://input"), true);
$file = fopen('log', 'a');
fwrite($file, $content."\n");
fclose($file);
echo "Hello API Event Received";
//echo "File written!";
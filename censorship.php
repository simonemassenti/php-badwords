<?php

$paragraph = $_GET["paragraph"];
$badword = $_GET["badword"];

echo str_replace($badword, "***", $paragraph);

?>
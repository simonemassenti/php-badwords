<?php

$paragraph = $_GET["paragraph"];
$badword = $_GET["badword"];

echo "<h2>Testo censurato</h2>";
echo "<h4>".str_replace($badword, "***", $paragraph)."</h4>";
echo "<h2>Testo originale</h2>";
echo "<h4>".$paragraph."</h4>";
echo "<h2>Lunghezza testo:</h2>";
echo "<h4>".strlen($paragraph)."</h4>";

?>
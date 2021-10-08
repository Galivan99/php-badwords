<?php

$parag = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";

$badword = "ut";
$re_badword = $_GET[$badword];
$goodword = "***";

$parag_good = str_replace($badword, $goodword, $parag);
$parag_len = strlen($parag_good);

echo $parag_good;
echo "<br>";
echo "Lunghezza: ". $parag_len. " caratteri.";

?>

<html></html>
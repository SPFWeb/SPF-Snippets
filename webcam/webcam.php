<?php

$images = glob('*.{gif,png,jpg,jpeg}', GLOB_BRACE);

$count = count($images) - 1;
$toShow = 1; // how many images you want to show

for ($i = 0; $i < $toShow; $i++, $count--) {
    echo "<img src="."'".$images[$count]."' style='width: 95%'"."><br><br>" ;

}
?>

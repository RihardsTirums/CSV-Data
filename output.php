<?php

require "Data.php";
$csv = file('death.csv');
$allData = [];

foreach ($csv as $output) {
    $allData[] = str_getcsv($output);
}
foreach ($allData as $info) {
    if ($info[2] == "Vardabīga") {
        $cause = substr($info[4], 0 ,strpos($info[4], ";")) . str_replace(";"," ", $info[5]);
    } else {
        $cause = str_replace(";", "; ", $info[3]);
    }
    $rows [] = new Row($info[1], $info[2], $cause);
    $print = new Row($info[1], $info[2], $cause);
    echo $print->fullInfo();
    echo PHP_EOL;

}
echo "Total Death cases was: ". count($allData);
echo PHP_EOL;



<?php
include_once "src/includes.php";
use src\OST;
use src\Song;
use src\Seeder;

$track1 = array();
$s = new Seeder(new OST(12, "ost1", "game1", "2023", $track1));

if($_GET['ost1'] === "getOstList") {
    echo $s->getOSTList();
}
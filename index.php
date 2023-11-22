<?php
header("Content-Type: application/json");
include_once "src/includes.php";
use src\OST;
use src\Song;
use src\Seeder;

$track1 = array();
$s = new Seeder(new OST(12, "ost1", "game1", "2023", $track1),
    new OST(36, "ost2", "game1", "2023", $track1),
    new OST(47, "ost3", "game1", "2023", $track1));

if($_GET['ost'] === "AllOSTs") {
        echo json_encode($s->getOSTList());
}else if(isset($_GET['ost'])) {
    foreach ($s->getOSTList() as $ost) {
        if($ost->getName() == $_GET['ost'])
            echo json_encode($ost);
    }
}

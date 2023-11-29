<?php
header("Content-Type: application/json");
include_once "src/includes.php";
use src\OST;
use src\Song;
use src\Seeder;

$UndertaleTrackList = array(
    new Song(1, "Once upon a time", "Toby Fox", 1, 3.3),
    new Song(2, "Long Elevator", "Toby Fox", 70, 0.3),
    new Song(3, "Finale", "Toby Fox", 80, 2),
    new Song(4, "SAVE the World", "Toby Fox", 89, 2)
);

$CelesteTrackList = array(
    new Song(1, "First Steps", "Lena Raine", 2, 3.7),
    new Song(2, "Scattered and Lost", "Lena Raine", 8, 5),
    new Song(3, "Confronting Myself", "Lena Raine", 16, 4),
    new Song(4, "Reach for the Summit", "Lena Raine", 18, 12)
);
$s = new Seeder(new OST(1, "Undertale OST", "Undertale", "2015", $UndertaleTrackList),
    new OST(2, "Celeste OST", "Celeste", "2018", $CelesteTrackList)
);

if($_GET['ost'] === "AllOSTs") {
        echo json_encode($s->getOSTList());
}else if(isset($_GET['ost'])) {
    foreach ($s->getOSTList() as $ost) {
        if($ost->getName() == $_GET['ost'])
            echo json_encode($ost);
    }
}

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

$HoI4TrackList = array(
    new Song(1, "Hearts of Men", "Andreas Waldetoft", 2, 4.26),
    new Song(2, "The War Ends", "Andreas Waldetoft", 3, 5.53),
    new Song(3, "End of the Tour", "Andreas Waldetoft", 8, 3.28),
    new Song(4, "Comintern Theme", "Andreas Waldetoft", 20, 2.44)
);

$Anno1800TrackList = array(
    new Song(1, "Robber Baron Suite", "Dynamedion", 1, 4.39),
    new Song(2, "The Moribund People", "Dynamedion", 2, 2.12),
    new Song(3, "Hush", "Dynamedion", 3, 1.57),
    new Song(4, "The Crown and the Lion", "Dynamedion", 4, 1.36)
);

$s = new Seeder(
    new OST(1, "Undertale OST", "Undertale", "2015", $UndertaleTrackList),
    new OST(2, "Celeste OST", "Celeste", "2018", $CelesteTrackList),
    new OST(3, "Hearts of Iron IV OST", "Hearts of Iron IV", "2016", $HoI4TrackList),
    new OST(3, "Anno 1800 OST", "Anno 1800", "2019", $Anno1800TrackList),
);

if($_GET['ost'] === "AllOSTs") {
        echo json_encode($s->getOSTList());
}else if(isset($_GET['ost'])) {
    foreach ($s->getOSTList() as $ost) {
        if($ost->getName() == $_GET['ost'])
            echo json_encode($ost);
    }
}

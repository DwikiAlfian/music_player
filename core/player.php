<?php

include('../koneksi.php');
$db = new database();
$id = $_GET['id'];
$music = $db->musicdetail("SELECT * FROM music WHERE id='$id'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/xxs.css">
    <link rel="stylesheet" href="p.css">
    <title>Music Play Test</title>
    <style>
        body {
            background-color: black;
            margin: 0;
        }
    </style>
</head>

<body>
    <?php foreach ($music as $row) { ?>
        <div class="music-player-card" style="background-image: url('../../music/photo/<?php echo $row['photo']; ?>');">
            <div class="progressbar">
            </div>
            <div class="music-player-detail">
                <p style="font-size: 85px;"><?php echo $row['title']; ?></p>
                <h3 style="margin: 0;"><?php echo $row['uploader']; ?></h3>
            </div>
        </div>
        <div class="music-player-bar" id="player-container">
            <audio id="player" ontimeupdate="initProgressBar()">
                <source src="../../music/<?php echo $row['name']; ?>" type="audio/mpeg">
            </audio>
        <?php } ?>
        <div style="display: grid; grid-template-columns: auto auto auto; margin-left: auto; margin-right: auto; grid-gap: 10px;">
            <button onclick="pause()" class="music-player-pause"></button>
            <button onclick="play()" class="music-player-play"></button>
            <button onclick="stop()" class="music-player-stop"></button>
        </div>
        </div>
        
        <script src="../js/xxs.js"></script>
</body>

</html>
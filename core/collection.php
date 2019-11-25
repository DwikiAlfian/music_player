<?php

include('../koneksi.php');
$db = new database();
$musiclist = $db->musiclist();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="p.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music Collection</title>
</head>

<body>
    <div style="padding-left: 20px; padding-top: 20px;">
        <div class="list">
            <?php
            foreach ($musiclist as $row) {
                ?>
                <a href="player.php?id=<?php echo $row['id']; ?>">
                    <div class="music-list-card" style="background-image: url('../../music/photo/<?php echo $row['photo'] ?>');">
                        <div>
                            <h3><?php echo $row['title']; ?></h3>
                            <h4><?php echo $row['uploader']; ?></h4>
                        </div>
                    </div>
                </a>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>
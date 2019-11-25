<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/xxs.css">
    <title>Music Play Test</title>
    <style>
        body {
            background-color: black;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="music-player-card">
        <div class="music-player-detail">
            <p style="font-size: 85px;">Photograph</p>
            <h3 style="margin: 0;">-Ed Sheeran</h3>
        </div>
    </div>
    <div class="music-player-bar">
        <audio id="music">
            <source src="music/photograph.mp3" type="audio/mpeg">
        </audio>
        <div style="display: grid; grid-template-columns: auto auto auto; margin-left: auto; margin-right: auto; grid-gap: 10px;">
            <button onclick="pause()" class="music-player-pause"></button>
            <button onclick="play()" class="music-player-play"></button>
            <button onclick="stop()" class="music-player-stop"></button>
        </div>
    </div>

    <script src="../js/xxs.js"></script>
</body>

</html>
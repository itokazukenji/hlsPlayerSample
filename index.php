<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HLS Player Sample</title>
    <link href="assets/css/video-js.css" rel="stylesheet">
    <link href="assets/css/videojs-hls-quality-selector.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <video id="videojs-hls-quality-selector-player" class="video-js vjs-default-skin" width="720" height="480" controls>
        <source src="m3u8 video path" type="application/x-mpegURL">
    </video>

    <script src="assets/js/video.js"></script>
    <script src="assets/js/videojs-contrib-quality-levels.js"></script>
    <script src="assets/js/videojs-hls-quality-selector.js"></script>
    <script>
    (function(window, videojs) {
        var player = window.player = videojs('videojs-hls-quality-selector-player');
        player.hlsQualitySelector({
            displayCurrentQuality: true,
            displayCurrentQuality: true,
        });
    }(window, window.videojs));
    </script>
</body>
</html>

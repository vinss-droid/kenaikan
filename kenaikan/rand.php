<?php 
    $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // Output: video-g6swmAP8X5VG4jCi.mp4
    echo substr(str_shuffle($permitted_chars), 0, 10);
?>
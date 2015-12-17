<?php

$time = 0;

if (isset($_GET['time'])) {
    $time = (int) $_GET['time'];
}

sleep($time);

echo "Time: $time";

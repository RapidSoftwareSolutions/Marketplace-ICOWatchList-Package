<?php
$routes = [
    'metadata',
    'getAllICOs',
    'getOnlyLiveICOs',
    'getOnlyUpcomingICOs',
    'getOnlyFinishedICOs'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}


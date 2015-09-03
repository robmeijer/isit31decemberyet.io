<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\Slim();

$template = '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Is it 31 December yet?</title>
    <style>
        body {
            font-family: Arial;
            font-size: 144px;
            font-weight: bold;
        }
        .content {
            height: 200px;
            width: 400px;

            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -100px;
            margin-left: -200px;
        }
    </style>
</head>
<body>
<div class="content">:ANSWER</div>
</body>
</html>
';

$app->get('/', function () use ($template) {
    if (date('md') == '1231') {
        echo str_replace(':ANSWER', 'YES', $template);
    } else {
        echo str_replace(':ANSWER', 'NO', $template);
    }
});

$app->run();

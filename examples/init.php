<?php

require_once __DIR__ .  "/../vendor/autoload.php";

$client = new \Jnt\Client(
    [
        "token" => "WISE_TOKEN",
        "profile_id" => "WISE_PROFILE_ID",
    ]
);

<?php

require_once __DIR__ . '/classes/networks/SocialNetwork.php';
require_once __DIR__ . '/classes/networks/VK.php';
require_once __DIR__ . '/classes/networks/FB.php';
require_once __DIR__ . '/classes/SocialManager.php';
require_once __DIR__ . '/classes/VKManager.php';
require_once __DIR__ . '/classes/FBManager.php';

global $SocialManager;
$SocialManager = new FBManager();
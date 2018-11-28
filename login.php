<?php
session_start();
require 'Facebook/autoload.php';
$fb = new Facebook\Facebook([
    'app_id' => '269171357278853', // Replace {app-id} with your app id
    'app_secret' => '14dc3292720326393faea28a24b09b25',
    'default_graph_version' => 'v3.2',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('facebook/callback.php', $permissions);

header("location:" . $loginUrl);
?>
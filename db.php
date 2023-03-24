<?php
require 'vendor/autoload.php';
$mongo = new MongoDB\Client("mongodb://172.18.0.3/?compressors=disabled&gssapiServiceName=mongodb");
$db = $mongo->selectDatabase('login');
$collection = $db->selectCollection('users');

?>

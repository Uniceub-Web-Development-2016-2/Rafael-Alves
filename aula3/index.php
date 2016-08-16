<?php

include 'request.php';


$method = $_SERVER['REQUEST_METHOD'];
$protocol = $_SERVER['SERVER_PROTOCOL'];
$server_ip = $_SERVER['SERVER_ADDR'];
$remote_ip = $_SERVER['REMOTE_ADDR'];

$resource = substr($_SERVER['SCRIPT_NAME'], 1,5);
$parameter = substr($_SERVER['REQUEST_URI'], 8);

$request = new Request($method, $protocol, $server_ip, $remote_ip, $resource, $parameter);
var_dump($request);

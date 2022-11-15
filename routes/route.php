<?php
$url = $_SERVER['REQUEST_URI'];

if ($url === '/') {
    require "controllers/home.php";
} elseif ($url === '/about') {
    require "controllers/about.php";
}

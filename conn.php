<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);
$conn = mysqli_connect('localhost', 'grandfieldconsult', 'certification231', 'grandfieldconsult');

if (!$conn) {
    echo 'Error connecting to database';
    exit;
}
// \\grandfie_grandfieldconsult
<?php
/**
 * User: nnrepin
 * Date: 31.01.2017
 * Time: 15:16
 */
require __DIR__ . '/../bootstrap.php';

function dumps($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

include_once 'creational.php';
<?php

require_once '../config.php';

$directories = array("Core", "Models", "Controllers", "Views");

foreach ($directories as $directory) {
    foreach (glob($directory . "/*.php") as $file) {
        include $file;
    }
}

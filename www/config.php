<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// Dotenv\ = namespace
// Dotenv = class dans le namespace
// :: = méthode statique
// createImmutable = instancie la classe
$dotenv->load();

define('DB_HOST', $dotenv->load('DB_HOST'));
<?php

$host = 'database';
$dbname = 'docker';

return new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8", 'docker', 'docker');
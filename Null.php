<?php

$name = "Ryan";
$name = null;

$age = null;

echo "Name :";
echo $name;
echo "\n";

echo "Age :";
echo $age;
echo "\n";

echo "Is None Null? :";
var_dump(is_null($name));
echo "\n";

$hapus = "Ryan";
$hapus = null;

var_dump(isset($hapus));

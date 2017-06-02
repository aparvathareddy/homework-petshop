<?php
require './Cat.php';

$cat = new Cat();

echo 'Name is currently ' . $cat->getName();

$cat->setName('Garfield');

echo 'Name has been changed to ' . $cat->getName();

$data = new Data("database");

$data->insert("Cat", $cat);

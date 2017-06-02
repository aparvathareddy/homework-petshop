<?php

class Cat {

    private $name;
    private $age;
    private $favoriteFood;
    
    public function __construct() {
        $this->name = null;
        $this->age = null;
        $this->favoriteFood = null;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getFavoriteFood() {
        return $this->favoriteFood;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setFavoriteFood($favoriteFood) {
        $this->favoriteFood = $favoriteFood;
    }
}
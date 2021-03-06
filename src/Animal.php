<?php

namespace PetShop;

/**
 *
 * Animal is an abstract class which defines characteristics that an animal has to have. This is a blue print to the
 * class which inherits this class
 *
 * Class Animal
 */
abstract class Animal
{

    const INCREMENT_AGE_ON_SPEAKS = 5;
    protected $name = null;
    protected $age;
    protected $favoriteFood;
    protected $names = [];
    protected $totalSpeaks = 0;

    /**
     * Animal constructor.
     * @param null $name
     */
    public function __construct($name = null)
    {

        $this->age = rand(5, 10);
        $this->favoriteFood = null;

        if (!is_null($name)) {
            $this->setName($name);
        }

    }

    /**
     * @return string Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return integer Age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return string Favourite food
     */
    public function getFavoriteFood()
    {
        return $this->favoriteFood;
    }

    /**
     * @return array
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @return float|int
     */
    public function getAverageNameLength()
    {
        $count = count($this->names);

        if ($count > 0) {
            // concatenate all the names
            $totalLength = implode('', $this->names);
            return (strlen($totalLength) / $count);
        }
        return 0;
    }

    /**
     * This method sets name for the animal and stores it along with its previous names
     * @param $name
     */
    public function setName($name)
    {
        // avoid storing duplicate names
        if (!in_array($name, $this->names)) {
            array_push($this->names, $name);
        }
        $this->name = $name;
    }

    /**
     * @param $favoriteFood
     */
    public function setFavoriteFood($favoriteFood)
    {
        $this->favoriteFood = $favoriteFood;
    }

    abstract public function speak($say = null);

}
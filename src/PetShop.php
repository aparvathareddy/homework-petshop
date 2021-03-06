<?php

namespace PetShop;

use PetShop\Interfaces\iPetShopOperations;
use PetShop\Repositories\AnimalsRepository;
use PetShop\Logger;

class PetShop implements iPetShopOperations
{

    private $repository;

    public function __construct()
    {
        $this->repository = new AnimalsRepository();
    }

    /**
     * @return AnimalsRepository
     */
    public function getRepository()
    {

        return $this->repository;
    }

    /**
     * Method to create objects of a named Cat, a named Dog and insert them to database
     */
    public function saveTest()
    {
        Logger::log('in PetShop->saveTest method');
        $cat = new Cat('Kitty');
        $this->repository->insert([$cat]);
        $dog = new Dog('Cody');
        $this->repository->insert([$dog]);
    }

    /**
     * Method to create 3 nameless Cats, 3 nameless Dogs and insert them to database
     * This will make sure all the pets or none of the pets are persisted
     */
    public function savePetShop()
    {
        $cats = [];
        $dogs = [];
        for ($i = 0; $i < 3; $i++) {
            array_push($cats, new Cat());
            array_push($dogs, new Dog());
        }

        $pets = array_merge($cats, $dogs);
        $this->repository->insert($pets);
    }

    /**
     * Method will output the statistics logged in the Logger class
     */
    public function logStats()
    {
        $logInfo = Logger::getLogInfo();
        foreach ($logInfo as $message) {
            echo '&raquo; ' . $message . '<br>';
        }
    }
}
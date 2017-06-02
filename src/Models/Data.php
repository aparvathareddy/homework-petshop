<?php

namespace PetShop\Models;

use PetShop\Logger;

class Data
{

    //private $data = [];
    private $databaseName;
    private static $instance;

    /**
     * @param string $database
     * @return Object Data
     */
    public static function getInstance($database)
    {
        if (!self::$instance) {
            self::$instance = new Data($database);
        }
        return self::$instance;
    }

    /**
     * Data constructor.
     * @param string $database
     */
    private function __construct($database)
    {
        $this->databaseName = $database;
    }

    /**
     * @return void beginTran
     */
    public function beginTran()
    {
        Logger::log('Beginning a transaction');
    }

    /**
     * @return void commit
     */
    public function commit()
    {
        Logger::log('Commiting the transaction');
    }

    /**
     * @return void rollback
     */
    public function rollback()
    {
        Logger::log('Rolling back the transaction');
    }

    /**
     * @param string $table
     * @param Object $object
     * @return bool insert
     */
    public function insert($table, $object)
    {
        Logger::log('Inserting ' . $object->type . ' with name:"' . $object->getName() . '" into table ' . $table);
        // Transaction Success

        return true;
    }

    /*public function insert($table, array $objects) {
        if(empty($objects)) {
            return false;
        }
        $currentMaxId = $this->getMaxAutoIncrementId($table);
        $this->beginTran();

        foreach ($objects as $object) {
            $this->data[$table]['records'][($currentMaxId+1)] = $object;
            $currentMaxId++;
            echo 'Inserting ' . $object->getName() . ' with id='.$currentMaxId.' into table ' . $table;

        }

        $this->data[$table]['currentIndex'] = $currentMaxId;

    }

    private function getMaxAutoIncrementId($table){
        if(array_key_exists($table, $this->data)) {
            return $this->data[$table]['currentIndex'];
        } else {
            $this->createTable($table);
            return 0;
        }
    }

    private function createTable($table){
        $this->data[$table] = [];
        $this->data[$table]['currentIndex'] = 0;
    }*/
}

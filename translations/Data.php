<?php

class Data
{

    private $db;

    public function __construct($database)
    {
        $this->db = mysqli_connect($database);
    }

    public function beginTran()
    {
        echo 'Beginning a transaction';

        return $this->db->begin_transaction();
    }

    public function commit()
    {
        echo 'Committing transaction';

        return $this->db->commit();
    }

    public function rollback()
    {
        echo 'Rolling back transaction';

        return $this->db->rollback();
    }

    public function insert($table, $object)
    {
        echo 'Inserting ' . $object->getName() . ' into table ' . $table;

        return $this->db->insert_id();
    }
}

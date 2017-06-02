<?php

namespace PetShop\Repositories\Interfaces;

interface iAnimalsRepository
{
    public function insert(array $animals);

    public function getById($id);

    public function getAll();

}
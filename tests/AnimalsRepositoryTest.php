<?php

use PHPUnit\Framework\TestCase;
use PetShop\Repositories\AnimalsRepository;
use PetShop\Cat;
use PetShop\Dog;


class AnimalsRepositoryTest extends TestCase {

    public function testToInsertCat()
    {
        $animalsRepository = new AnimalsRepository();
        $objects = [new Cat()];

        $this->assertTrue($animalsRepository->insert($objects));
    }

    public function testToInsertDog()
    {
        $animalsRepository = new AnimalsRepository();
        $objects = [new Dog()];

        $this->assertTrue($animalsRepository->insert($objects));
    }

    public function testToInsertWithNoObjects()
    {
        $animalsRepository = new AnimalsRepository();
        $objects = [];

        $this->assertFalse($animalsRepository->insert($objects));
    }

    public function testToInsertMultipleValidObjects()
    {
        $animalsRepository = new AnimalsRepository();
        $objects = [new Cat(), new Dog()];

        $this->assertTrue($animalsRepository->insert($objects));
    }

    public function testToInsertMultipleCatsWithNameAndWithoutName()
    {
        $animalsRepository = new AnimalsRepository();
        $objects = [new Cat(), new Cat('Kitty')];

        $this->assertTrue($animalsRepository->insert($objects));
    }

    public function testToInsertMultipleDogsWithNameAndWithoutName()
    {
        $animalsRepository = new AnimalsRepository();
        $objects = [new Dog(), new Dog('Tommy')];

        $this->assertTrue($animalsRepository->insert($objects));
    }

    public function testToRollbackWhenBatchContainsInvalidObjects()
    {
        $animalsRepository = new AnimalsRepository();
        $objects = [new Dog(), new Dog('Tommy'), new Cat(), new Cat('Kitty'), 'Hello'];

        $this->assertFalse($animalsRepository->insert($objects));
    }

}
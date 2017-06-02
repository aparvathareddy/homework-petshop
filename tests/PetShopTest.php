<?php
use PHPUnit\Framework\TestCase;
use PetShop\PetShop;

class PetShopTest extends TestCase
{

    public function testIfConstructorCreatesAnimalRepository()
    {
        $petShop = new PetShop();
        $repository = $petShop->getRepository();
        $this->assertInstanceOf('PetShop\Repositories\AnimalsRepository', $repository);

    }
}


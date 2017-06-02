<?php
use PHPUnit\Framework\TestCase;
use PetShop\Dog;

class DogTest extends TestCase
{

    public function testInitialAge()
    {
        $dog = new Dog();
        $dogAge = $dog->getAge();

        $this->assertGreaterThanOrEqual(5, $dogAge);
        $this->assertLessThanOrEqual(10, $dogAge);
    }

    public function testNameAtBirth()
    {
        $name = 'Rocky';
        $dog = new Dog($name);

        $this->assertEquals($name, $dog->getName());
    }

    public function testAssignedName()
    {
        $name = 'Tiger';
        $dog = new Dog();
        $dog->setName($name);

        $this->assertEquals($name, $dog->getName());
    }

    public function testIfItStoresPreviousNames()
    {
        $nameInitially = 'Cody';
        $nameSecondary = 'Buddy';
        $nameThirdly = 'Cooper';

        $dog = new Dog($nameInitially);
        $dog->setName($nameSecondary);
        $dog->setName($nameThirdly);

        $this->assertContains($nameInitially, $dog->getNames());
        $this->assertContains($nameSecondary, $dog->getNames());
        $this->assertContains($nameThirdly, $dog->getNames());
    }

    public function testForAverageNameLength() {
        $names = ['Rocky', 'Tiger', 'Buddy', 'Cody', 'Cooper'];
        $concatenatedNames = '';

        // creating and calculating in different way than actual class implementation to make sure of the expected result in both cases
        foreach ($names as $name){
            if(!isset($dog)) {
                $dog = new Dog($name);
            } else {
                $dog->setName($name);
            }
            $concatenatedNames.=$name;
        }
        $averageNameLength = (strlen($concatenatedNames)/count($names));

        $this->assertEquals($averageNameLength, $dog->getAverageNameLength());
    }

    public function testForSettingFavouriteFood()
    {
        $favourite = 'Peanut Butter';
        $dog = new Dog();
        $dog->setFavoriteFood($favourite);

        $this->assertEquals($favourite, $dog->getFavoriteFood());
    }

    public function testForNotSettingFavouriteFood()
    {
        $dog = new Dog();

        $this->assertEquals(null, $dog->getFavoriteFood());
    }

    public function testDogSpeaksWhatIsTold()
    {
        $word = 'Hello';
        $dog = new Dog();
        $dog->speak($word);

        $this->assertEquals($word, $dog->speak($word));
    }

    public function testISpeakByDefault()
    {
        $dog = new Dog();
        $dog->speak();

        $this->assertEquals('woof', $dog->speak());
    }
}


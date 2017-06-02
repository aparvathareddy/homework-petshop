<?php
use PHPUnit\Framework\TestCase;
use PetShop\Cat;

class CatTest extends TestCase
{

    public function testInitialAge()
    {
        $cat = new Cat();
        $catAge = $cat->getAge();

        $this->assertGreaterThanOrEqual(5, $catAge);
        $this->assertLessThanOrEqual(10, $catAge);
    }

    public function testNameAtBirth()
    {
        $name = 'Kitty';
        $cat = new Cat($name);

        $this->assertEquals($name, $cat->getName());
    }

    public function testAssignedName()
    {
        $name = 'Bella';
        $cat = new Cat();
        $cat->setName($name);

        $this->assertEquals($name, $cat->getName());
    }

    public function testIfItStoresPreviousNames()
    {
        $nameInitially = 'Kittle';
        $nameSecondary = 'Bella';
        $nameThirdly = 'Nunu';

        $cat = new Cat($nameInitially);
        $cat->setName($nameSecondary);
        $cat->setName($nameThirdly);

        $this->assertContains($nameInitially, $cat->getNames());
        $this->assertContains($nameSecondary, $cat->getNames());
        $this->assertContains($nameThirdly, $cat->getNames());
    }

    public function testForAverageNameLength() {
        $names = ['Kittle', 'Bella', 'Nunu', 'Oreo', 'Chole'];
        $concatenatedNames = '';

        // creating and calculating in different way than actual class implementation to make sure of the expected result in both cases
        foreach ($names as $name){
            if(!isset($cat)) {
                $cat = new Cat($name);
            } else {
                $cat->setName($name);
            }
            $concatenatedNames.=$name;
        }
        $averageNameLength = (strlen($concatenatedNames)/count($names));

        $this->assertEquals($averageNameLength, $cat->getAverageNameLength());
    }

    public function testForSettingFavouriteFood()
    {
        $favourite = 'Mouse';
        $cat = new Cat();
        $cat->setFavoriteFood($favourite);

        $this->assertEquals($favourite, $cat->getFavoriteFood());
    }

    public function testForNotSettingFavouriteFood()
    {
        $cat = new Cat();

        $this->assertEquals(null, $cat->getFavoriteFood());
    }

    public function testCatSpeaksWhatIsTold()
    {
        $word = 'Hello';
        $cat = new Cat();
        $cat->speak($word);

        $this->assertEquals($word, $cat->speak($word));
    }

    public function testISpeakByDefault()
    {
        $cat = new Cat();
        $cat->speak();

        $this->assertEquals('meow', $cat->speak());
    }

    public function testToIncrementAgeOn5Speaks()
    {
        $cat = new Cat();
        $currentAge = $cat->getAge();
        for ($i = 0; $i < 5; $i++) {
            $cat->speak();
        }
        $expectedAge = $currentAge + 1;

        $this->assertEquals($expectedAge, $cat->getAge());
    }

    public function testToIncrementAgeOn6Speaks()
    {
        $cat = new Cat();
        $currentAge = $cat->getAge();
        for ($i = 0; $i < 6; $i++) {
            $cat->speak();
        }
        $expectedAge = $currentAge + 1;

        $this->assertEquals($expectedAge, $cat->getAge());
    }

    public function testNotToIncrementAgeOn4Speaks()
    {
        $cat = new Cat();
        $currentAge = $cat->getAge();
        for ($i = 0; $i < 4; $i++) {
            $cat->speak();
        }

        $this->assertEquals($currentAge, $cat->getAge());
    }
}


<?php
// trait for multiple inheritance
trait Testtrait
{
    public function test_trait($name, $population)
    {
        return "I am from {$name},here population is {$population}.";
    }
}

//interface 
interface TestInterface
{
    public function test($name);
}

class Rangpur implements Testinterface
{
    use Testtrait;
    public $name;
    public $population;

    const TEST = "Hi, iam Test from Constant";
    public function __construct($name, $population = self::TEST)
    {
        $this->name = $name;
        $this->population = $population;
    }
    public function test($name)
    {
        return $this->test_trait($this->name, $this->population);
    }
}
$rangpur = new Rangpur("Rangour-Sador", "one Lakh");
echo $rangpur->test("Ruhul");
echo "</br>";
//inheritance works the extends word
class Dhaka extends Rangpur
{
    public function testinheritance()
    {
        return "I am from inheritance,its works with Extends Word";
    }
}

$Dhaka = new Dhaka("Mirpur", 50, 000);
echo $Dhaka->testinheritance();
echo "</br>";
class Khulna extends Rangpur
{
    public $model;
    public function __construct($name, $population, $model)
    {
        $this->name = $name;
        $this->population = $population;
        $this->model = $model;
    }
    public function intro()
    {
        echo "We live in {$this->name}, the population is {$this->population} and the model is {$this->model} Town.";
    }
}

$Khulna = new Khulna("Khulna", "1,00,000", "A+");
$Khulna->intro();

<?php declare(strict_types=1);

class Dog
{
    private string $name;
    private string $sex;
    private ?string $father;
    private ?string $mother;

    public function __construct(string  $name,
                                string  $sex,
                                ?string $father = null,
                                ?string $mother = null)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->father = $father;
        $this->mother = $mother;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMother(): string
    {
        return $this->mother ?? "Unknown";
    }

    public function getFather(): string
    {
        return $this->father ?? "Unknown";
    }

    public function getSex(): string
    {
        return $this->sex;
    }
}

class FamilyTree
{
    private array $dogs = [];

    public function addDog(Dog $dog)
    {
        $this->dogs[$dog->getName()] = $dog;
    }

    private function shareSameParent(Dog $a, Dog $b): bool
    {
        return ($a->getMother() === $b->getMother() && $a->getMother() !== "Unknown") ||
            ($a->getFather() === $b->getFather() && $a->getFather() !== "Unknown");
    }

    public function getSiblings(Dog $c): array
    {
        $siblings = [];
        foreach ($this->dogs as $name => $potentialSibling) {
            if ($this->shareSameParent($c, $potentialSibling) && $name !== $c->getName()) {
                $siblings[] = $potentialSibling;
            }
        }
        return $siblings;
    }
}

$dogs = [
    "max" => new Dog("Max", "male", "Rocky", "Lady"),
    "rocky" => new Dog("Rocky", "male", "Sam", "Molly"),
    "sparky" => new Dog("Sparky", "male", null, null),
    "buster" => new Dog("Buster", "male", "Sparky", "Lady"),
    "sam" => new Dog("Sam", "male", null, null),
    "lady" => new Dog("Lady", "female", null, null),
    "molly" => new Dog("Molly", "female", null, null),
    "coco" => new Dog("Coco", "female", "Buster", "Molly"),
];
function describeDog(Dog $dog): string
{
    $description = $dog->getName() . " is a " . $dog->getSex() . ".";
    $description .= " Mother: " . $dog->getMother() . ".";
    $description .= " Father: " . $dog->getFather() . ".";
    return $description;
}

function nameSiblings(FamilyTree $familyTree, Dog $dog): string
{
    $siblings = $familyTree->getSiblings($dog);
    $output = $dog->getName() . " has ";
    if (empty($siblings)) {
        return $output . "no siblings.";
    }
    $siblingDescription = [];
    foreach ($siblings as $sibling) {
        $relation = ($sibling->getSex() === "male") ? "brother" : "sister";
        $sharedParent = $dog->getFather() === $sibling->getFather() ? "Father" : "Mother";
        $siblingDescription[] = $relation . " " . $sibling->getName() . " (shared " . $sharedParent . ")";
    }

    return $output . "the following siblings: " . implode(", ", $siblingDescription) . ".";
}

$familyTree = new FamilyTree();
foreach ($dogs as $dog) {
    $familyTree->addDog($dog);
}

echo "Enter the name of the dog you want information on: ";
$inputDogName = trim(strtolower(readline()));

if (isset($dogs[$inputDogName])) {
    echo describeDog($dogs[$inputDogName]) . PHP_EOL;
    echo nameSiblings($familyTree, $dogs[$inputDogName]) . PHP_EOL;
} else {
    echo "Dog named $inputDogName not found." . PHP_EOL;
}
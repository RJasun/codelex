<?php
class Products {
    private string $name;
    private float $startPrice;
    private int $amount;
   public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount = $amount;
    }

    public function printProduct(): string
    {
        return "product: $this->name, price: $this->startPrice, amount: $this->amount units" . PHP_EOL;
    }
    public function setAmount(int $newAmount): void
    {
        $this->amount = $newAmount;
    }
    public function setPrice(float $newPrice): void
    {
        $this->startPrice = $newPrice;
    }
}
$mouse = new Products("Logitech mouse", 70.00, 14);
$iphone = new Products("iPhone 5s", 999.99, 3);
$printer = new Products("Epson EB-U05", 460.46, 1);

echo $mouse->printProduct();
echo $iphone->printProduct();
echo $printer->printProduct();

$iphone->setAmount(2);
$iphone->setPrice(666.66);

var_dump($iphone);
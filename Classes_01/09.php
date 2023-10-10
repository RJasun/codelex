<?php declare(strict_types=1);

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function show_user_name_and_balance(): string
    {
        $formattedBalance = '$' . number_format(abs($this->balance), 2);
        if ($this->balance < 0) {
            $formattedBalance = '-' . $formattedBalance;
        }
        return "{$this->name}, {$formattedBalance}";
    }
}

$ben = new BankAccount("Benson", 17.25);
echo $ben->show_user_name_and_balance() . PHP_EOL;

$benTwo = new BankAccount("Benson", -17.5);
echo $benTwo->show_user_name_and_balance();
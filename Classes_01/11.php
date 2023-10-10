<?php declare(strict_types=1);

class Account
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function withdrawal(float $amount): void
    {
        $this->balance -= $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function __toString(): string
    {
        return $this->name . ", balance: " . $this->getBalance() . "\n";
    }
}

function transfer(Account $from, Account $to, float $howMuch): void
{
    $from->withdrawal($howMuch);
    $to->deposit($howMuch);
}

$mattAccount = new Account("Matt's account", 1000.00);
$myAccount = new Account("My account", 0.00);

$mattAccount->withdrawal(100.0);
$myAccount->deposit(100.0);

echo $mattAccount;
echo $myAccount;

transfer($mattAccount, $myAccount, 50.0);

echo $mattAccount;
echo $myAccount;

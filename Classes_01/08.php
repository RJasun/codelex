<?php declare(strict_types=1);

class SavingsAccount
{
    private int $balance;
    private float $annualInterestRate;

    public function __construct(float $startingBalance,
                                float $annualInterestRate)
    {
        $this->balance = $this->toCents($startingBalance);
        $this->annualInterestRate = $annualInterestRate;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $this->toCents($amount);
    }

    public function withdraw(float $amount): void
    {
        $this->balance -= $this->toCents($amount);
    }

    public function addMonthlyInterest(): void
    {
        $monthlyInterestRate = $this->annualInterestRate / 12 / 100;
        $this->balance += (int)round($this->balance * $monthlyInterestRate);
    }

    public function getBalance(): float
    {
        return $this->toDollars($this->balance);
    }

    private function toCents(float $amount): int
    {
        return (int)round($amount * 100);
    }

    private function toDollars(int $cents): float
    {
        return $cents / 100.0;
    }
}

echo "How much money is in the account?: ";
$startingBalance = floatval(readline());

echo "Enter the annual interest rate: ";
$annualInterestRate = floatval(readline());

$account = new SavingsAccount($startingBalance, $annualInterestRate);

echo "How long has the account been opened? ";
$months = intval(readline());

$totalDeposited = 0;
$totalWithdrawn = 0;
$initialBalance = $account->getBalance();

for ($i = 1; $i <= $months; $i++) {
    echo "Enter amount deposited for month: $i: ";
    $deposit = floatval(readline());
    $totalDeposited += $deposit;
    $account->deposit($deposit);

    echo "Enter amount withdrawn for $i: ";
    $withdrawal = floatval(readline());
    $totalWithdrawn += $withdrawal;
    $account->withdraw($withdrawal);
    $account->addMonthlyInterest();
}

$interestEarned = $account->getBalance() - $initialBalance - $totalDeposited + $totalWithdrawn;

echo "Total deposited: $" . number_format($totalDeposited, 2) . "\n";
echo "Total withdrawn: $" . number_format($totalWithdrawn, 2) . "\n";
echo "Interest earned: $" . number_format($interestEarned, 2) . "\n";
echo "Ending balance: $" . number_format($account->getBalance(), 2) . "\n";
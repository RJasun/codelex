<?php declare(strict_types=1);

$employees = [];

$Harry = new stdClass();
$Harry->name = "Harry";
$Harry->basePay = 7.50;
$Harry->hoursWorked = 35;

$employees[] = $Harry;

$Mike = new stdClass();
$Mike->name = "Mike";
$Mike->basePay = 8.20;
$Mike->hoursWorked = 47;

$employees[] = $Mike;

$Alice = new stdClass();
$Alice->name = "Alice";
$Alice->basePay = 10.00;
$Alice->hoursWorked = 73;

$employees[] = $Alice;

function totalPay($basePay, $hoursWorked): float
{
    $overtimeHours = max($hoursWorked - 40, 0);
    $regularHours = $hoursWorked - $overtimeHours;
    $overtimePay = $overtimeHours * ($basePay * 1.5);
    $regularPay = $regularHours * $basePay;
    return $regularPay + $overtimePay;
}

foreach ($employees as $employee)
{
    $totalSalary = totalPay($employee->basePay, $employee->hoursWorked);
    if ($employee->basePay < 8.00) {
        echo "{$employee->name}: Error, base pay too small\n";
    }
    elseif ($employee->hoursWorked >= 60) {
        echo "{$employee->name}: Error, too many hours worked\n";
    }

    else {
        echo "{$employee->name}'s total salary is $$totalSalary.\n";
    }
}

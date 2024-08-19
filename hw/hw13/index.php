<?php

use hw\hw13\BankAccount;

require_once __DIR__ . '/BankAccount.php';
try {
    $account = new BankAccount("12", 100);
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
    exit;
}


echo "Інформація по рахунку: " . PHP_EOL;
echo "Номер рахунку: №" . $account->getAccountNumber() . PHP_EOL;
echo "Баланс: " . $account->getBalance() . " Грн" . PHP_EOL;

try {
    echo "На яку сумму повнити баланс?" . PHP_EOL;
    $argument = (float)fgets(STDIN);
    $account->deposit($argument); }
catch
    (Exception $exception) {
        echo $exception->getMessage() . PHP_EOL;
        exit;
    }


echo "Інформація по рахунку: " . PHP_EOL;
echo "Номер рахунку: №" . $account->getAccountNumber() . PHP_EOL;
echo "Баланс: " . $account->getBalance() . " Грн" . PHP_EOL;

try {
    echo "Скільки зняти коштів" . PHP_EOL;
    $argument = (float)fgets(STDIN);
    $account->withdraw($argument);
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
    exit;
}

echo "Інформація по рахунку: " . PHP_EOL;
echo "Номер рахунку: №" . $account->getAccountNumber() . PHP_EOL;
echo "Баланс: " . $account->getBalance() . " Грн" . PHP_EOL;


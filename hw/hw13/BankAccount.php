<?php

namespace hw\hw13;

use Exception;

class BankAccount
{
    private int $accountNumber;
    private float $balance;

    public function __construct(int $accountNumber, float $balance)
    {
        $this->setAccountNumber($accountNumber);
        $this->setBalance($balance);
    }

    /**
     * @throws Exception
     */
    public function setAccountNumber(int $accountNumber): void
    {
        if ($accountNumber < 0) {
            throw new Exception("Номер рахунку має бути більше 0!");
        }
        $this->accountNumber = $accountNumber;
    }

    /**
     * @throws Exception
     */
    public function setBalance(float $balance): void
    {
        if ($balance < 0) {
            throw new Exception("Баланс має бути більше 0!");
        }
        $this->balance = $balance;
    }

    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @throws Exception
     */
    public function deposit(float $amount): float
    {
        if ($amount < 0) {
            throw new Exception("Сума поповнення має бути більше 0!");
        }
        return $this->balance += $amount;
    }

    /**
     * @throws Exception
     */
    public function withdraw(float $amount): float
    {
        if ($amount < 0) {
            throw new Exception("Сума зняття має бути більше 0!");
        }
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
        } else {
            return throw new Exception("На балансі аккаунту не достатньо коштів!");
        }
        return $this->balance;
    }

}


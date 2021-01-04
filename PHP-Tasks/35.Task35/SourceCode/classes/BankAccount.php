<?php

class BankAccount implements IfaceBankAccount
{

    private $balance = null;

    public function __construct(Money $openingBalance)
    {
        $this->balance = $openingBalance;
    }

    public function balance()
    {
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
        //implement this method
        $this->balance = $this->balance->value() + $amount->value();
    }

    public function transfer(Money $amount, BankAccount $account)
    {
        //implement this method
    }
    public function withdraw(Money $amount) {
        $this->balance = $this->balance->value() - $amount->value();
    }
}
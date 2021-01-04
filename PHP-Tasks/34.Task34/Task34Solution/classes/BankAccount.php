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
        echo "=>Current balance now is " . $this->balance;
        echo "<br/>";
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
        $this->balance = $this->balance->value() + $amount->value();
    }

    public function withdraw(Money $amount)
    {
        $this->balance = $this->balance->value() - $amount->value();
    }

    public function transfer(Money $amount, BankAccount $account)
    {
        //implement this method
    }
}
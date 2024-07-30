<?php

// TODO refactoriser le code pour respecter le principe Single Responsability de la programmation SOLID


class NoBalanceAvailableException extends \Exception
{
}

class Product
{
    public function getValue()
    {
    }
}

class Account
{
    private float $balance;
    public function getBalance()
    {
        return $this->balance;
    }
    public function setBalance()
    {
    }

    public function haveBalanceAvailable(float $value): float
    {
        return $this->getBalance() >= $value;
    }

    public function calculateBalance(float $value)
    {
        $this->setBalance($this->getBalance() - $value);
    }
}

class Customer
{

    public function __construct(private Account $account)
    {
    }
    public function getAccount(): Account
    {
        return $this->account;
    }
}

class Sale
{
    public function getValue()
    {
    }
    public function setValue()
    {
    }
    
    public function sell(array $products, Customer $customer)
    {
        $value = $this->calculateTotalValue($products);
        $account = $customer->getAccount();
        
        if (!$account->haveBalanceAvailable($value)) {
            throw new NoBalanceAvailableException();
        }

        /*..... something.....*/
        
        $this->setValue($value);
        $account->calculateBalance($value);
    }
    
    
    
    private function calculateTotalValue(array $products)
    {
        $value = 0;
    
        foreach ($products as $product) {
            $value += $product->getValue();
        }
    
        return $value;
    }
}

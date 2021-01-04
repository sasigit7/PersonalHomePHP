<?php
//load all interfaces in interfaces folder
foreach (glob('interfaces/*.php') as $filename) {
    require_once $filename;
}
//load all classes in classes folder
foreach (glob('classes/*.php') as $filename) {
    require_once $filename;
}


function test($cond, $desc)
{
    if ($cond) {
        echo '<span style="color:green">Passed</span>';
    } else {
        echo '<span style="color:red">Failed</span>';
    }

    echo ' - ' . $desc;

    echo '<br><hr><br>';
}


/*------ Tests --------*/

//set opening balances
$myBankAccount = new BankAccount(new Money(1200));
$yourBankAccount = new BankAccount(new Money(500));

test((int) (string) $myBankAccount->balance() == 1200, "Opening balance remains the same");
test((int) (string) $yourBankAccount->balance() == 500, "Opening balance remains the same");

//deposit money into account
$myBankAccount->deposit(new Money(300));
test((int) (string) $myBankAccount->balance() == 1500, "Deposit increases the balance");

//withdraw money from account
$yourBankAccount->withdraw(new Money(300));
test((int) (string) $yourBankAccount->balance() == 200, "Withdrawal decreases the balance");

//transfer money between accounts
$myBankAccount->transfer(new Money(1000), $yourBankAccount);
test((int) (string) $myBankAccount->balance() == 500, "Transfer decreases balance from target account");
test((int) (string) $yourBankAccount->balance() == 1200, "Transfer increases balance on destination account");
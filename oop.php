<?php
class Person
{
    private $name;
    private $email;
    //public static $ageLimit = 40; // Can access without instantiating an object
    private static $ageLimit = 35;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__ . ' created<br>';
    }

    public function __destruct()
    {
        echo __CLASS__ . ' destroyed<br>';
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name . '<br>';
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email . '<br>';
    }

    public static function getAgeLimit()
    {
        return self::$ageLimit;
    }
}

// Static props and methods
// echo Person::$ageLimit;
// echo Person::getAgeLimit();

// $person1 = new Person;

// Can not access name because it is private
// $person1->name = 'Aida Berrouayel';
// echo $person1->name;

// Use setter and getter
// $person1->setName("Aida Berrouayel");
// echo $person1->getName();

// Create a Person and pass the values for name and email
// $person1 = new Person('Aida Berrouayel', 'aida@aida.com');
// echo $person1->getName();

// Inheritance
class Customer extends Person
{
    private $balance;

    public function __construct($name, $email, $balance)
    {
        parent::__destruct($name, $email);
        $this->balance = $balance;
        echo __CLASS__ . ' created<br>';
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance . '<br>';
    }
}

// $customer1 = new Customer("Kenza Berrouayel", "keza@kenza.com", 300);

// echo $customer1->getBalance();

<?php

class Product
{
   public $id;
   public $name;
   public $price;
   public $quantity;
   public $category;
   public $brand;
   public $rating;

   public function __construct($id, $name, $price, $quantity, $category, $brand, $rating)
   {
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->quantity = $quantity;
      $this->category = $category;
      $this->brand = $brand;
      $this->rating = $rating;
   }

   public function addtocart()
   { //Добавление товара
   }

   public function removefromcart()
   { //Удаление товара
   }

   public function setrpomotion()
   { //Добавление акции
   }
}

class Smartphone extends Product
{
   private $os;
   private $ram;
   private $rom;
   private $processor;
   private $screensize;

   public function __construct($id, $name, $price, $quantity, $category, $brand, $rating, $os = null, $ram, $rom, $processor, $screensize)
   {
      parent::__construct($id, $name, $price, $quantity, $category, $brand, $rating);
      $this->os = $os;
      $this->ram = $ram;
      $this->rom = $rom;
      $this->processor = $processor;
      $this->screensize = $screensize;
   }
}

// Задание 5

class A
{
   public function foo()
   {
      static $x = 0;
      echo ++$x;
   }
}

$a1 = new A(); //Объявили объект, ничего не происходит
$a2 = new A(); //Объявили объект, ничего не происходит
$a1->foo(); // 1
$a2->foo(); // 2
$a1->foo(); // 3
$a2->foo(); // 4
// Так как $x = static и у нас экземпляр одного и того же класса..

// Задание 6

class AA
{
   public function foo()
   {
      static $x = 0;
      echo ++$x;
   }
}
class BB extends AA
{
}
$aa1 = new AA(); //Объявили объект, ничего не происходит
$bb1 = new BB(); //Объявили объект, ничего не происходит
$aa1->foo(); // 1
$bb1->foo(); // 1
$aa1->foo(); // 2
$bb1->foo(); // 2
// Так как у нас два разных класса.
<?php

abstract class Product
{
   public $price;
   abstract public function calcprice();
};


class RealProduct extends Product
{
   public function calcprice(): int
   {
      return parent::$price;
   }
};


class DigitalProduct extends Product
{
   public function calcprice(): int
   {
      return (parent::$price / 2);
   }
};


class WeightProduct extends Product
{
   public $weight;
   public function calcprice(): int
   {
      return (parent::$price / $this->weight);
   }
};

// #2

trait SingletonTrait
{
   public static $var;
   public function __construct()
   {
   }
   public function __clone()
   {
   }
   public function __wakeup()
   {
   }
   public static function getInstance()
   {
      if (self::$var == null) {
         self::$var = new self();
      }
      return self::$var;
   }
   public function someAction()
   {
   }
}

class Singleton
{
   use SingletonTrait;
}

Singleton::getInstance()->someAction();

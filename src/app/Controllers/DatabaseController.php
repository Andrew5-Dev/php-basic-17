<?php

class DatabaseController
{
     public function getCustomers()
      {
          $connect = Connector::getInstance();
          $stmt = $connect->query("SELECT * FROM customers");
          $customers = $stmt->fetchAll();
          foreach ($customers as $customer) {
              echo $customer["name"] . "<br>";
          }
      }

      public function getProducts()
      {
          $connect = Connector::getInstance();
          $stmt = $connect->query("SELECT * FROM products");
          $products = $stmt->fetchAll();
          foreach ($products as $product) {
              echo $product["product_name"] . "<br>";
          }
      }

      public function getProductsInStock()
      {
          $connect = Connector::getInstance();
          $stmt = $connect->query("SELECT * FROM products WHERE in_stock > 4");
          $products = $stmt->fetchAll();
          foreach ($products as $product) {
              echo $product["product_name"] . "<br>";
          }
      }

      Public function getProductsById()
      {
          $connect = Connector::getInstance();
          $stmt = $connect->query("SELECT * FROM products WHERE id = 4");
          $products = $stmt->fetchAll();
          foreach ($products as $product) {
              echo $product["product_name"] . "<br>";
          }
      }

    public function getProductsBetween()
    {
        $connect = Connector::getInstance();
        $stmt = $connect->query("SELECT `id`, `product_name`, `price` FROM `products` WHERE `price` BETWEEN 10000 AND 15000");
        $products = $stmt->fetchAll();
        foreach ($products as $product) {
            echo $product["product_name"] . " " . $product["price"] . "<br>";
        }
    }

    public function getProductsSortByPrice()
    {
        try {
        $connect = Connector::getInstance();
        $stmt = $connect->query("SELECT `id`, `product_name`, `price` FROM `products` ORDER BY `price` DESC");
        $products = $stmt->fetchAll();
        foreach ($products as $product) {
            echo $product["product_name" ] . " " . $product["price"] . "<br>";
        }
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function getProductsSortByName()
    {
        try {
        $connect = Connector::getInstance();
        $stmt = $connect->query("SELECT `id`, `product_name`, `price` FROM `products` ORDER BY `product_name`");
        $products = $stmt->fetchAll();
        foreach ($products as $product) {
            echo $product["product_name" ] . " " . $product["price"] . "<br>";
        }
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }


}





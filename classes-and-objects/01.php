<?php

class Product
{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function printProduct(): string
    {
        return $this->name . ", price " . $this->price . ", amount " . $this->amount;
    }


}

$product1 = new Product('Logitech mouse', 70.00, 14);
$product2 = new Product('iPhone 5S', 999.99, 3);
$product3 = new Product('Epson EB-U05', 440.46, 1);

echo $product1->printProduct() . "\n";
echo $product2->printProduct() . "\n";
echo $product3->printProduct() . "\n";

$product1->setAmount(1000);
$product2->setPrice(0.0001);
$product3->setAmount(1);

echo "\n";
echo $product1->printProduct() . "\n";
echo $product2->printProduct() . "\n";
echo $product3->printProduct() . "\n";
<?php
class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        if (!is_int($id) || !is_string($name) || !is_float($price)) {
            throw new InvalidArgumentException('Invalid data types for constructor parameters.');
        }

        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        return number_format($this->price, 2);
    }

    public function showDetails() {
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: $" . $this->getFormattedPrice() . "\n";
    }
}

try {
    // Test the Product class
    $product = new Product(1, 'T-shirt', 19.99);
    $product->showDetails();
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}


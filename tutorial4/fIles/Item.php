<?php
class Item
{
    protected $name = "";
    protected $price = 1;
    protected $quantity = 1;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function display()
    {
        return sprintf("Item: %-10s Price: $%-10.2f Quantity: %-10d Cost: $%-10.2f", $this->name, $this->price, $this->quantity, $this->calculateCost());
    }

    public function calculateCost()
    {
        return $this->price * $this->quantity;
    }
}

if (!debug_backtrace()) {
    // Debugginng output.
    $item = new Item("milk", 2.50, 2);
    echo $item->display();
}
?>

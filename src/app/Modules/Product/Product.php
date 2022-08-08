<?php


namespace App\Modules\Product;

class Product
{
    private int $id;
    private string $name;
    private string $slug;
    private string $description;
    private float $price;
    private int $quantity;

    function __construct(
        int $id,
        string $name,
        string $slug,
        string $description,
        float $price,
        int $quantity
    ) {
        $this->$id = $id;
        $this->$name = $name;
        $this->$slug = $slug;
        $this->$description = $description;
        $this->$price = $price;
        $this->$quantity = $quantity;
    }






    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}

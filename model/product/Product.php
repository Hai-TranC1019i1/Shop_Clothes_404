<?php


class Product
{
    private $id;
    private $name;
    private $image;
    private $price;
    private $type;
    private $description;

    public function __construct($name, $price, $type, $description,$image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->description = $description;
        $this->image = $image;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }
}
<?php


class Category
{
  private $id;
  private $name;
  private $description;

  public function __construct($name , $description)
  {
    $this->name = $name;
    $this->description = $description;
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


}
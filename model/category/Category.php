<?php


class category
{
  private $id;
  private $shirt;
  private $trousers;
  private $shoes;
  private $accessories;

  public function __construct($shirt , $trousers, $shoes , $accessories)
  {
      $this->shirt = $shirt;
      $this->trousers = $trousers;
      $this->shoes = $shoes;
      $this->accessories = $accessories;
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
    public function getShirt()
    {
        return $this->shirt;
    }

    /**
     * @return mixed
     */
    public function getTrousers()
    {
        return $this->trousers;
    }

    /**
     * @return mixed
     */
    public function getShoes()
    {
        return $this->shoes;
    }

    /**
     * @return mixed
     */
    public function getAccessories()
    {
        return $this->accessories;
    }
}
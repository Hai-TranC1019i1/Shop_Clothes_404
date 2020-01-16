<?php


class Order
{
    private $orderNumber;
    private $orderDate;
    private $status;
    private $comments;
    private $customerNumber;

    public function __construct($orderDate,$status,$comments,$customerNumber)
    {
        $this->orderDate = $orderDate;
        $this->status = $status;
        $this->comments = $comments;
        $this->customerNumber = $customerNumber;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @return mixed
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param mixed $orderNumber
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }
}
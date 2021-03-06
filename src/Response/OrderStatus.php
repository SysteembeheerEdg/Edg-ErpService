<?php
/**
 * OrderStatus
 *
 * @copyright Copyright © 2017 Bold Commerce BV. All rights reserved.
 * @author    dev@boldcommerce.nl
 */

namespace Edg\ErpService\Response;


class OrderStatus
{
    protected $result;
    protected $status;
    /**
     * @var \Edg\ErpService\DataModel\OrderStatus[]
     */
    protected $orders = [];

    public function __construct($result, $status)
    {
        $this->result = $result;
        $this->status = $status;
    }

    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return \Edg\ErpService\DataModel\OrderStatus[]
     */
    public function getOrders()
    {
        return $this->orders;
    }
    
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return bool
     */
    public function hasOrders() {
        return $this->orders && count($this->orders) > 0;
    }


    public function addOrder(\Edg\ErpService\DataModel\OrderStatus $order)
    {
        $this->orders[] = $order;
        return $this;
    }
}
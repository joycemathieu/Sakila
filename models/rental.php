<?php

class rental extends Database
{

    const TABLE_NAME = 'rental';

    public $_rental_id;
    public $_customer_id;
    public $_rental_date;
    public $_return_date;

    protected $_last_update;


    public function setrental($rental_id)
    {
        $this->rental_id = $rental_id;
        return $rental_id;
    }

    public function setCustomer($customer_id)
    {
        $this->customer_id = $customer_id;
        return $customer_id;
    }

    public function setrental_date($rental_date)
    {
        $this->rental_date = $rental_date;
        return $rental_date;
    }

    public function setreturn_date($return_date)
    {
        $this->return_date = $return_date;
        return $return_date;
    }

    public function getrental()
    {
        return $this->rental_id;
    }

    public function getCustomer()
    {
        return $this->customer_id;
    }

    public function getrental_date()
    {
        return $this->rental_date;
    }

    public function getreturn_date()
    {
        return $this->return_date;
    }


    public function findAll()
    {
        $response = Database::getAll('SELECT r.rental_id,c.first_name,c.last_name FROM rental as r
        left join customer as c
        on r.rental_id = c.customer_id');
        return $response;
    }
}

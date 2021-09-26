<?php



class customer extends Database
{

    const TABLE_NAME = 'customer';

    public $_customer_id;
    public $_first_name;
    public $_last_name;
    public $_email;
    public $_active;
    protected $_last_update;

    public function setcustomer($customer_id)
    {
        $this->customer_id = $customer_id;
        return $customer_id;
    }

    public function setFname($first_name)
    {
        $this->first_name = $first_name;
        return $first_name;
    }

    public function setLname($last_name)
    {
        $this->last_name = $last_name;
        return $last_name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        return $email;
    }
    public function setActive($active)
    {
        $this->active = $active;
        return $active;
    }

    public function getcustomer()
    {
        return $this->customer_id;
    }

    public function getFname()
    {
        return $this->first_name;
    }

    public function getLname()
    {
        return $this->last_name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getActive()
    {
        return $this->active;
    }

    public  function findAll()
    {
        $data = Database::getAll('SELECT * FROM customer WHERE active = 1');
        return $data;
    }
}

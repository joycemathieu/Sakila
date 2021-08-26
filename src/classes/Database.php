<?php

class Database
{

    private $servername = "localhost";
    private $username = "root";
    private $password = "secret";
    private $dbname = "sakila";

    /**
     * connexion
     */
    function pdo_connect()
    {
        try {
            $db = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo 'Exception reçue : ', $e->getMessage(), "\n";
            return false;
        }
    }

    /**
     * query sql
     */
    public function sql($sql)
    {
        try {
            $query = $this->pdo_connect()->prepare($sql);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return $query;
        } catch (PDOException $e) {
            echo 'Exception reçue : ', $e->getMessage(), "\n";
        }
    }

    /**
     *  redirection
     */
    public function redirection($url)
    {
        header('Location: ' . $url);
    }
}

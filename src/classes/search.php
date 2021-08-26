<?php

require 'Database.php';

class Search extends Database
{
    protected $table = 'film';

    public function search()
    {
        try {
            $result = $this->sql('SELECT * FROM ' . $this->table . '');
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    }
}

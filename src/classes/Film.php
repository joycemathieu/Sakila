<?php

require 'Database.php';

class Film extends Database
{
    protected $table = 'film';

    public function getAll()
    {
        try {
            $result = $this->sql('SELECT * FROM ' . $this->table);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    }

    public function getFilm($id)
    {
        try {
            $result = $this->sql('SELECT * FROM ' . $this->table . ' WHERE film_id = ' . $id);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    }
}

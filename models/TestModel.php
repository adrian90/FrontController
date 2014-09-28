<?php

require_once '/db/DB.php';

class TestModel extends DB {

    public function __construct() {
        parent::__construct();
    }

    public function cityList() {

        try {
            $consulta = $this->conn->prepare('SELECT * FROM city');
            $consulta->execute();
        } catch (Exception $e) {
            return "No se ha podido establecer contacto con la base de datos";
        }
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

}

<?php

require_once '/db/DB.php';

class MainModel extends DB {

    public function __construct() {
        parent::__construct();
    }

    public function infonocList() {

        try {
            $consulta = $this->conn->prepare('SELECT * FROM infonoc');
            $consulta->execute();
        } catch (Exception $e) {
            return "No se ha podido establecer contacto con la base de datos";
        }
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

}

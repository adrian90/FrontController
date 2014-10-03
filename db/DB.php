<?php

abstract class DB {

    const DBHOST = "";
    const DBUSER = "";
    const DBPASS = "";
    const DBNAME = "";

    protected $conn;

    protected function __construct($dbhost = "", $dbuser = "", $dbpass = "", $dbname = "") {

        $dbhost = (!empty($dbhost)) ? $dbhost : self::DBHOST;
        $dbuser = (!empty($dbuser)) ? $dbuser : self::DBUSER;
        $dbpass = (!empty($dbpass)) ? $dbpass : self::DBPASS;
        $dbname = (!empty($dbname)) ? $dbname : self::DBNAME;

        try {
            $this->conn = new PDO("mysql:host={$dbhost};dbname={$dbname};", $dbuser, $dbpass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("SET NAMES 'utf8'; SET time_zone = 'Europe/London';");
        } catch (Exception $e) {
            return "No se ha podido establecer contacto con la base de datos";
        }
    }
/*
    protected function all() {
        try {
            $query = $this->conn->query("SELECT * FROM {$this->table}");
        } catch (Exception $e) {
            return "No se ha podido establecer contacto con la base de datos";
            exit();
        }

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function find($id) {
        try {
            $query = $this->conn->prepare("
	        SELECT *
	        FROM {$this->table}
	        WHERE {$this->id} = :id
	      ");
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();
        } catch (Exception $e) {
            return "No se ha podido establecer contacto con la base de datos";
        }

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    protected function insert($data = array()) {

        try {
            $query = $this->conn->prepare("
	        INSERT INTO $this->table 
	        (" . implode(', ', array_keys($data)) . ")
	        VALUES
	        (:" . implode(', :', array_keys($data)) . ")
	      ");

            foreach ($data as $key => &$val) {
                $query->bindParam($key, $val, PDO::PARAM_STR);
            }

            return $query->execute();
        } catch (Exception $e) {
            return "No se ha podido establecer contacto con la base de datos";
        }
    }

    protected function update($id, $data = array()) {

        foreach ($data as $key => $value) {
            $update_str[] = "{$key} = :{$key}";
        }

        try {
            $query = $this->conn->prepare("
	        UPDATE $this->table SET
	        " . implode(',', $update_str) . "
	        WHERE {$this->id} = :id
	      ");

            foreach ($data as $key => &$val) {
                $query->bindParam($key, $val, PDO::PARAM_STR);
            }

            $query->bindParam(':id', $id, PDO::PARAM_INT);

            return $query->execute();
        } catch (Exception $e) {
            return "No se ha podido establecer contacto con la base de datos";
        }
    }

    protected function delete($id) {
        try {
            $query = $this->conn->prepare("
	        DELETE 
	        FROM $this->table
	        WHERE {$this->id} = :id
	      ");
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            return $query->execute();
        } catch (Exception $e) {
            return "No se ha podido establecer contacto con la base de datos";
        }
    }
 * 
 */
}

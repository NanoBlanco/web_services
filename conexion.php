<?php
  /**
  * Inicializa conexion
  */
  define('HOST', 'localhost');
  define('DB_NAME','test');
  define('PASS','');
  define('USER','root');

    try {
        $db = new pdo('mysql:host='. HOST .';dbname='. DB_NAME .';charset=utf8',USER,PASS,array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES => false));
    } catch (PDOException $e) {
      $this->db = 'Error en la conexion';
      echo 'Error: ' . $e->getMessage();
    }
  
<?php

  class Database {
    private $host = DB_HOST_DEFAULT, $username = DB_USERNAME_DEFAULT, $password = DB_PASSWORD_DEFAULT, $database = DB_NAME_DEFAULT, $queryResult = null, $queryAffectedRows = null;

    public static $instance;

    private function __construct(String $host = null, String $username = null, String $password = null, String $database = null) {
      $this->host = isset($host) && $host ? $host : $this->host;
      $this->username = isset($username) && $username ? $username : $this->username;
      $this->password = isset($password) && $password ? $password : $this->password;
      $this->database = isset($database) && $database ? $database : $this->database;
    }

    public static function getInstance(String $host = null, String $username = null, String $password = null, String $database = null) {
      if(!self::$instance) {
        self::$instance = new self($host, $username, $password, $database);
      }

      return self::$instance;
    }

    public function getHost() {
      return $this->host;
    }

    public function setHost(String $host) {
      $this->host = $host;
    }

    public function getUsername() {
      return $this->username;
    }

    public function setUsername(String $username) {
      $this->username = $username;
    }

    public function getPassword() {
      return $this->password;
    }

    public function setPassword(String $password) {
      $this->password = $password;
    }

    public function getDatabase() {
      return $this->database;
    }

    public function setDatabase(String $database) {
      $this->database = $database;
    }

    public function executeQuery(Query $query) {
      $connection = new mysqli($this->host, $this->username, $this->password, $this->database);

      $connection->close();

      return $this;
    }

    public function getQueryResult() {
      return $this->queryResult;
    }

    public function getQueryAffectedRows() {
      return $this->queryAffectedRows;
    }
  }
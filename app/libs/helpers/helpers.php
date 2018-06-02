<?php

  function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';

    die();
  }

  function db() {
    return Database::getInstance();
  }

  function query() {
    return new Query();
  }
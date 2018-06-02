<?php

  class Home extends Controller {
    public function __construct(String $controller, String $method) {
      parent::__construct((String) $controller, (String) $method);
    }

    public function index($name) {
      $this->getView()->render('home/index');
    }
  }
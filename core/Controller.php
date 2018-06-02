<?php

  class Controller extends Application {
    public function __construct() {
      parent::__construct();
    }

    public function renderViewWithData(String $view, array $data) {
      return $this->getView($view)->render((array) $data);
    }

    public function renderView(String $view) {
      return $this->getView($view)->render();
    }

    protected function getView(String $view) {
      return new View($view);
    }
  }
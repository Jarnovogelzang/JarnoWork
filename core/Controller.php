<?php

    class Controller extends Application {
        private $controller, $method, $view;

        public function __construct(String $controller, String $method) {
            parent::__construct();

            $this->controller = $controller;
            $this->method = $method;
            $this->view = new View();
        }

        protected function getController() {
            return $this->controller;
        }

        protected function getMethod() {
            return $this->method;
        }

        protected function getView() {
            return $this->view;
        }
    }
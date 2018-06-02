<?php

  class Application {
    public function __construct() {
      $this->setReporting();
      $this->unregisterGlobals();
    }

    private function setReporting() {
      if(DEBUG) {
        error_reporting(E_ALL);
        ini_set('display_errors', true);
      } else {
        error_reporting(0);
        ini_set('display_errors', false);
        ini_set('log_errors', true);
        ini_set('error_log', ROOT . DS . 'tmp' . DS . 'logs' . DS . 'errors.log');
      }
    }

    private function unregisterGlobals() {
      if(ini_get('register_globals')) {
        $globals = [
          '_SESSION', 
          '_COOKIE', 
          '_POST', 
          '_GET', 
          'REQUEST',
          '_SERVER', 
          '_ENV', 
          '_FILES'
        ];

        foreach($globals as $global) {
          foreach($GLOBALS[$global] as $key => $value) {
            if($GLOBALS[$key] === $value) {
              unset($GLOBALS[$key]);
            }
          }
        }
      }
    }
  }
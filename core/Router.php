<?php

  class Router {
    public static function route(array $url) {
      // Controller
      $controller = (isset($url[0]) && $url[0] && !empty($url[0])) ? ucwords($url[0]) : DEFAULT_CONTROLLER;
      array_shift($url);

      // Method
      $method = (isset($url[0]) && $url[0] && !empty($url[0])) ? ucwords($url[0]) : DEFAULT_METHOD;
      array_shift($url);

      // Query parameters
      $data = $url;

      // Dispatch
      $dispatch = new $controller();

      if(method_exists($controller, $method)) {
        call_user_func_array([
          $dispatch, 
          $method
        ], [
          $data
        ]);
      } else {
        dd('That method does not exist in the controller \"' . $controller . '"');
      }
    }
  }
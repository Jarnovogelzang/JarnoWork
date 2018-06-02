<?php

  class View {
    private $view, $head, $body, $siteTitle = DEFAULT_SITE_TITLE, $outputBuffer, $layout = DEFAULT_LAYOUT;

    public function __construct(String $view) {
      $this->view = $view;
    }

    public function render(array $data = null) {
      $viewArray = explode('/', $this->view);
      $viewString = implode(DS, $viewArray);

      if(file_exists(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php')) {
        if($data && !empty($data) && count($data) !== 0) {
          foreach($data as $key => $value) {
            ${$key} = $value; 
          }
        }

        include(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php');
        //include(ROOT . DS . 'app' . DS . 'views' . DS . 'layouts' . DS . $this->layout . '.php');
      } else {
        dd('The view \"' . $this->view . '" does not exist.');
      }
    }

    public function content(String $type) {
      switch($type) {
        case 'head':
          return (String) $this->head;
        case 'body':
          return (String) $this->body;
        default:
          return false;
      }
    }

    public function start(String $type) {
      $this->outputBuffer = (String) $type;
      ob_start();
    }

    public function end() {
      switch($this->outputBuffer) {
        case 'head':
          $this->head = ob_get_clean();
          break;
        case 'body':
          $this->body = ob_get_clean();
          break;
        default:
          dd('You must first run the start method.');
      }
    }

    public function getSiteTitle() {
      return (String) $this->siteTitle;
    }

    public function setSiteTitle(String $siteTitle) {
      $this->siteTitle = (String) $siteTitle;
    }

    public function setlayout(String $path) {
      $this->layout = (String) $path;
    }
  }
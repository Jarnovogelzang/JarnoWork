<?php

    class View {
        private $head, $body, $siteTitle = DEFAULT_SITE_TITLE, $outputBuffer, $layout = DEFAULT_LAYOUT;

        public function __construct() {

        }

        public function render($viewName) {
            $viewArray = explode('/', $viewName);
            $viewString = implode(DS, $viewArray);

            if(file_exists(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php')) {
                include(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php');
                //include(ROOT . DS . 'app' . DS . 'views' . DS . 'layouts' . DS . $this->layout . '.php');
            } else {
                dd('The view \"' . $viewName . '" does not exist.');
            }
        }

        public function content($type) {
            switch($type) {
                case 'head':
                    return $this->head;
                case 'body':
                    return $this->body;
                default:
                    return false;
            }
        }

        public function start($type) {
            $this->outputBuffer = $type;
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
            return $this->siteTitle;
        }

        public function setSiteTitle(String $siteTitle) {
            $this->siteTitle = $siteTitle;
        }

        public function setlayout(String $path) {
            $this->layout = $path;
        }
    }
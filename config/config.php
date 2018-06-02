<?php

  define('DEFAULT_CONTROLLER', 'Home'); // Default controller if there isn't one defined in the url
  define('DEFAULT_METHOD', 'index'); // Default method if there isn't one defined in the url

  define('DEBUG', true); // Debugging
  define('SERVER_ROOT', ''); // The server root

  define('DEFAULT_LAYOUT', 'default'); // Default layout if no layout is set in the controller
  define('DEFAULT_SITE_TITLE', 'Jarno MVC Framework'); // Default site title if no site title is present

  define('DB_HOST_DEFAULT', '127.0.0.1'); // Default host if no host is present
  define('DB_USERNAME_DEFAULT', 'root'); // Default username if no username is present
  define('DB_PASSWORD_DEFAULT', 'secret'); // Default password if no password is present
  define('DB_NAME_DEFAULT', 'home'); // Default name if no name is present
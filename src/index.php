<?php //Використовуємо тыльки <?php та <?= теги
//Тільки UTF-8 без BOM для php коду
//Не Робити різний функціонал в одному файлі (1 файл = 1 клас)
//Класи оголошуються в `StudlyCase`
//Константи оголошуються в ТАКОМУ_ВИГЛЯДІ
//Методи оголошуються в `camelCase`
session_start();


define('APP_URL', 'http://localhost:8080/');
define('APP_DIR', __DIR__ . '/');
define('CONTROLLER_DIR', APP_DIR . 'app/controllers/');


define('DB_HOST', 'mysql');
define('DB_PORT', '3306');
define('DB_CHARSET', 'utf8');
define('DB_NAME', 'hillel');
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');


require_once APP_DIR . 'app/system/database/Connector.php';
require_once APP_DIR . 'app/system/Session.php';
require_once APP_DIR . 'app/system/Request.php';
require_once APP_DIR . 'app/system/Enums/HttpMethod.php';
require_once APP_DIR . 'app/system/Router/Router.php';
require_once APP_DIR . 'app/system/Router/routes.php';
require_once APP_DIR . 'app/system/Functions.php';
require_once APP_DIR . 'app/system/Validator.php';
require_once APP_DIR . 'app/system/Response.php';


Router::process(HttpMethod::from(Request::method()), Request::url());
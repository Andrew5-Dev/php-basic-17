<?php

Router::get('/', ['HomeController', 'home']);
Router::post('/', ['HomeController', 'sumTwoNumbers']);
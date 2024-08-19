<?php

use hw\hw14\ParentText;
use hw\hw14\Text;

require_once __DIR__ . '/ParentText.php';
require_once __DIR__ . '/Text.php';

$firstText = 'some text';

try {

$text = new ParentText($firstText);

$text->print();

$text = new Text ($firstText);

    $text->print();

} catch (Exception $e) {
    echo $e->getMessage();
}


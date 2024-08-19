<?php

namespace hw\hw14;

class Text extends ParentText
{

    public function print(): void
    {
        $this->text = strtoupper ($this->getText());
        echo $this->text . PHP_EOL;
    }
}
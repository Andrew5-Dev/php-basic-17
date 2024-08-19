<?php

namespace hw\hw14;

use Exception;

class ParentText
{
    protected string $text;

    public function __construct(string $text)
    {
        $this->setText($text);
    }


    /**
     * @param string $text
     * @throws Exception
     */
    public function setText(string $text): void
    {
        $this->validateText($text);
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    private function validateText(string $text): void
    {
        if (strlen($text) < 9) {
            throw new Exception('Занадто короткий текст. Спробуйте ще.' . PHP_EOL);
        }
    }

    /**
     * @return void
     */
    public function print(): void
    {


        $this->text = ucfirst($this->getText());
        echo $this->text . PHP_EOL;
    }


}
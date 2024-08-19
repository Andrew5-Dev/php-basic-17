<?php

trait Validator
{
    protected array $errors = [];
    protected function validate(array $data, array $rules)
    {
        foreach ($rules as $field => $ruleArray) {
            foreach ($ruleArray as $rule) {

                // required check
                if ($rule === 'moreThanZeroRule') {
                    if ($this->moreThanZeroRule($field, $data) === false) {
                        $this->errors[$field][] = $this->getErrorMessage($rule, $field);
                    }
            }
        }
    }}


    protected function minRule(string $field, int $number, array $data): bool
    {
        if (!isset($data[$field]) || strlen($data[$field]) < $number) {
            return false;
        }
        return true;
    }

    protected function requiredRule(string $field, array $data): bool
    {
        if (empty($data[$field])) {
            return false;
        }
        return true;
    }

    protected function moreThanZeroRule(string $field, array $data): bool
    {
        if (!isset($data[$field]) || $data[$field] <= 0) {
            return false;
        }
        return true;
    }

    protected function errors(): array
    {
        return [
            'moreThanZeroRule' => "Поле %s повинно бути більше нуля",
        ];
    }

    protected function getErrorMessage(string $rule, ...$fields): string
    {
        $errorsText = $this->errors();
        return sprintf($errorsText[$rule], ...$fields);
    }
}
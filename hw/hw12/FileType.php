<?php

namespace hw\hw12;
enum FileType: string
{
    case TXT = 'txt';
    case DOC = 'doc';
    case DOCX = 'docx';

    public static function values(): array
    {
        $cases = self::cases();
        $values = [];
        foreach ($cases as $case) {
            $values[] = $case->value;
        }

        return $values;
    }
}
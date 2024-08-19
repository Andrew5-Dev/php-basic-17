<?php


/**
 * @param string $filename
 * @param array $line
 * @param bool $append
 * @return bool
 */
function write(string $filename, array $line, bool $append = false): bool
{
    return (bool)file_put_contents($filename, $line, $append ? FILE_APPEND : 0);
}

function arguments($file = 'db.txt'): array|false
{
    if (file_exists('../' . $file)) {
        return false;
    }
    return file($file);
}

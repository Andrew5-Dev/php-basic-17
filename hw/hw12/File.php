<?php

namespace hw\hw12;

use Exception;

class File
{
    private string $path;

    public function __construct(string $path)
    {
        $this->setPath($path);
    }

    /**
     * @param string $path
     * @return void
     * @throws Exception
     */
    public function setPath(string $path): void
    {
        if (!file_exists($path)) {
            throw new Exception("File path does not exist", 422);
        }

        $this->validatePath($path);

        $this->path = $path;
    }

    private function validatePath(string $path): void
    {
        $extensions = FileType::values();
        $extension = $this->getPathExtension($path);
        if (!in_array($extension, $extensions)) {
            throw new Exception("Invalid extension");
        }
    }

    private function getPathExtension(string $path): string
    {
        return pathinfo($path, PATHINFO_EXTENSION);
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $content
     * @param bool $append
     * @return void
     * @throws Exception
     */
    public function write(string $content, bool $append = true): void
    {
        $result = file_put_contents($this->getPath(), $content, $append ? FILE_APPEND : 0);
        if ($result === false) {
            throw new Exception("Cannot write to file");
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getLines(): array
    {
        $lines = file($this->getPath());
        if ($lines === false) {
            throw new Exception("Cannot get content from file");
        }

        return $lines;
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getLastLine(): string
    {
        $lines = $this->getLines();

        return end($lines);
    }

    public function cleanFile()
    {

        $file = fopen($this->getPath(), 'w');
        fclose($file);

    }
}
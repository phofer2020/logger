<?php
namespace\Phofer2020\Logger;

class FillLoger implements \Phofer2020\Logger\ILogger
{
    private $handle = null;

    public function __construct(string $filename)
    {
      $this->handle = fopen($filename, 'a');
    }

    public function logEntry(string $line): void
    {
        fwrite($this->handle,$line."\n");
    }

    public function __destruct()
    {
       fclose($this->handle);
    }
}
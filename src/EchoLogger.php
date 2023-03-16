<?php
namespace Phofer2020\Logger;;

class EchoLogger implements ILogger {

    public function logEntry(string $line): void
    {
        echo $line . "\n";
    }
}
<?php
namespace Phofer2020\Logger;

interface ILogger {
    public function logEntry(string $line): void;

}
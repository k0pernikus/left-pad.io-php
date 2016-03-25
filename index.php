<?php
use Kopernikus\LeftPad;
use Kopernikus\LeftPadIo\LeftPadIoFetcher;

require_once __DIR__ .'/vendor/autoload.php';
echo (new LeftPad(new LeftPadIoFetcher()))
    ->pad("Horst", '@', 6);
// echoes "@Horst"

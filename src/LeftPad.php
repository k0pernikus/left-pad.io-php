<?php
namespace Kopernikus;

use Kopernikus\LeftPadIo\LeftPadIoFetcher;

/**
 * LeftPad
 **/
class LeftPad
{
    /**
     * @var LeftPadIoFetcher
     */
    private $fetcher;

    /**
     * Pad constructor.
     * @param LeftPadIoFetcher $fetcher
     */
    public function __construct(LeftPadIoFetcher $fetcher)
    {
        $this->fetcher = $fetcher;
    }

    /**
     * @param $string
     * @param $char
     * @param $amount
     */
    public function pad($string, $char, $amount)
    {
        return $this->fetcher->fetch($string, $char, $amount);
    }
}

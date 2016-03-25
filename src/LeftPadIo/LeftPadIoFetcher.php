<?php
namespace Kopernikus\LeftPadIo;

use Kopernikus\LeftPadIo\Exception\NoStringReturnedException;

class LeftPadIoFetcher
{
    public static $LEFT_PAD_IO_URL = 'https://api.left-pad.io';

    /**
     * @param string $string
     * @param int    $paddingAmount
     * @return string
     */
    public function fetch($string = 'oswald', $character = '@', $paddingAmount = 13)
    {
        $url = static::$LEFT_PAD_IO_URL . "/?str={$string}&len={$paddingAmount}&ch={$character}";
        $response = file_get_contents($url);

        $response = json_decode($response);

        if (!isset($response->str)) {
            throw new NoStringReturnedException();
        }

        return $response->str;
    }
}

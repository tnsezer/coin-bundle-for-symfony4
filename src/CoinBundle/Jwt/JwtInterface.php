<?php


namespace App\CoinBundle\Jwt;

interface JwtInterface
{
    /**
     * @return string
     */
    public function generateToken($coin);

    /**
     * @return string
     */
    public function loadedToken($hash);

}

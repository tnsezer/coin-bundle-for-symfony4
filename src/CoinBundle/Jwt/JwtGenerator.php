<?php

namespace App\CoinBundle\Jwt;

use Namshi\JOSE\SimpleJWS;

class JwtGenerator implements JwtInterface
{
    /**
    * {@inheritdoc}
    */
    public function generateToken($coin)
    {
        $jws  = new SimpleJWS(array(
            'alg' => 'RS256'
        ));

        $jws->setPayload(array(
            'coin' => $coin,
        ));

        return $jws->getTokenString();
    }

    /**
     * {@inheritdoc}
     */
    public function loadedToken($hash)
    {
        try {
            $jws = SimpleJWS::load($hash);
            $payload = $jws->getPayload();
        }catch (\Exception $e){
            $payload = ['error' => 'token is not valid'];
        }

        return $payload;
    }
}

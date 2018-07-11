<?php

namespace App\CoinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use App\CoinBundle\Jwt\JwtGenerator;
use App\CoinBundle\Logger\Logger;

class CoinController extends Controller
{

    private $logger;
    private $jwt;

    public function __construct()
    {
        $this->jwt = new JwtGenerator();
        $this->logger = new Logger();
    }
    /**
     * @Route("/coin/create")
     */
    public function createAction(Request $request){
        $coin = mt_rand(1, 100);


        $encodeData = $this->jwt->generateToken($coin);

        $userId = $this->getUser()->getId();

        $this->logger->log($userId."-".$coin.":".$encodeData);

        return $this->json($encodeData);
    }

    /**
     * @Route("/coin/check")
     */
    public function checkAction(Request $request){
        $hash = $request->get('hash');
        if($hash == null){
            $payload = ['error' => 'token cannot empty'];
        }else {

            try {
                $payload = $this->jwt->loadedToken($hash);

                $userId = $this->getUser()->getId();

                $this->logger->log($userId."-".json_encode($payload).":".$hash);
            }catch (\Exception $e){
                $payload = ['error' => 'token is not valid'];
            }
        }

        return $this->json($payload);
    }
}

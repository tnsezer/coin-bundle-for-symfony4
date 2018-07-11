<?php
// src/AppBundle/Entity/User.php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="decimal", scale=10, nullable=false)
     */
    protected $coin = 0.00;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getCoin(){
        return $this->coin;
    }

    public  function  setCoin(float $coin){
        $this->coin = $coin;
    }
}
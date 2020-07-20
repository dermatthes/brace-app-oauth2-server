<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 20.07.20
 * Time: 16:23
 */

namespace Brace\App\OAuth2\DAL;


use Brace\App\OAuth2\Entity\Client;

interface ClientDAO
{


    public function getClientById(string $clientId) : Client;



}
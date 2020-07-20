<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 20.07.20
 * Time: 16:25
 */

namespace Brace\App\OAuth2\DAL;


use Brace\App\OAuth2\Entity\ResourceOwner;

interface ResourceOwnerDAO
{

    public function getResourceOwnerById(string $uid) : ResourceOwner;

    public function findResourceOwnerByLogin (string $login) : ResourceOwner;

    public function createResourceOwner(string $username=null, string $email=null) : ResourceOwner;

    public function updateResourceOwner(ResourceOwner $resourceOwner, array $fieldsToUpdate=[]) : ResourceOwner;





}
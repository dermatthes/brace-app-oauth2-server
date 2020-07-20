<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 20.07.20
 * Time: 16:30
 */

namespace Brace\App\OAuth2\DAL;


use Brace\App\OAuth2\Entity\Organization;
use Brace\App\OAuth2\Entity\ResourceOwner;

interface OrganizationDAO
{


    public function getOrganizationById(string $orgId) : Organization;


    public function getOrganizationsForRo(ResourceOwner $resourceOwner) : array;

    public function addRoToOrganization(Organization $organization, ResourceOwner $resourceOwner, );

    public function removeRoFromOrganization(Organization $organization, ResourceOwner $resourceOwner);


}
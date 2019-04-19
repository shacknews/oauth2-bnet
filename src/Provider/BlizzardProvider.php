<?php

namespace Depotwarehouse\OAuth2\Client\Provider;

use Depotwarehouse\OAuth2\Client\Entity\BlizzardUser;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Token\AccessToken;

class BlizzardProvider extends BattleNet
{

    protected $game = "sc2";

    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return "https://{$this->region}.battle.net/oauth/userinfo?access_token={$token}";
    }

    protected function createResourceOwner(array $response, AccessToken $token)
    {
        $response = (array)($response);

        $user = new BlizzardUser($response, $this->region);

        return $user;
    }


}

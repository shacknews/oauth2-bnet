<?php

namespace Depotwarehouse\OAuth2\Client\Provider;

use Depotwarehouse\OAuth2\Client\Entity\SC2User;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Token\AccessToken;

class BlizzardProfile extends BattleNet
{

    protected $game = "sc2";

    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return "https://{$this->region}.api.blizzard.com/oauth/userinfo?access_token={$token}";
    }

    protected function createResourceOwner(array $response, AccessToken $token)
    {
        $response = (array)($response);

        $user = new SC2User($response, $this->region);

        return $user;
    }


}

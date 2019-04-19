<?php

namespace Depotwarehouse\OAuth2\Client\Entity;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class BlizzardUser implements ResourceOwnerInterface
{
    public function __construct(array $attributes, $region)
    {
        $this->id = $attributes['id'];

    }

    public function toArray()
    {
        return $attributes;
    }

    public function getEmail() {
      return null;
    }

    public function getId()
    {
        return $this->id;
    }
}

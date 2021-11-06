<?php

class VKManager extends SocialManager
{

    public function createSocialNetwork(): SocialNetwork
    {
        return new VK();
    }
}
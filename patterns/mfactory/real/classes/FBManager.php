<?php

class FBManager extends SocialManager
{

    public function createSocialNetwork(): SocialNetwork
    {
        return new FB();
    }
}
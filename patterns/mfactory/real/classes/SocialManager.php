<?php

abstract class SocialManager
{
    abstract public function createSocialNetwork() : SocialNetwork;

    public function createPost($subject, $message) {
        $socialNetwork = $this->createSocialNetwork();

        echo $socialNetwork->networkName();
        echo "<br/>" . $subject . " для " . $socialNetwork->networkName(). "<br/>";
        echo $message;
    }
}
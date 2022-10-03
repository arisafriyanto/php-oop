<?php

class SocialMedia
{
    public string $name;
}

// final class dengan keyword final
class Facebook extends SocialMedia
{
    // final function
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

// error
class FakeFacebook extends Facebook
{
    // error
    public function login(string $username, string $password): bool
    {
        return false;
    }
}

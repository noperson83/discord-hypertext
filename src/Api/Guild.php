<?php
namespace Discord\Api;

use Discord\Api\Guild\Bans;
use Discord\Api\Guild\Invite;
use Discord\Api\Guild\Member;
use Discord\Api\Guild\Role;

class Guild extends AbstractApi
{
    private function setIcon($id, $icon)
    {
        return 'https://discordapp.com/api/guilds/'.$id.'/icons/'.$icon.'.jpg';
    }

    public function show($guildId)
    {
        return $this->request('GET', 'guilds/'.$guildId, [
            'headers' => [
                'authorization' => $this->token
                ]
            ]);
    }

    public function roles()
    {
        return new Role($this->client);
    }

    public function members()
    {
        return new Member($this->client);
    }

    public function bans()
    {
        return new Bans($this->client);
    }

    public function invites()
    {
        return new Invite($this->client);
    }
}
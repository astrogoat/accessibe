<?php

namespace Astrogoat\Accessibe\Settings;

use Helix\Lego\Settings\AppSettings;
use Astrogoat\Accessibe\Actions\AccessibeAction;

class AccessibeSettings extends AppSettings
{
    public string $url;
    // public string $access_token;

    protected array $rules = [
        'url' => ['required', 'url'],
        // 'access_token' => ['required'],
    ];
    
    public function description(): string
    {
        return 'Interact with Accessibe.';
    }
}

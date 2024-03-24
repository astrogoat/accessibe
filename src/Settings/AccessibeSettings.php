<?php

namespace Astrogoat\Accessibe\Settings;

use Helix\Lego\Settings\AppSettings;

class AccessibeSettings extends AppSettings
{
    public string $url;

    protected array $rules = [
        'url' => ['required', 'url'],
    ];

    public function description(): string
    {
        return 'Interact with Accessibe.';
    }
}

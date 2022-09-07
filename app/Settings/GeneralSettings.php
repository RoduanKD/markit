<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $site_name;

    public bool $site_active;

    public string $color;

    public string $locale;

    public string $email;

    public string $link;

    public string $contact_info;

    public string $delivery_policy;

    public string $condition;

    public static function group(): string
    {
        return 'general';
    }
}

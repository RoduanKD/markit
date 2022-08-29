<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'MARKIT');
        $this->migrator->add('general.site_active', true);
        $this->migrator->add('general.timezone', 'Asia');
        $this->migrator->add('general.color', '#FFFFFF');
        $this->migrator->add('general.locale', 'en');
        $this->migrator->add('general.email', 'info@markit.test');
        $this->migrator->add('general.link', 'http://markit.test');
        $this->migrator->add('general.contact_info', 'info@markit.test');
        $this->migrator->add('general.delivery_policy', 'delivery policy');
        $this->migrator->add('general.condition', 'condition');
    }
}

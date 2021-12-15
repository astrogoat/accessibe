<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateAccessibeSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('accessibe.enabled', false);
        $this->migrator->add('accessibe.url', 'https://acsbapp.com/apps/app/dist/js/app.js');
    }

    public function down()
    {
        $this->migrator->delete('accessibe.enabled');
        $this->migrator->delete('accessibe.url');
    }
}

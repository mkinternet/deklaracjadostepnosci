<?php namespace Mkinternet\Deklaracjadostepnosci\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'mkinternet_deklaracjadostepnosci_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
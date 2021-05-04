<?php namespace Codecycler\FreddyFeedback\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'codecycler_freddyfeedback_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
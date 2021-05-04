<?php namespace Codecycler\FreddyFeedback;

use Backend;
use System\Classes\PluginBase;
use Codecycler\FreddyFeedback\Classes\WidgetManager;

/**
 * Freddy Feedback Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Freddy Feedback',
            'description' => 'Freddy Feedback integration for October CMS',
            'author'      => 'Codecycler',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Codecycler\FreddyFeedback\Components\Widget' => 'ffWidget',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'codecycler.freddyfeedback.manage_settings' => [
                'tab' => 'Freddy Feedback',
                'label' => 'Manage settings'
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'ff' => [
                'label'       => 'Freddy Feedback',
                'description' => 'Manage Freddy Feedback settings.',
                'category'    => 'system::lang.system.categories.logs',
                'icon'        => 'icon-smile-o',
                'class'       => 'Codecycler\FreddyFeedback\Models\Settings',
                'order'       => 1500,
                'keywords'    => 'freddy feedback surveys widget',
                'permissions' => ['codecycler.freddyfeedback.manage_settings']
            ]
        ];
    }

    public function boot()
    {
        WidgetManager::instance()
            ->bind();
    }
}

<?php namespace Codecycler\FreddyFeedback\Classes;

use Event;
use Backend\Classes\Controller;
use October\Rain\Support\Traits\Singleton;
use Codecycler\FreddyFeedback\Models\Settings;

class WidgetManager
{
    use Singleton;

    public function bind()
    {
        if (!$this->enabled()) {
            return;
        }

        Event::listen('backend.page.beforeDisplay', function (Controller $controller) {
            $controller->addJs('/freddyfeedback/script.js?widgetId=' . $this->getWidgetId());
        });
    }
    
    public function enabled()
    {
        return Settings::get('use_on_backend', false);
    }

    public function getWidgetId()
    {
        return Settings::get('widget_id');
    }
}
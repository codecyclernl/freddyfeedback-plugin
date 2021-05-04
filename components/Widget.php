<?php namespace Codecycler\FreddyFeedback\Components;

use Cms\Classes\ComponentBase;

class Widget extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Freddy Feedback widget',
            'description' => 'Integrate a widget'
        ];
    }

    public function defineProperties()
    {
        return [
            'ffWidgetId' => [
                'title'             => 'Widget ID',
                'description'       => 'Survey -> Settings -> Advanced',
                'type'              => 'text',
            ],
        ];
    }

    public function onRun()
    {
        $this->addJs('/freddyfeedback/script.js?widgetId=' . $this->property('ffWidgetId'));
    }
}

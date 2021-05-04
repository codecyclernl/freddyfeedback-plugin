<?php

Route::get('/freddyfeedback/script.js', function () {
    //
    if (!input('widgetId')) {
        return response('You must supply a widget id', 404);
    }

    //
    $script = file_get_contents(plugins_path('codecycler/freddyfeedback/assets/script.js'));

    //
    $parser = new \October\Rain\Parse\Bracket();
    $output = $parser->parse($script, [
        'widgetId' => input('widgetId'),
    ]);

    return response($output)->header('Content-Type', 'application/javascript');
});

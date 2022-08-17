<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\Text;

class TextWithLink extends ArticleSectionLayout
{
    /**
    * The layout's unique identifier
    *
    * @var string
    */
    protected $name = 'text-with-image';

    /**
    * The displayed title
    *
    * @var string
    */
    protected $title = 'Text With Link';

    /**
    * Get the fields displayed by the layout.
    *
    * @return array
    */
    public function fields()
    {
        $request = request();

        return [
            Text::make('Title'),
            Code::make('Body'),
            Text::make('Caption'),
            Text::make('Link')->rules(['url', 'nullable']),
        ];
    }
}

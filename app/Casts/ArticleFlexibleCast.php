<?php

namespace App\Casts;

use App\Nova\Flexible\Layouts\TextWithLink;
use Whitecube\NovaFlexibleContent\Value\FlexibleCast;

class ArticleFlexibleCast extends FlexibleCast
{
    protected $layouts = [

        'text-with-image' => TextWithLink::class,

    ];
}

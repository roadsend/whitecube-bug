<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;

abstract class ArticleSectionLayout extends Layout
{
    public function getSlugAttribute()
    {
        return str($this->attributes['title'])->slug() ?? null;
    }
}

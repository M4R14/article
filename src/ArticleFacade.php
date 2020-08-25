<?php

namespace M4R14\Article;

use Illuminate\Support\Facades\Facade;

/**
 * @see \M4R14\Article\Skeleton\SkeletonClass
 */
class ArticleFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'article';
    }
}

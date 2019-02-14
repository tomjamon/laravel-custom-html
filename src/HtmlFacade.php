<?php

namespace TomJamon\TailwindLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * Class HtmlFacade
 * @package TomJamon\TailwindLaravel
 */
class HtmlFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'html';
    }
}

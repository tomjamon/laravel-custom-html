<?php

namespace TomJamon\Html;

use Illuminate\Support\Facades\Facade;

/**
 * Class HtmlFacade
 * @package TomJamon\Html
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

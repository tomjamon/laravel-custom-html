<?php

namespace TomJamon\Html;

use Illuminate\Support\Facades\Facade;

/**
 * Class FormFacade
 * @package TomJamon\Html
 */
class FormFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'form';
    }
}

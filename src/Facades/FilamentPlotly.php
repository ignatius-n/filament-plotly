<?php

namespace Asharif88\FilamentPlotly\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Asharif88\FilamentPlotly\FilamentPlotly
 */
class FilamentPlotly extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Asharif88\FilamentPlotly\FilamentPlotly::class;
    }
}

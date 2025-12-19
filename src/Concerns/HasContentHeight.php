<?php

namespace Asharif88\FilamentPlotly\Concerns;

trait HasContentHeight
{
    protected static int $contentHeight = 400;

    /**
     * Retrieves the height of the content.
     *
     * @return ?int The height of the content or null if it has not been set.
     */
    protected function getContentHeight(): ?int
    {
        return static::$contentHeight;
    }
}

<?php

declare(strict_types=1);

use Jphat\Fakerer\Facades\Fakerer;

if (! function_exists('fakerer')) {
    /**
     * Get an instance of the Fakerer class.
     *
     * @return \Jphat\Fakerer\Fakerer
     */
    function fakerer()
    {
        return app(\Jphat\Fakerer\Fakerer::class);
    }
}

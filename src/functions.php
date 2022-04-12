<?php

use Bvtterfly\Cycler\Cycler;

if (! function_exists('cycler')) {
    function cycler(...$items)
    {
        return new Cycler($items);
    }
}

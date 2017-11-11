<?php

use Carbon\Carbon;

if (!function_exists('parse_timestamp')) {
    function parse_timestamp($timestamp)
    {
        if ((int) $timestamp == 0) {
            return "N/A";
        }

        return Carbon::createFromTimestamp((int) $timestamp)->format('d/m/Y h:i:s');
    }
}

<?php

if (!function_exists('currency_format')) {
    function currency_format($value)
    {
        // Check if $value is not null and is numeric or a string
        if ($value !== null && (is_numeric($value) || is_string($value))) {
            // Convert $value to a float or integer if it's a string
            $value = is_numeric($value) ? $value : (float) str_replace(',', '.', str_replace('.', '', $value));

            // Return the formatted number
            return number_format($value, 0, ',', '.');
        }

        // Return 0 or a default value if $value is null or not valid
        return '0';
    }
}

if (!function_exists('currency_convert')) {
    function currency_convert($value)
    {
        return preg_replace('/[^0-9\.]/', '', $value);
    }
}

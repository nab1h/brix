<?php

if (!function_exists('highlightWord')) {
    function highlightWord($text, $position = -2, $class = 'text-terracotta')
    {
        $words = explode(' ', $text);

        if (abs($position) > count($words)) {
            return $text;
        }

        $index = $position < 0
            ? count($words) + $position
            : $position;

        $words[$index] = '<span class="' . $class . '">' . $words[$index] . '</span>';

        return implode(' ', $words);
    }
}

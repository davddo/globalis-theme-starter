<?php
namespace Globalis\Templating;

function get_loop_count($template, $inc = true)
{
    static $counts;
    if (!isset($counts)) {
        $counts = [];
    }
    if (!isset($counts[$template])) {
        $counts[$template] = 0;
    }

    if ($inc) {
        $counts[$template]++;
    }

    return $counts[$template];
}

<?php
// helpers.php
if (!function_exists('limit_words')) {
    function limit_words($string, $word_limit) {
        $words = explode(' ', $string, $word_limit + 1);

        if (count($words) > $word_limit) {
            array_pop($words);
            return implode(' ', $words) . '...';
        }

        return implode(' ', $words);
    }
}
?>
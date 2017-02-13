<?php

 if (!function_exists('getRusDate')) {
    function getRusDate($dateTime, $format = '%DAYWEEK%, d %MONTH% Y H:i', $offset = 0)
    {
        if (!is_string($dateTime)) {
            throw new \Exception('Incorrect datetime');
        }

        $monthArray = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
        $daysArray = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');

        $timestamp = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dateTime)->timestamp;
        $timestamp += 3600 * $offset;

        $findArray = array('/%MONTH%/i', '/%DAYWEEK%/i');
        $replaceArray = array($monthArray[date("m", $timestamp) - 1], $daysArray[date("N", $timestamp) - 1]);
        $format = preg_replace($findArray, $replaceArray, $format);

        return date($format, $timestamp);
    }
}

if (!function_exists('uploads_path')) {
    function uploads_path()
    {
        return storage_path('app.uploads');
    }
}
/*
function add2numbers($a, $b)
{
    return $a + $b;
}



assert(add2numbers(2,2) == 4);
assert(add2numbers('',false) == 4);

*/


UNIT tests
Functional tests
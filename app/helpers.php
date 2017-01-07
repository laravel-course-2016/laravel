<?php
/**
 * Created by PhpStorm.
 * User: CoolKid
 * Date: 07.01.2017
 * Time: 5:28
 */

function getRusDate($dateTime, $format = '%DAYWEEK%, d %MONTH% Y', $offset = 0)
{
    $monthArray = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
    $daysArray = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');

    $timestamp = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dateTime)->timestamp;
    $timestamp += 3600 * $offset;

    $findArray = array('/%MONTH%/i', '/%DAYWEEK%/i');
    $replaceArray = array($monthArray[date("m", $timestamp) - 1], $daysArray[date("N", $timestamp) - 1]);
    $format = preg_replace($findArray, $replaceArray, $format);

    return date($format, $timestamp);
}
<?php
# set time zone - check php.net/manual/en/function.date.php
date_default_timezone_set('America/chicago');

//echo date('d'); //returns day
//echo date('m'); //returns month
//echo date('Y'); //returns year
//echo date('l'); //returns day of the week
//echo date('Y/m/d'); //returns year/month/day


//echo date('h'); //returns hour
//echo date('i'); //returns minutes
//echo date('s'); //returns seconds
//echo date('a'); //returns AM / PM
//echo date('h:i:sa'); //returns hour:minutes:seconds AM/PM

$timestamp = mktime(16, 30, 25, 12, 26, 1973);
//echo date('d/m/Y h:i:s a', $timestamp);

$timestamp2 = strtotime('7:00pm May 06 2011');
//echo $timestamp2;
//echo date('m/d/Y h:i:s a', $timestamp2);

$timestamp3 = strtotime('tomorrow');
//echo $timestamp3;
//echo date('m/d/Y h:i:s a', $timestamp3);

$timestamp4 = strtotime('next sunday');
//echo date('m/d/Y h:i:s a', $timestamp4);

$timestamp5 = strtotime('+2 months'); // could be +2 days, +3 years, ...
echo date('m/d/Y h:i:s a', $timestamp5);
<?php
/**
 * Created by PhpStorm.
 * User: dudu
 * Date: 06/04/17
 * Time: 08:50
 */

///todo: create a class to work with date comparissons

$today = date("d/m/y");
echo $today."<br>";
$tomorrow = date('Y-m-d', strtotime($today. ' + 1 days'));
$yesterday = date('Y-m-d', strtotime($today. ' - 1 days'));

if(strtotime($today) < strtotime($tomorrow)) echo "hoje não é maior que amanhã<br>";
echo 'y='.strtotime($yesterday)." : ".'t='.strtotime($tomorrow)."<br>";
if(strtotime($yesterday) < strtotime($tomorrow)) echo "ontem é menor que amanhã<br>";
//
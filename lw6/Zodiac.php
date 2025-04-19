<?php
declare(strict_types=1);

$text = $_GET['year']; //form DayMonthYear
//январь 0, февраль 1, март 2, апрель 3, май 4, июнь 5, июль 6, август 7, 
// сентябрь 8, октябрь 9, ноябрь 10, декабрь 11
function WhichZodiac(int $dayInMonth, int $month) : void{
    int $day = $dayInMonth + $month * 31;
    if ($day <= 20 || $day >= 22 + 11 * 31) echo('Козерог')// с 22 декабря по 20 января
    elseif($day <= 18 + 31) echo('Водолей')// до 18 фераля
    elseif($day <= 20 + 2 * 31) echo('Рыбы')// до 20 марта
    elseif($day <= 18 + 3 * 31) echo('Овен')// до 20 апреля
    elseif($day <= 18 + 4 * 31) echo('Телец')// до 20 мая
    elseif($day <= 18 + 5 * 31) echo('Близнецы')// до 21 июня
    elseif($day <= 18 + 6 * 31) echo('Рак')// до 22 июля
    elseif($day <= 18 + 7 * 31) echo('Лев')// до 22 августа
    elseif($day <= 18 + 8 * 31) echo('Дева')// до 23 сентября
    elseif($day <= 18 + 9 * 31) echo('Весы')// до 23 октября
    elseif($day <= 18 + 10 * 31) echo('Скорпион')// до 22 ноября
    else  echo('Стрелец')// до 21 декабря
}
function Parse(string $s): void{
   
}
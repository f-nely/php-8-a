<?php

/*
DATETIME - add e sub

Podemos adicionar e subtrair períodos de tempo a uma data.
Para isso usamos os métodos ADD e SUB

DateInterval:
P - período
PT - período de tempo

https://code.tutsplus.com/tutorials/add-days-to-a-date-with-php-dateinterval--cms-38438
*/

$date = new DateTime('2021-12-15');
echo $date->format('M d, Y H:i:s'); // Dec 15, 2021 00:00:00
echo '<br>';

$interval = new DateInterval('P180D');
$date->add($interval);
echo $date->format('M d, Y H:i:s'); // Jun 13, 2022 00:00:00
echo '<br>';
echo '<hr>';

$data = new DateTime('01-01-2000 00:00:00');
echo $data->format('d-m-Y H:i:s'); // 01-01-2000 00:00:00
echo '<br>';

$data->add(new DateInterval('P30D'));
echo $data->format('d-m-Y H:i:s'); // 31-01-2000 00:00:00
echo '<br>';

$data->sub(new DateInterval('P20D'));
echo $data->format('d-m-Y H:i:s'); // 11-01-2000 00:00:00
echo '<br>';
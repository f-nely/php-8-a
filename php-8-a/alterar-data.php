<?php

$data = new DateTime();
$data->setDate(1987, 5, 6);
$data->setTime(23, 30);

echo $data->format('d-m-Y H:i:s');
<?php

$brasil = new DateTime('now', new DateTimeZone('America/Fortaleza'));


// $brasil->modify('+1 minute');
// $brasil->modify('+15 minute');
// $brasil->modify('+48 minute');
// $brasil->modify('+1 day');
// $brasil->modify('+7 days');
// $brasil->modify('+3 months');
// $brasil->modify('+12 years');
$brasil->modify('+1 years');
// $brasil->modify('+1 years +6 months');
// $brasil->modify('+1 hour +15 minutes');
// $brasil->modify('+1 hour -15 minutes');

echo $brasil->format('d-m-Y H:i:s') . '<br>';
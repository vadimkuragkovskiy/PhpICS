<?php

date_default_timezone_set('Europe/paris');

include 'PhpICS/src/index.php';

$icalc = ICS::open('test.ics');

foreach( $icalc as $event ) {
  echo $event->getDateStart('Y-m-d H:i:s'), ' - ', $event->getSummary();
  echo '<br />';
}

echo '<pre>', $icalc, '</pre>';


?>
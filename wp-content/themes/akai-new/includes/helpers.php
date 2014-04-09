<?php

/**
 * prints Google Add to calendar link
 * @param DateTime $date
 * @param int $duration in seconds
 * @param array $params title, location, description, website_name, website_url
 */
function akai_add_to_calendar($date = false, $duration = 5400, $params = Array()) {
  if (!$date)
    return;
  
  // @todo czy to ma byc link Add to calendar, czy moze jakis obiekt, ktory mozna dodawac takze do innych kalendarzy?
  // np. plik .iCal 
  // http://www.phpclasses.org/package/873-PHP-Class-for-creating-iCalendar-files.html 
  // http://stackoverflow.com/questions/1661478/add-an-outlook-calendar-event-from-a-link-on-a-web-page
  // http://www.myhow2guru.com/archives/php-generate-calendar-file-ics/
  // lub plik .vcs od outlooka (buehehehe; u're kidding right?) http://www.terminally-incoherent.com/blog/2008/04/14/generate-outlook-calendar-events-with-php-and-icalendar/
  echo '<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=tytul&dates=20060101T034500Z/20100404T014500Z&details=opis&location=miejsce&trp=false&sprop=akai.org.pl&sprop=name:AKAI" target="_blank"><img src="//www.google.com/calendar/images/ext/gc_button1.gif" border=0></a>';
  
  echo ' lub <a href="'. home_url('/ical.ics') .'">Zapisz do swego kalendarza</a>';
}

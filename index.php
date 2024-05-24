<?php
require_once "src/EventsAdd.php";

EventsAdd::OpenConnectionEvent("Bruno", "28732897323", "123");

EventsAdd::DumpEvent($_SESSION);

EventsAdd::EventDebugPHP();

EventsAdd::BrutalForceHTML();

EventsAdd::BrutalForceCss();


<?php

namespace Stevebauman\CalendarHelper\Drivers;

use Stevebauman\CalendarHelper\Objects\Event;

interface DriverInterface {
    
    public function setUp();
    
    public function event($apiId);
    
    public function events(array $params = array());
    
    public function createEvent(Event $event);
    
    public function updateEvent(Event $event);
    
    public function deleteEvent($apiId);
    
}
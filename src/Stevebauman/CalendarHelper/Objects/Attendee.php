<?php

namespace Stevebauman\CalendarHelper\Objects;

use Stevebauman\CalendarHelper\Objects\AbstractApiObject;

class Attendee extends AbstractApiObject {
    
    use \Stevebauman\Viewer\ViewableTrait;
    
    /*
     * Stores the event object the attendee is connected to
     */
    public $event;
    
    public function __construct(array $attributes = array())
    {
        $this->viewer = config('calendar-helper::attendee.viewer');
        
        $this->fillable = config('calendar-helper::attendee.attributes');
        
        $this->fill($attributes);
    }
    
}
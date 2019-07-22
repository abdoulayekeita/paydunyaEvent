<?php namespace Event\Event;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'event\event\components\EventForm'=>'eventform',
            'event\event\components\EventList'=>'eventlist',
            'event\event\components\EventDetail'=>'eventDetail',
            'event\event\components\ManageEvent'=>'manageEvent',
            'event\event\components\ManaEventView'=>'manageEventView',
            'event\event\components\ManageEventEdit'=>'manageEventEdit',
            'event\event\components\Admin'=>'admin',
            'event\event\components\AdminDemande'=>'adminDemande',
        ];
    }
    public function registerSettings()
    {
    }
}

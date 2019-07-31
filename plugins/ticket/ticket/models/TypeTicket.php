<?php namespace ticket\Ticket\Models;

use Model;

/**
 * Model
 */
class TypeTicket extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $belongsTo = [
        'event' => ['event\event\models\Event',
        'table'=>'event_event_']
    ];
    public $attachOne = [
        'typeticketimage'=>'System\Models\File'
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ticket_ticket_type';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

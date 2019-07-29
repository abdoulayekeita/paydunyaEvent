<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent26 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->dropColumn('id');
        });
    }
}

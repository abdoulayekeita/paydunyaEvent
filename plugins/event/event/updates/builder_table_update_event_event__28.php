<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent28 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->integer('demande_notif')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->dropColumn('demande_notif');
        });
    }
}

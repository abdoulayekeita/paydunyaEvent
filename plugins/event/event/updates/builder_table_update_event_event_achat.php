<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventAchat extends Migration
{
    public function up()
    {
        Schema::table('event_event_achat', function($table)
        {
            $table->renameColumn('user_id', 'user_email');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_achat', function($table)
        {
            $table->renameColumn('user_email', 'user_id');
        });
    }
}

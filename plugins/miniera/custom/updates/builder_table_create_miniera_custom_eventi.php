<?php namespace Miniera\Custom\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMinieraCustomEventi extends Migration
{
    public function up()
    {
        Schema::create('miniera_custom_eventi', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titolo');
            $table->text('descrizione');
            $table->dateTime('data');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('miniera_custom_eventi');
    }
}
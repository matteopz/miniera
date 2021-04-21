<?php namespace Miniera\Notizie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMinieraNotizieEventi extends Migration
{
    public function up()
    {
        Schema::create('miniera_notizie_eventi', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titolo');
            $table->text('testo');
            $table->string('slug');
            $table->dateTime('data_evento');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('miniera_notizie_eventi');
    }
}

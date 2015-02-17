<?php namespace Owl\Owl\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLocationsTable extends Migration
{

    public function up()
    {
        Schema::create('owl_owl_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('owl_owl_locations');
    }

}

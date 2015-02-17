<?php namespace Owl\Owl\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateBooksTable extends Migration
{

    public function up()
    {
        Schema::create('owl_owl_books', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('author')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('owl_owl_books');
    }

}

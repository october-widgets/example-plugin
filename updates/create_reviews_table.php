<?php namespace Owl\Owl\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateReviewsTable extends Migration
{

    public function up()
    {
        Schema::create('owl_owl_reviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('book_id')->unsigned()->default(0);
            $table->integer('position')->unsigned()->default(0);
            $table->text('review')->nullable();
            $table->integer('stars')->unsigned()->default(0);
            $table->text('tagbox')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('owl_owl_reviews');
    }

}

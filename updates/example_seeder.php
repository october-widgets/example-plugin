<?php namespace Owl\Owl\Updates;

use Illuminate\Database\Eloquent\Model;
use October\Rain\Database\Updates\Seeder;
use DB;

use Owl\Owl\Models\Book;
use Owl\Owl\Models\Tag;
use Owl\Owl\Models\Review;
use Owl\Owl\Models\Location;

class ExampleSeeder extends Seeder
{

    public function run()
    {
        // Disable foreign key checks before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->seed_books();
        $this->seed_locations();

        // Enable foreign keys
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Seed a book, some reviews, and some tags
     */
    private function seed_books()
    {
        $book = Book::create([
            'title'     => 'The Fellowship of the Ring',
            'author'    => 'Tolkien'
        ]);

        $review1 = Review::create([
            'book_id'   => 1,
            'review'    => 'Best book ever, 5 stars!!!',
            'stars'     => 5
        ]);
        $review2 = Review::create([
            'book_id'   => 1,
            'position'  => 1,
            'review'    => 'Didn\'t really like it...',
            'stars'     => 2
        ]);

        $tag1 = Tag::create(['name' => 'Epic']);
        $tag2 = Tag::create(['name' => 'High Fantasy']);
        $tag3 = Tag::create(['name' => 'Fiction']);
        $book->tags()->attach([1, 2, 3]);
    }

    /**
     * Seed a couple locations
     */
    private function seed_locations()
    {
        $location1 = Location::create([
            'name' => 'Owl Books, New York',
            'address' => '1 Broadway, New York, NY, United States'
        ]);
        $location2 = Location::create([
            'name' => 'Owl Books, San Francisco',
            'address' => '1 2nd St, San Francisco, CA, United States'
        ]);
        $location3 = Location::create([
            'name' => 'Owl Books, Chicago',
            'address' => '1 Main Street, Chicago, IL, United Statess'
        ]);
    }
}

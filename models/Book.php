<?php namespace Owl\Owl\Models;

use Model;
use Owl\Owl\Models\Tag;

/**
 * Book Model
 */
class Book extends Model
{

    /**
     * @var string  The database table used by the model.
     */
    public $table = 'owl_owl_books';

    /**
     * @var array Relations
     */
    public $hasMany = [
        'reviews' => [
            'Owl\Owl\Models\Review',
            'table' => 'owl_owl_reviews',
            'order' => 'position asc'
        ]
    ];
    public $belongsToMany = [
        'tags' => [
            'Owl\Owl\Models\Tag',
            'table'    => 'owl_owl_book_tag'
        ]
    ];

    /**
     * Here we will use the owl-tagbox widget to attach related tag models
     * via a many-to-many relationship. The basic process is as follows...
     *
     *     1. Use an attribute to process the tags (here we're using "tagbox")
     *     2. Create an accessor to return the tags as an array of strings
     *     3. Create a mutator to stash the tags for later processing
     *     4. From afterSave(), create tag models and sync relationship
     *
     * If you don't need this level of sophistication, simply set the tag's
     * column to "jsonable" like so...
     *
     *     public $jsonable = ['tags']
     */
    private $tagNames = [];
    public function getTagboxAttribute()
    {
        $tags = [];
        foreach ($this->tags as $tag)
            $tags[] = $tag->name;

        return $tags;
    }
    public function setTagboxAttribute($tags)
    {
        foreach ($tags as $tag)
            $this->tagNames[] = $tag;
    }
    public function afterSave()
    {
        $tagIds = [];
        foreach ($this->tagNames as $name) {
            $tag = Tag::firstOrCreate(['name' => $name]);
            $tagIds[] = $tag->id;
        }

        $this->tags()->sync($tagIds);
    }
}

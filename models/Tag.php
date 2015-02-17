<?php namespace Owl\Owl\Models;

use Model;

/**
 * Tag Model
 */
class Tag extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'owl_owl_tags';

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['name'];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'books' => [
            'Owl\Owl\Models\Book',
            'table'    => 'owl_owl_book_tag'
        ]
    ];

}

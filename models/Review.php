<?php namespace Owl\Owl\Models;

use Model;

/**
 * Review Model
 */
class Review extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'owl_owl_reviews';

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'book' => ['Owl\Owl\Models\Book', 'table' => 'owl_owl_books']
    ];

    /**
     * Validation
     */
    public $rules = [
        'review'    => 'required',
        'stars'     => 'required|integer|min:1|max:5'
    ];
}

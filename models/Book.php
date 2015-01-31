<?php namespace Owl\Owl\Models;

use Model;

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
     * @var array   Jsonable fields
     */
    public $jsonable = ['json_tags'];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}
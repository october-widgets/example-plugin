<?php namespace Owl\Owl\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Books Back-end Controller
 */
class Books extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Owl.Owl', 'owl', 'books');
    }
}
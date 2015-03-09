<?php namespace Owl\Owl;

use Backend;
use System\Classes\PluginBase;

/**
 * Owl Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Owl Examples',
            'description' => 'Example usage of Owl widgets.',
            'author'      => 'Owl',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Returns navigation information.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'owl' => [
                'label'       => 'Owl Widgets',
                'url'         => Backend::url('owl/owl/books'),
                'icon'        => 'icon-lightbulb-o',
                'order'       => 500,

                'sideMenu' => [
                    'books' => [
                        'label'     => 'Books',
                        'icon'      => 'icon-book',
                        'url'       => Backend::url('owl/owl/books')
                    ],
                    'locations' => [
                        'label'     => 'Locations',
                        'icon'      => 'icon-map-marker',
                        'url'       => Backend::url('owl/owl/locations')
                    ]
                ]

            ]
        ];
    }

    /**
     * Registers Owl widgets
     *
     * @return  array
     */
    public function registerFormWidgets()
    {
        return [
            'Owl\FormWidgets\Comment\Widget' => [
                'label' => 'Comment',
                'code'  => 'owl-comment'
            ],
            'Owl\FormWidgets\HasMany\Widget' => [
                'label' => 'Has Many',
                'code'  => 'owl-hasmany'
            ],
            'Owl\FormWidgets\Money\Widget' => [
                'lable' => 'Money',
                'code'  => 'owl-money'
            ],
            'Owl\FormWidgets\Tagbox\Widget' => [
                'label' => 'Tagbox',
                'code'  => 'owl-tagbox'
            ],
            'Owl\FormWidgets\Address\Widget' => [
                'label' => 'Address',
                'code'  => 'owl-address'
            ],
        ];
    }

}

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
     * Returns OWL form widgets
     * - Remove "alias" once October comes out of beta.
     *
     * @return  array
     */
    public function registerFormWidgets()
    {
        return [
            'Owl\FormWidgets\HasMany\Widget' => [
                'label' => 'Has Many',
                'alias' => 'owl-hasmany',
                'code'  => 'owl-hasmany'
            ],
            'Owl\FormWidgets\Tagbox\Widget' => [
                'label' => 'Tagbox',
                'alias' => 'owl-tagbox',
                'code'  => 'owl-tagbox'
            ],
            'Owl\FormWidgets\Comment\Widget' => [
                'label' => 'Comment',
                'alias' => 'owl-comment',
                'code'  => 'owl-comment'
            ],
            'Owl\FormWidgets\Address\Widget' => [
                'label' => 'Address',
                'alias' => 'owl-address',
                'code'  => 'owl-address'
            ],
        ];
    }

}

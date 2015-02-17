# Owl Example Plugin
This plugin is intended for demonstration purposes only. Our example plugin will be for a fictional book store called Owl Books. To install this plugin, download contents to ```/plugins/owl/owl``` and run ```php artisan plugin:refresh Owl.Owl```.

### Comment
The [Comment](https://github.com/october-widgets/comment) widget is used to provide extra information to the backend book form.

### Has Many
The [Has Many](https://github.com/october-widgets/hasmany) widget is used to allow reviews to be attached to books. A bit of Twig markup is being used to display a 5-star rating system.

### Tagbox
The [Tagbox](https://github.com/october-widgets/tagbox) widget can be used to easily manage many-to-many tag relationships. Here we're using it to manage the many genres a book may be tagged with.

### Address
The [Address](https://github.com/october-widgets/geoaddress) widget is used to create easy inputs for our fictional shop locations.

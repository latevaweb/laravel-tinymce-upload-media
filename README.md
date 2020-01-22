# Laravel TinyMCE Upload Media

Upload media to Laravel from tinyMCE jQuery plugin

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Laravel 6.x](https://img.shields.io/badge/Laravel-6.x-orange.svg)](http://laravel.com)


In the view that contain setup for TinyMCE, you need to include the upload view, add this line at the bottom,

`@include('tinymce::upload_form')`

This form is hidden from your view, no-one will see it because it is display: none.

Next step is to add this config to the tinymce object,
```js
tinymce.init({
    // .. your config here
    relative_urls: false,
    file_browser_callback: function(field_name, url, type) {
        // trigger file upload form
        if (type == 'image') $('#formUpload input').click();
    }
});
```

Now you should be able to upload image directly to the editor while writing content.

## Installation

You can install the package via composer:

``` bash
composer require latevaweb/laravel-tinymce-upload-media
```

If you want to change the hidden view to manage the upload:
``` bash
php artisan vendor:publish --provider="LaTevaWeb\TinyMCE\TinyMCEServiceProvider" --tag=view
```

If you want to change the service that manages the file upload or any other configuration
``` bash
php artisan vendor:publish --provider="LaTevaWeb\TinyMCE\TinyMCEServiceProvider" --tag=config
```

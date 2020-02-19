<?php

return [

    /*
    * This value represents the folder locations where the collections are saved
    * */
    'collections_path' => resource_path('content/collections'),

    'pages' => [

        /*
        * This value represents the JSON file that contains all the meta data about a post
        * */
        'file_path' => resource_path('content/pages.json'),

        /*
         * This value represents the location in which the content files are saved.
         * The filename in the config('aloiacms.articles.file_path') will search in this folder.
         * */
        'folder_path' => resource_path('content/pages'),

        /*
         * This value represents the location in which the post images are found.
         * This is used to generate URL's to display the images
         * */
        'image_path' => 'images/pages'

    ],

    'articles' => [

        /*
        * This value represents the JSON file that contains all the meta data about a post
        * */
        'file_path' => resource_path('content/articles.json'),

        /*
         * This value represents the location in which the content files are saved.
         * The filename in the config('aloiacms.articles.file_path') will search in this folder.
         * */
        'folder_path' => resource_path('content/articles'),

        /*
         * This value represents the location in which the post images are found.
         * This is used to generate URL's to display the images
         * */
        'image_path' => 'images/articles',

        /*
         * This value represents the prefix in the URL before the slug of the article.
         * This is used to generate URL's for the articles
         * */
        'url_prefix' => 'articles'

    ],

    'content_blocks' => [

        /*
         * This value represents the folder in which the content blocks can be found.
         * This is used to resolve the content with the BlockFacade
         * */
        'folder_path' => resource_path('content/blocks')

    ],

    'meta_tags' => [

        /*
         * This value represents the path to the file that holds the meta tag data.
         * This is used to generate meta tags for the website
         * */
        'file_path' => resource_path('content/metatags.json')

    ],

    'taxonomy' => [

        /*
         * This value represents the path to the file that holds the taxonomy data.
         * This is used to create and resolve nesting in pages.
         * */
        'file_path' => resource_path('content/taxonomy.json')

    ],

    'uploaded_files' => [

        /*
         * This value represents the folder in which the uploaded files can be found.
         * */
        'folder_path' => public_path('files')

    ],

    'permissions' => [

        /*
         * This value represents the user the webserver uses to serve the static files
         * */
        'user' => env('FILE_OWNER', 'www-data'),

        /*
         * This value represents the user group the webserver user belongs to
         * */
        'group' => env('FILE_GROUP', 'www-data'),

        /*
         * This value represents any other folder/file path you want to update when setting the file permissions
         * */
        'additional_paths' => []

    ],

];
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Settings
    |--------------------------------------------------------------------------
    |
    | In here you can define all the settings used in your app, it will be
    | available as a settings page where user can update it if needed
    | create sections of settings with a type of input.
    */

    'home' => [

        'title' => 'Home',
        'desc' => 'Home page of website, Blog page or home page' ,
        'icon' => 'fa fa-globe',

        'elements' => [
            [
                'type' => 'select',
                    'name' => 'home_page',
                    'label' => 'Home Page',
                    'rules' => 'required',
                    'class' => 'input-sm', // class for input
                    'options' => [
                        'Home',
                        'Blog',                        
                    ]
            ]
        ],


    ],
    'app' => [  

        'title' => 'General',
        'desc' => 'All the general settings for application.',
        'icon' => 'fa fa-cogs',

        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_name',
                'label' => 'App Name',
                'rules' => 'required|min:2|max:50',
                'class' => 'input-sm', // class for input
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_description',
                'label' => 'Tagline',
                'rules' => 'required|min:2|max:50',
                'class' => 'input-sm', // class for input
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_email',
                'label' => 'Email',
                'rules' => 'required|min:2|max:50',
                'class' => 'input-sm', // class for input
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_admin_url',
                'label' => 'Admin URL',
                'rules' => 'required|min:2|max:50',
                'class' => 'input-sm', // class for input
            ],
        ],


    ],

  
];
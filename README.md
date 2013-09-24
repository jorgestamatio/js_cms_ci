#JS CMS CI

## Description
This will be a Content Management System based on CI and using Twitter Bootstrap for the main styling of the backend.

The CMS will be structured using the HMVC Modular extension from [wiredesignz](https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc)

## Install

    git clone https://github.com/jorgestamatio/js_cms_ci.git

## Configure

In 
    js_cms_ci/application/config/config.php 

change the following line to the URL to your folder on your server

    $config['base_url'] = 'http://localhost:8888/js_cms_ci/';

In 
    js_cms_ci/application/config/development/database.php
    js_cms_ci/application/config/production/database.php

change the database, username and password to fit your development and production environments.

    $db['default']['hostname'] = 'localhost';
    $db['default']['username'] = 'localhost';
    $db['default']['password'] = 'localhost';
    $db['default']['database'] = 'test';

## Mod Rewrite
If your server supports mod rewrite, create an .htaccess file inside the main js_cms_ci folder and add the next lines.
<<<<<<< HEAD

=======
    
>>>>>>> sagakhan
    DirectoryIndex index.php

    RewriteEngine on
    RewriteBase /
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond $1 !^(index\.php|robots\.txt)

    RewriteRule ^(.*)$ index.php?/$1 [L]

##TODO

- [x] Database initialization.
- [x] Master templates for backend and frontend.
- [ ] Login functionality.
- [ ] CURD functionality.
- [ ] Mailing functionality.

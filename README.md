#JS CMS CI
================================
## Description
This will be a Content Management System based on CI and using Twitter Bootstrap for the main styling of the backend.

The CMS will be structured using the HMVC Modular extension from [wiredesignz](https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc)

## Install

    git clone https://github.com/jorgestamatio/js_cms_ci.git

## Configure

In js_cms_ci/application/config/config.php 

change the following line to the URL to your folder on your server

    $config['base_url'] = 'http://localhost:8888/js_cms_ci/';

In js_cms_ci/application/config/database.php

change the database, username and password to fit your infos.

    $db['default']['hostname'] = 'localhost';
    $db['default']['username'] = 'localhost';
    $db['default']['password'] = 'localhost';
    $db['default']['database'] = 'test';


##TODO

- [x] Database initialization.
- [x] Master templates for backend and frontend.
- [ ] Login functionality.
- [ ] CURD functionality.
- [ ] Mailing functionality.

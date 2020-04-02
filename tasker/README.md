## About Tasker

Tasker is a simple, demo task management application. There are no logins, no
careful management of data, just a list of things to do. New tasks can be 
created, edited, deleted, and updated from the main list when they're started
or stopped. 

This is a demo project, not intended for actual production use. No warrenty
exists that this code is suitable for any purpose. 

This project was built with [Laravel](https://laravel.com/). 

## Installation

After cloning this repository to a directory served by your httpd service, set
up a database on your local service with a user specific to it. 

Open the file ".env", and change the database keys to match the new database
just created.

From a shell, go to the top directory of this distribution and enter the 
following to download and install all needed dependencies:
...
composer install
...

When this is done, set up the database with:
...
php artisan migrate
...

When this completes, run the server with:
...
php artisan serve
...


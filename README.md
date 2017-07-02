# Laravel-Pusher-Echo

This is a sample Chat app using Laravel, Pusher, Echo  and VueJs as a front-end

to setup

clone this project

run "composer install" to download all the laravel dependencies
run "npm install" to download all node packages
setup the .env file by copying the .env.example and supply the
require database credentials and pusher credentials (pusher.com)

add this to Pusher credentials

PUSHER_APP_CLUSTER=<this should be the cluster of your pusher>
PUSHER_APP_ENCRYPTION=false - <use false if you are not on https else true on https>

after .env file was setup
run "php artisan config:clear"
    "php artisan key:generate"
    "php artisan migrate"    
    "php artisan serve"
    
visit - http://127.0.0.1:8000/chat

Note : you will be redirect to login page because, you should register first and then login

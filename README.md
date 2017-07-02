# Laravel-Pusher-Echo

This is a sample Chat app using Laravel, Pusher, Echo  and VueJs as a front-end <br />

to setup <br />

clone this project <br />

run "composer install" to download all the laravel dependencies <br />
run "npm install" to download all node packages <br />
setup the .env file by copying the .env.example and supply the <br /> 
require database credentials and pusher credentials (pusher.com) <br />

add this to Pusher credentials <br />
 
PUSHER_APP_CLUSTER=this should be the cluster of your pusher <br />
PUSHER_APP_ENCRYPTION=false - use false if you are not on https else true on https <br />

after .env file was setup <br />
run "php artisan config:clear" <br />
    "php artisan key:generate" <br />
    "php artisan migrate"    <br />
    "php artisan serve" <br />
    
visit - http://127.0.0.1:8000/chat<br />

Note : you will be redirect to login page because, you should register first and then login<br />

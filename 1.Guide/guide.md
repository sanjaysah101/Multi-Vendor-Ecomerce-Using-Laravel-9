# Important Guide 

## Use this command when you download a laravel project from github when you encounter error to run project

composer install 
mv .env.example .env 
php artisan cache:clear 
composer dump-autoload 
php artisan key:generate

## How to generate .env file and APP_KEY after downloading a Laravel project from GitHub?

Because .env is included in .gitignore you don't get it when you clone a project from GitHub.

Is there a way to generate the .env file with APP_KEY via some command without manually creating it (copy paste)?

Copy the code from .env.example and paste the code in a newly created .env file.
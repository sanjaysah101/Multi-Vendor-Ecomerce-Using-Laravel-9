# What I did in this commit
We will register the admin guard every time when an admin logs in and forget it every time when the admin logs out from the admin panel. But first of all, we are required to insert one admin record with the Seeder.

Seeding helps us to insert data into the table from the file and will also help us for future projects to automatically create tables with migration and data with seeding. 

We will create a Seeding for admins table to automatically insert admin data from a file.

## 1) Writing Seeder / Create AdminsTableSeeder file :-

First of all, we will generate a seeder and create an AdminsTableSeeder file where we will add record for the admins table.

Run below artisan command to generate Seeder and create AdminsTableSeeder file:-
php artisan make:seeder AdminsTableSeeder

The above command will create AdminsTableSeeder.php file at \database\seeders\

Now open the AdminsTableSeeder file and add a record for admin.

We will generate a hash password for admin by using the Hash::make function as shown in the video.

## 2) Update DatabaseSeeder.php file:-
Now update DatabaseSeeder.php file located at database/seeders/ to add AdminsTableSeeder class as shown in video.

## 3) Running Seeder / Run below command:-
Once you have written your seeder, you may need to regenerate Composer's autoloader using the dump-autoload command:
composer dump-autoload

## 4) Run below command:-
Now run the last command that will finally insert admin record into admins table that we can use for admin login.
php artisan db:seed
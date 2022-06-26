# What I did in this commit
I have work on admin login and logout functionality. Register the admin guard every time when an admin logs in and forget it every time when the admin logs out from the admin panel. 

## 1) Update login.blade.php file:-
First of all, I had updated the login.blade.php file to update the Login form. We will set its action, CSRF token, the username (email) and password.

## 2) Update login function :-
Then, I had updated the login function at AdminController. I had added the condition for posted data and use the guard for admin login as shown in the video.

You can try login in with username superadmin@admin.com and password 12345 that we have set in the last commit with Seeding.

Once logged in, redirect the user to the Dashboard page and if the username or password is incorrect then redirect back the user and flash the error message on the admin login page.

## 3) Update header.blade.php file:-
Remove all unwanted code and add the "Logout" link for the user at the top right side of the header as shown in the video.

## 4) Create Route:-
Now create a GET route for Admin Logout in the web.php file like below:-

// Admin Logout
Route::get('logout','AdminController@logout'); 

## 5) Create logout function:-
Create a logout function in AdminController in which we will unset the admin guard as shown in the video. 

## 6) Update login.blade.php file:-
Update the login.blade.php file to show the error message if the admin user or password is incorrect.
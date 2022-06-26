## Notes about this commit

We will configure Guards for Admins, Sub Admins and Vendors and default Web Auth for Users.

We will also prevent the admin routes including the dashboard from unauthorized access. No one can able to access the admin dashboard and other admin modules without login into the admin panel.  We will use Guards to protect the admin routes including the dashboard route.

We will follow the below steps to set Guards for Admin Panel / Admins.

## 1) Update Admin model:-

We will update the Admin model to set the protected guard variable for admin and set other variables as shown in the video. We will also extend the Admin class to Authenticatable.

## 2) Update auth.php file:-
We will update the auth.php file located at config\auth.php to set guards for admin to assign session in driver and admins in provider as shown in the video.

We will also set providers for admins to assign eloquent in driver and Admin class in the model.

## 3) Create Admin Middleware:-
Now we will create an Admin Middleware file by running the below command:-
php artisan make:middleware Admin

## 4) Update kernel.php file:-
Now we will update the kernel.php file located at app\http\ folder to register Admin middleware as global as shown in the video.

## 5) Update Admin Middleware:- 
Add Auth:guard check in Admin Middleware to protect the admin routes. This check will be false for now as we have not registered the admin guard yet. 

Also, include use Auth; at top of Admin Middleware file.

## 6) Update web.php file:-
Add admin middleware group and move admin dashboard route under it to protect it from unauthorised access.

Now no one can access the admin dashboard without login into the admin panel.  We have used Guards to protect the admin routes including the dashboard route.
1. index.php: Create a Registration/login page in a SPA.  Registration would have a username, email, and password, and Login would have an email and password. It is only accessible if a user is not authenticated. If Authenticated users would be redirected to either /admin.php, /user.php or /manager.php

2. When users register, we will use a user_info.txt file to store all their information using file_put_contents, file_get_contents etc. Before registering a user, we will use email to check if this user is already registered. If there is, an exception would be thrown, and the user would get an error about this.

3. Admin.php: There would be a bultin user named Ostad, password Admin,  who would be the admin user

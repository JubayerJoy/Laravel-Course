# Assignment - Laravel Structure and Artisan Commands

__Objective:__  
In this assignment, you will create a basic Laravel application and use artisan commands to generate controllers and routes

__Task:__  
1. Create a new Laravel application using the command line. Use the necessary Laravel installer command to create the project.
2. Once the project is created, use the artisan command to generate a new controller called 'UserController'.
3. Next, create a route in the web.php file that maps to a function in the UserController. The function should return a 
   simple message like 'Hello, Laravel!'.
4. Finally, start the Laravel development server and test the route using a web browser.

__Criteria:__  
1. The Laravel project should be created successfully using the correct artisan command.
2. The UserController should be generated using the appropriate artisan command.
3. The route in the web.php file should be configured correctly and mapped to the UserController function.
4. The UserController function should return the expected message.
5. The route should be accessible and displaying the expected message when tested in a web browser.

__Hint:__  
Refer to the Laravel documentation and online tutorials for guidance on creating a new Laravel application and using artisan commands.

Submission Guidelines:
1. Must Submit Github link
2. Must Create a Fresh New Repository and this repository should have only laravels folders and files.
3. Don't push a folder where your project is created. So that we don't need to go inside that folder.
4. Demo: https://drive.google.com/file/d/19B1kkA5oGWe6aUIjI1lAdZsEyoJZfX6U/view?usp=sharing


### Project Setup
Open the terminal and run the following commands:
```text
git clone https://github.com/net-chanchal/ostad_module7_assignment.git
cd ostad_module7_assignment
composer update
```

### Run the Development Server
To start the Laravel development server, execute the following command:
```text
php artisan serve
```

### Test the Route
Visit the following URL in your web browser to test the route:
```text
http://127.0.0.1:8000/hello
```

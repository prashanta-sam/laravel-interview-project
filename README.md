# Welcome to Round 3 of your Laravel Interview
# ![Codebuddy Pvt. Ltd. Round 3 Interview](https://codebuddy.co/assets/img/logo.png)

> This round is to test your **Debugging capabilities, Code optimization skills and Code quality** in a real world application.

> This repo uses Laravel 8 to create a backend server and perform DB operations.

> **_Please read the below instructions carefully_**

# Tasks
1. `php artisan migrate` creates 100 users. Find out why this is not working, fix the seeder and seed data.


2. `[POST] http://localhost/blog/create` with data, parameters are  
``` json
{
    "user_id": "Id of an existing user",
    "title": "Post Title",
    "description": "Post Body",
    "author_name": "Name of the author"
}
``` 
Should create a post and return the newly created post in the response.
**Validate user_id, title, description, author_name. Validation criteria:**

> a. user_id must be a valid user's ID

> b. each user can have maximum 2 posts assigned to his profile

> b. title must be a string and minimum of 10 characters excluding spaces

>c. description must be a string and minimum of 50 characters excluding spaces

>d. author_name must be a string and should not accept any special characters

3. `[GET] http://localhost/users` is an existing end point that is used in front-end to show list of all users with their post count. Optimize the end point to achieve minimum execution time and smallest load on server. You can introduce additional parameters in the request to restrict and control your result set.

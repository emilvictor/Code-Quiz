
## Installation

- Clone repo

### in root folder
- rename .env.example to .env 
- DB_PASSWORD:your_password


### in terminal run
- composer install
- npm install
- php artisan key:generate
- php artisan migrate
- php artisan serve

### ASSIGNMENT

-   Controllers
-   Migrations
-   HTTP Tests (on all routes)
-   Laravel Mix
-   Middleware
-   Models (with relationships)
-   Routes (with route model binding)
-   Eloquent
-   Relationships
-   Validation
-   Views (Blade)

### Review by Evelyn
- You could redirect back the _guest_ user that tries to access the `/dashboard` route. Right now it just says "route not defined".
- `web.php:33` You could change `Route::get('quiz/{id}', 'App\Http\Controllers\QuizController@show');` to `Route::get('quiz/{id}', [QuizController::class, 'show');` which is more modern Laravel syntax to call specific methods on the controllers
- You could add PHP CodeSniffer to your project if you want to check the coding standard directly from the command line. Running `./vendor/bin/phpcs` will give you a list of files that need fixing, while `./vendor/bin/phpcbf` fixes some, if not all, those problems for you automatically.
- `Quizz.php` Everything in there could have been stored in the database and passed to your view through a controller.
- Same with `quiz.blade.php` you could have grabed the data from the controller and no need to use `@php`
- Maybe a little navigation to go back to the dashboard if you dont feel like taking a test would be nice
- If I try to create an user with a very short email I cannot register. Make it so that the user can create an account with whatever email length
- Make sure to also send some errors when the user didnt meet the criteria for creating a new account
- `RegisterController` you could use the `Auth()` facade. Even though it works right now, the `login` method appears marked as `undefined method` by VSCode
- `UserScores.php:14` you could change that line to `return $this->belongsTo(User::class);` works the same but its clearer that you are referencing the User model.


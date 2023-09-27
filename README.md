<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
-   **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Install Laravel

To install Laravel using Laravel new command, you need to install Laravel installer globally using the following command.

composer global require laravel/installer

Copy one of the below commands into your terminal & press enter to install Laravel

composer create-project laravel/laravel your-project-name

OR

laravel new your-project-name

I have already installed Laravel installer globally, so I will use the below command to install Laravel.

laravel new livewire3_crud_bs5

After the download completes…go to your project by typing cd your-project-name & press enter. To run the app enter below code

php artisan serve

Open your browser & type localhost:8000 in your address bar, & you will see that Laravel app is running successfully.

## CREATING DATABASE

First we will create a database for our Project. Open phpMyAdmin & create a database. Here I will create livewire3_crud_bs5. After creating the database, open .env file & enter the database name inside it.

## INSTALL LIVEWIRE 3

To install Livewire you will need Git Bash, if you use Windows Command Prompt or Windows Power Shell, you will get an error.

I have already installed Git Bash & configured it in VS Code so I will open GitBash in VS Code.

Click on Terminal-> New Terminal, it will open a Terminal.

Now click on the + icon which is in the right side & click on Gitbash to open Git Bash in VS Code.

Now type the following command in Git bash to install livewire.

composer require livewire/livewire

It will take some time to install livewire, depending on your internet connection. After the download completes, it will display below screen.

## PUBLISHING THE CONFIGURATION FILE

To publish and customize Livewire’s configuration file in your terminal enter the following artisan command

php artisan livewire:publish --config

This will create a new livewire.php file in your Laravel application’s config directory.

## CREATE A TEMPLATE LAYOUT

Now we need an HTML layout for our component to render inside. By default, Livewire will automatically look for a layout file named: resources/views/components/layout.blade.php

Open your terminal & type below command to create a layout for our App.

php artisan livewire:layout

This command will generate a file called app.blade.php in resources/views/components folder.

Now for styling we will use Bootstrap 5 in our app. So, open your app.blde.php layout file, which is in views->components->layouts folder & add Bootstrap 5 cdn before the </head> tag.

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

## CREATING POST MODEL

Go to your project directory, open terminal & enter below Command to create Post model & posts migration.

php artisan make:model Post -m

Here we are using -m flag which will automatically generate create_posts_table migration file.

Now we need to add fields in our migration file. Open create_posts_table migration file, which is inside database->migrations folder. Now we will add two fields into our miration file, title & body . The datatype of title will be string & the datatype of body field will be text.

Enter below lines after $table->id();

$table->string('title');
$table->text('body');

Now we need to migrate the database, so enter the below command to migrate the database.

php artisan migrate

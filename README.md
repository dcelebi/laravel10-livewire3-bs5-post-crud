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

## CREATING OUR FIRST LIVEWIRE COMPONENT.

Now we will create our first Livewire Component. Open your terminal and type the below command to create Post component.

php artisan make:livewire PostComponent

The above command will create two files, PostComponent.php class which is inside app-Livewire folder.

The second file is a post->component.blade.php file which is inside resources->views->livewire folder.

If you open the PostComponent.php file you can see that there is a render() method, which is used to display the post-component view file.

## CREATING ROUTE

Now, we will create route for our application. To create a route, open web.php file which is inside the routes folder.

Livewire allows you to assign components directly to a route in your Laravel application. These are called “full-page components”. Add below code into your web.php file, after welcome/home toute.

Route::get('/posts', PostComponent::class)->name('posts');

You need to import PostComponent so add below code after<?php tag inside web.php

use App\Livewire\PostComponent;

Open post-component.blade.php file and enter <h1>Posts<h1>.

Now when you open localhost:8000/posts url it will display/render the data from post-component.blade.php file, it will show Posts with h1 tag.

If the above page displays, it means that Livewire is installed successfully.

Now open PostComponent.php file and enter below code inside component class

public $isOpen = 0;

    public function create()
    {
        $this->openModal();
    }
    public function openModal()
    {
        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }

In the above code, we have we have defined public $isOpen = 0, It means that by default the modal will be closed.

public function create(): This method is likely called when you want to open the modal window to create a new item or perform some action. It typically triggers the openModal() method to set the isOpen property to true, indicating that the modal should be shown on the post.component.blade view.

public function openModal(): This method sets the isOpen property to true, indicating that the modal is open or visible. When the isOpen property is true, the Livewire component will render the modal in the post.component.blade view.

public function closeModal(): This method is responsible for closing the modal window. It sets the isOpen property to false, indicating that the modal should be hidden or closed. When the isOpen property is false, the Livewire component will not render the modal in the post.component.blade view.

Now, open the post-component.blade file and enter the below code inside the <div></div> tag.

    <div>
    <nav class="navbar sticky-top bg-body-tertiary border border-secondary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Posts</a>
      </div>
    </nav>
    <div class="container px-4 py-5">
      <button wire:click="create" class="btn btn-primary">Create Post</button>
      @if ($isOpen)
      <div class="modal show" tabindex="-1" role="dialog" style="display: block;" >
          <div class="modal-dialog" role="document">
              <div class="modal-content text-bg-dark">

                  <div class="modal-header">
                      <h5 class="modal-title">
                         Add Post
                      </h5>
                      <svg wire:click="closeModal" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                  </div>
                  <div class="modal-body">
                      <form wire:submit="store">
                          <div class="form-group">
                              <label for="title">Post Title</label>
                              <input type="text" class="form-control" id="title" placeholder="Enter post title">
                          </div>
                          <div class="form-group">
                              <label for="body">Post Body</label>
                              <textarea class="form-control" id="body" rows="4" placeholder="Enter post body"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary mt-4">
                            Save
                          </button>
                          <button type="button" wire:click="closeModal" class="btn btn-secondary mt-4">Close</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-backdrop fade show"></div>
      @endif

  </div>
  </div>

In the above code we have added a button to add a Post.

We have added a click event wire:click=”create” on the button, which will open the modal.

We have added closeModel method on the cancel button, which will used to close the modal.

protected $fillable = ['title','body'];

Now open PostComponent.php file and enter the below code before the create method.

#[Rule('required|min:3')]
public $title;

#[Rule('required|min:3')]
public $body;

Here we have $title & $body are two variables which are publicly available.

The above code #[Rule(‘required|min:3’)], is a new feature in Livewire v3, which is used for validation.

The above code says that the field is required & minimum 3 charaters are required for this field.

To use this we need to import the below code above.

use Livewire\Attributes\Rule;

## CREATING POST

Now, to store the data into the database, we will add the below method after the create method.

    public function store()
    {
        $this->validate();
        Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        session()->flash('success', 'Post created successfully.');

        $this->reset('title','body');
        $this->closeModal();
    }

Make sure to import the Post model, before the class.

    use App\Models\Post;

In the above store() method, $this->validate() will validate the data.

The Post::create() method will create a new instance of the Post model and saves it to the database.

session()->flash(‘success’, ‘Post created successfully.’);

The above code will display a flash message on the post.component.blade file.

$this->closeModal(); This will close the modal.

$this->reset(); This line calls the reset method, which is another built-in Livewire method used to reset the component’s properties to their initial state. In this context, it clears the title and body properties, making the form fields empty after the post is successfully created.

Now we need to make the Form component work, we need to add wire:model directive & the store() method, so that when the user enter the data in title & body field the data gets inserted into the database, and the modal gets closed.

Open post-component.blade.php file & enter the below code.

In the title input enter wire:model=”title” and in the body textarea input enter wire:model=”body”.

<input type="text" wire:model="title" class="form-control" id="title" placeholder="Enter post title">
 
<textarea wire:model="body" class="form-control" id="body" rows="4" placeholder="Enter post body"></textarea>

Now enter the below code in form tag.

<form wire:submit="store">

Now open localhost:8000/posts in your browser, Click on Add Button, it will open the Modal.

Now enter title & body and click on save button. Now open phpMyAdmin and check the database, you will see data into the posts table.

You may have noticed that the success message didn’t get displayed after the data has been inserted.

To display the success message, open post-component.blade.php file and enter below code before the Create Post button.

@if (session()->has('success'))

  <div class="alert alert-success mt-4 ml-4 mr-4 col-4" role="alert">
      {{session('success')}}
    </div>
@endif

Now if you try to add the Post, you will see a success message after the data gets inserted into the database.

To display the error messages, enter the below code after input title :

<span class="text-danger">@error('title') {{ $message }} @enderror</span>

Enter the below code after textarea

<span class="text-danger">@error('body') {{ $message }} @enderror</span>

You can see that now if you try to submit the form, without entering data, it will display error messages.

You may notice that when we click on the Cancel/Close button, the validation messages are not cleared.

To fix this open PostComponent.php file and add below code in the openModal() method.

$this->resetValidation();

## DISPLAY POSTS

Now to display posts add the below code in the render method.

public function render()
{
return view('livewire.post-component',[
'posts' => Post::all()
]);
}

Now in the post-component.blade.php file add the below code after the Create Post button to display post title and body in the table.

<table class="table table-dark mt-4">
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Title</th>
           <th scope="col">Body</th>
           <th scope="col">Actions</th>
         </tr>
       </thead>
       @forelse ($posts as $post)
       <tbody wire:key="{{ $post->id }}">
         <tr>
           <th scope="row">{{$post->id}}</th>
           <td> {{$post->title}}</td>
           <td> {{$post->body}}</td>
           <td>
               <span class="cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil cursor-pointer" viewBox="0 0 16 16">
                   <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                 </svg>
               </span>
               <span  class="cursor-pointer">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                       <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                       <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                     </svg>
               </span>
           </td>
         </tr>
       </tbody>
       @empty
       <p>No post found</p>
   @endforelse
     </table>

    In the above code we have used Laravel forelse loop to loop the data.

## PAGINATION

Now to add pagination, open PostComponent.php file & add use WithPagination trait. Don’t forget to import withPagination trait above.

use Livewire\WithPagination;

public function render()
{
return view('livewire.post-component',[
'posts' => Post::paginate(5),
]);
}

The above code will display 5 records per page.

By default, the views rendered to display the pagination links are compatible with the Tailwind CSS framework.

The easiest way to customize the pagination views is by exporting them to your resources/views/vendor directory using the vendor:publish command:

php artisan vendor:publish --tag=laravel-pagination

This command will place the views in your application’s resources/views/vendor/pagination directory. You can see bootstrap-4.blade.php & bootstrap-5.blade.php files. We will use bootstrap-5.blade.php file to display pagination links.

Now open Providers/AppServiceProvider.php file & enter the below code inside the boot() method :

Paginator::useBootstrapFive();

You need to import Paginator as below :

use Illuminate\Pagination\Paginator;

Now we need to change the pagination theme from tailwind to bootstrap inside livewire.php file. So open livewire.php file & change pagination_theme from tailwind to bootstrap as shown below :

'pagination_theme' => 'bootstrap',

Now open post-component.blade.php file and add the below code after the </table> tag

{{ $posts->links() }}

Now enter 10-20 records into the database & you will see pagination links.

Now for updating & deleting post, we need post id. In the PostComponent file add the below code for post id.

public $postId;

## EDITING POST

Now we will create edit() method, which will be used to display the old data into the title & textarea for update. Add below code after the store() method

public function edit($id)
    {
        $post = Post::findOrFail($id);
$this->postId = $id;
$this->title = $post->title;
$this->body = $post->body;

        $this->openModal();
    }

Now open post-component.blade.php file and enter the below code in <h5></h5>tag

<h5 class="modal-title">
   {{$postId ? 'Edit Post' : 'Create Post' }}
</h5>

In the form tag add below code :

<form wire:submit.prevent="{{ $postId ? 'update' : 'store' }}">

In the Create button add the following code.

{{ $postId ? 'Update' : 'Create' }}

Your create button should look like this :

<button type="submit" class="btn btn-primary mt-4">
    {{ $postId ? 'Update' : 'Create' }}
 </button>

Now enter the below code into the edit button, inside the table :

wire:click="edit({{ $post->id }})"

Your edit button should look like below

<span wire:click="edit({{ $post->id }})" class="cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil cursor-pointer" viewBox="0 0 16 16">
<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
</span>

When the edit button is clicked, the modal will be opened with the data from the database. Now if you click on the Edit button it will open the modal with the data.

You can see that the title has also been changed to Edit Post.

When we click on the Edit button & then try to click on the Create button, instead of Create Form, Edit Form is displayed. To fix this replace create() method with below code :

public function create()
{
$this->reset('title','body','postId');
$this->openModal();
}

## UPDATING POST

Now we need to update the existing data. In the PostComponent file add below code after edit() method.

public function update()
{
if ($this->postId) {
            $post = Post::findOrFail($this->postId);
$post->update([
'title' => $this->title,
'body' => $this->body,
]);
session()->flash('success', 'Post updated successfully.');
$this->closeModal();
$this->reset('title', 'body', 'postId');
}
}

Now click on the edit button, and try to update a record. You can see that the record is updated successfully.

## DELETING POST

Now we need to delete data. In the PostComponent, add the below code, after update() method.

public function delete($id)
  {
      Post::find($id)->delete();
session()->flash('success', 'Post deleted successfully.');
$this->reset('title','body');
}

Now in the post-component.blade.php file enter the below code in delete button, inside the table :

wire:click="delete({{ $post->id }})"

Your delete button should look like below :

<span wire:click="delete({{ $post->id }})" class="cursor-pointer">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                       <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                       <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                     </svg>
               </span>
            
Now click on the delete icon/button & you can see that the data is deleted.

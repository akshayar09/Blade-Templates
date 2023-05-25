
- Can be constructed using the @switch , @case ,@break , @default  &  @endswitch.

- @switch($type)
    @case(1)
        // First case 
        @break
    @case(2)
        // Second case.
        @break
    @default
        
   @endswitch

- Example:---_

  IN app/Http/Controllers/PostController 

           <?php
           namespace App\Http\Controllers;
           use Illuminate\Http\Request;
           class PostsController extends Controllers
           {
               /**
               * Create a new controller instance.
               *
               * @return void
               */

           public function index()
             {
              $status = 'publish';
              return view('posts.post',compact('status'));
              }
            }
            ?>


  IN resources/views/posts/post.blade.php 

             <!DOCTYPE html>
             <html>
                <head>
                    <title>Laravel Switch Case Statement Example</title>
                </head>
                <body>
            // Passing status of post from controller.
                    @switch($status)
                        @case('publish')
                            <span class="status">Publish</span>
                            @break

                        @case('draft')
                            <span class = 'status'>Draft</span>
                            @break
                        @default
                            <span class = 'status'>Trash</span>
                    @endswitch
                </body>
             </html>




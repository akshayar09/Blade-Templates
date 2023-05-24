

1) for loop 

   @for ($i = 0; $i < $count; $i++)
       
   @endfor
   
   example:--- 

     <!DOCTYPE html>
     <html>
       <head>
          <title>Laravel Blade For Loop Example - NiceSnippets.com</title>
       </head>
         <body>
            @for ($i = 0; $i < 5; $i++)
                <p>The current value is {{ $i }}.</p>
            @endfor
         </body>
     </html>


2) foreach loop 
    
      - works only on arrays & is used to loop through each key/value pain in array.

   @foreach ($collection as $item)
       
   @endforeach

   - example:--- 
     resources/views/users.blade.php 
     
     <!DOCTYPE html>
     <html>
        <head>
            <title>LARAVEL BLADE FOREACH LOOP EXAMPLE</title>
        </head>
        <body>
            <ul>
                @foreach ($users as $user)
                    <li>Id: {{$user['id']}},Name:{{$user['name']}}</li>
                @endforeach
            </ul>
        </body>
     </html>


     where:-- app/Http/cotrollers/UsersController.php 


             <?php
             namespace App\Http\Controllers;
             use Illuminate\Http\Request;
             class UsersController extends Controller
             {
                /* 
                * Create a new controller instance.
                *
                *@return void 
                */

                public function index()
                {
                    $users = [
                        ['id' => 1, 'name' => 'Ava'],
                        ['id' => 2, 'name' => 'Azrael'],
                        ['id' => 3, 'name' => 'Derick'],
                        ['id' => 4, 'name' => 'Elizbeth'],
                ];
                return view('users', compact('$users'));
                }
             }
             ?>



3) forelse loop 

   @forelse ($collection as $item)
       
   @empty
       
   @endforelse


4) while loop 

   @while ()
       
   @endwhile

_____________________________________________________________________________________________________________________________________________________________________________________________________________________________

LOOP VARIABLE

- While iterating through a foreach loop , a $loop variable will be available inside of ur loop.

- This variable provides access to some useful bits of information such as 
    current loop index & whether its the first / last iteration through loop.

-  example:---- 

       @foreach ($users as $user)
           @if ($loop->first)
                This is the first iteration.
           @endif

           @if ($loop->last)
                This is the last iteration.
           @endif

           <p>This is user {{ $user->id }}</p>
       @endforeach

- example:--->
           @foreach ($users as $user)
               @foreach ($user->posts as $post)
               // accessing parent loop's $loop variable via parent.
                 @if ($loop->parent->first)
                    This is the first iteration of the parent loop.
                     
                 @endif
                   
               @endforeach
           @endforeach
     



Property               |    	Description
-----------------------|----------------------------
$loop->index           | The index of the current loop iteration (starts at 0).
$loop->iteration   	   | The current loop iteration (starts at 1).
$loop->remaining       | The iterations remaining in the loop.
$loop->count	       | The total number of items in the array being iterated.
$loop->first	       | Whether this is the first iteration through the loop.
$loop->last	           | Whether this is the last iteration through the loop.
$loop->even	           | Whether this is an even iteration through the loop.
$loop->odd	           | Whether this is an odd iteration through the loop.
$loop->depth	       | The nesting level of the current loop.
$loop->parent	       | When in a nested loop, the parent's loop variable.
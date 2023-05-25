

- It is a templating engine that is included with laravel.

- It can use plain PHP code in the templates.

- Blade template files use the extension=> filename.blade.php 

- Typically stored in the resources/views directory.

- Blade views may be returned from ROUTES  /  CONTROLLERS.
   Using global view helper.

- Example:--->
          Route::get('/', function(){
            return view ('greeting', ['name'=>'Daniel']);
          });

    // Here :: use to acces a static method .
    // GET route for the root URL (/) of your application. 
    // After accessing the url , a func is to be done.
    // greeting is the filename in view=>greeting.blade.php 
    // Passing the data daniel to view file.


- Displaying data =>  {{ $variable }}
   
   example:-
   // this will be routes/web.php file
           Route::get('/', function(){
            return view ('greeting', ['name'=>'Daniel']);
          });

   // After passing data to greeting.
       Hello, {{ $name }}  

    // This is how a variable is displayed in blade.


- DISPLAYING UNESCAPED DATA 

   {{ $variable }} --> automatically sent through PHP's htmlspecialchars.

   {!! $variable !!} --> If we dont want the data to be escaped.

   ex:---  Hello, {!! $name !!}                // from above ex.



                  
  
          
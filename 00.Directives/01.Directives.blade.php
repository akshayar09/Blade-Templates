

- BLADE DIRECTIVES

   1) If statements.
        
        Using @if , @elseif , @else & @endif 

        example:-- 
         
                 @if (count($records)===1) // === is strict equality
                      I have one record.
                 @elseif (count($records)>1)
                       I have more than 1 records.
                 @else 
                     I dont have any records!
                 @endif


    2) Unless 
        
          Unless directive can also use for if.

          example:-- 
                  
                 @unless (count($records)>0)
                 <h2>No records found!</h2>
                 @endunless


    3) Isset 

         @Isset and @empty can also used as convenient shortcuts.

         The @isset directive will only output the contents of the block if the variable is set. 
                If the variable is not set, the block will be skipped.

         The @empty directive will only output the contents of the block if the variable is empty. 
                If the variable is not empty, the block will be skipped.

         example:-- 
             
                 @isset($records)
                     // Not null....
                 @endisset
                 @empty($record)
                     // Is empty....
                 @endempty

    4) Authentication directives.

         @auth and @guest used to quickly determine if the current user is authenticated or is a guest. 

         example:-- 
                 // admin is the authentication guard that should be checked
                 @auth('admin')
                     // The user is authenticated
                 @endauth

                 @guest('admin')
                     // User is not authenticated.
                 @endguest


    5) Environment directives 
        
        @production to check if the application is running in the production env. 


        To prevent sensitive information from being displayed in production mode, 
            such as database passwords or API keys.

        To improve the performance of your application by only executing 
               code that is necessary in production mode.

        To conditionally execute code that is only needed in production mode,
                such as logging errors to a file or sending emails.

        
        
                
        @env 
        Code that is wrapped in the @env directive will only be executed when the 
                 application is running in the specified environment.

                 example:-- the following Blade template will only output the message "The application is running in "staging"..." 
                                 if the application is running in staging mode:

                 @env('staging')
                   <p>The application is running in "staging"...</p>
                 @endenv
         
     
                 To configure different database connections for different environments.
                 
                 To load different configuration files for different environments.

                 To conditionally execute code that is only needed in a specific environment, such as logging errors to a file or sending emails.



    

             

     
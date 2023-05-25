
- @checked() to easily indicate if a given HTML checkbox input is "checked".

- This will echo checked if the provided condition evaluates to true.

- example:---_ 

        <input type="checkbox"
               name="active"
               value="active"
               {{-- 
               * old retrieves the value of a form input field from the previous request.
               * And looks for active.
               --}}
               @checked(old('active',$user->active))/>

- example:--- 
    // render a checked checkbox if the current user is an administrator
         @if (Auth::user() -> isAdmin())
            <input type="checkbox" name="name" value="1" checked>
             
         @endif

        
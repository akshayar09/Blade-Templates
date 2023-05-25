
1) @selected 
   
   Used to indicate if a given select option should be "selected".

   - example:-- 
         
         // sets name attribute of select element.
         <select name="version" >
            // iterate over $product-> versions array.
            @foreach ($product-> versions as $version)
            // option element for each version.
            // checks if value of previos form submission's "version" = current.
            // if they match selected.
            <option value="{{ $version }}" @selected(old('version') == $version)>
                 {{ $version }}
            </option>
                
            @endforeach
         </select>


2) @disabled(true)

  - Used to indicate if a given  element should be "disabled"

  - example--- 

          <button type="submit" @disabled($errors->isNotEmpty())>submit</button>


3) @readonly(true)

     - Used to indicate if a given  element should be "readonly"

     - example:--- 

            <input type="email"
                   name="email"
                   value="email@laravel.com"
                   @readonly($user->isNotAdmin())/>
         
4) @required(true)

   - Used to indicate if a given  element should be "required"

   - example:--- 

            <input type="text"
                   name="title"
                   value="title"
                   @required($user->isAdmin())/>
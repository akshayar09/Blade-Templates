
// Sometimes we need to SPECIFY DEFAULT VALUES FOR ATTRIBUTES

// or MERGE addditionl values into some of the component's attributes.

// To do this, we use the attribute bag's " merge " method.

// This method is useful for defining a set of default CSS classes that should always be applied to a component.

      <div{{ $attributes -> merge(['class'=> 'alert alert-'.$type])}}>
            {{ $message }}
      </div>

   If we assume this component is utilized like so: 
      
       <x-alert type="error" :message="$message" class="mb-4"/>

   Then the final rendered HTML of the component will be looking like this: 
        <div class="alert alert-error mb-4">
           <!-- Contents of the $message variable -->
        </div>




       
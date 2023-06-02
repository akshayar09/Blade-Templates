     
          RETRIEVING AND FILTERING ATTRIBUTES 

// We could filter attributes using " filter" method. 

// This method accepts a closure which should return " true " if we wish to retain the attribute in the " attribute bag". 

       {{ $attributes->filter(fn (string $value, string $key)=> =='foo')}}





// " whereStartsWith " method. 
     ***************

// It is to retrieve all attributes whose keys begin with a given string: 

        {{ $attributes->whereStartsWith('wire:model')}}







// " whereDoentStartWith" method can be used to excude all attributes whose keys begin with a given string:
     ******************* 

         {{ $attributes->whereDoentStartWith('wire:model')}}






// " first " method may render the first attribute in a given attribute bag:
    *********
         {{ $attributes->whereStartsWith("wire:model")->first()}}





// " has " method to check if an attribute is present on the component.
   ***************
   * Accepts the attrbute name as its only argument

   * and returns a boolean indicating whether or not the attribute is present: 

          @if ($attributes->has('class'))
              <div>Class attribute is present</div>
          @endif



// " get "  method may retrieve a specific attribute's value: 

           {{ $attributes->get('class')}}
           
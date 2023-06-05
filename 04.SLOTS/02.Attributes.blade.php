

// We can assign additional attributes to slots such as CSS class names.

// example:----- 
        
         <x-card class="shadow-sm">
            <x-slot:heading class="font-bold">
                Heading
            </x-slot> 
            
            Content 
            <x-slot:footer class="text.sm">
                 Footer 
            </x-slot>     
         </x-card>


// To interact with slot attributes, we have to access the attributes property of the slot's variable.

// example:----------- 
          
          @props([
            'heading'
            "footer",
          ])

          <div {{ $attributes->class(['border'])}}>
              <h1 {{ $heading->attributes->class(['text-lg'])}}>
                  {{ $heading}}
            </h1>

            {{ $slot}}

            <footer {{ $footer ->attributes->class(['text-gray-700'])}}>
                {{ $footer }}           
            </footer>
          </div>
        
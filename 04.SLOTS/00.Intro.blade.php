

// Often we need to pass additional content to the component via " slots ". 

// Component slots are rendered by echoing the " $slot " variable. 

// example:--  
  * alert component has the following markup 

     <!-- /resources/views/components/alert.blade.php-->

     <div class="alert alert-danger">
        {{ $slot }}
     </div>

   * we may pass content to the " slot " by injecting content into the component.

      <x-alert>
           <strong>Whoops!</strong>Something went wrong!
      </x-alert>

// example:------- 
   * Sometimes a component may need to render multiple diff. slots in diff. locations.
   * Let's modify alert component 
   
        <!-- /resources/views/components/alert.blade.php -->
        
        <span class="alert-title">{{ $title }}</span>
        <div class="alert alert-danger">
            {{ $slot }}
        </div> 

    * we should define the content of the named slot using the x-slot tag.

    * Any content not within an explicit x-slot tag will be passed to the component in the $slot variable.

          <x-alert>
             <x-slot:title>
                Server Error 
             </x-slot>

             <strong>Whoops!</strong>Something went wrong!
            </x-alert>


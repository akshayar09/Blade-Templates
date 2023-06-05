

// For very small components, its difficult to manage both COMPONENT CLASS & COMPONENT'S VIEW TEMPLATE. 

// So, we should return the component's markup directly from the render method.

// example:--- 
      /**
       * Get the view / contents that represent the component.
       */
       public function render():string 
       {
         return <<< 'blade'
         <div class="alert alert-danger">
                {{ $slot }}
                </div>
                blade;
                
       }


// GENERATING INLINE VIEW COMPONENTS 

    To create a component that renders an iline view, we can use the inline option 

    when executing the " make:component"

    php artisan make:component Alert --inline 

    
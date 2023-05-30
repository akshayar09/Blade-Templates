- Subset of blade template to create new custom, reusable, encapsulated PHP &HTML.

- There are 2 approaches to writing components.

  1) CLASS BASED COMPONENTS 

  2) ANONYMOUS COMPONENTS 

- Class based components 

  use make:component ARTISAN COMMAND.

  EXAMPLE:-

  1) php artisan make:component Alert    
  
          * it will create a component in app/View/Components
  
          * Will also create a view template for the component in 
                  resources/View/Components 
         
  2) php artisan  make:component Forms/Input 

          * Will create an Input component in 
                  app/View/Components/Forms directory 

          * View will be placed in  resources/views/components/forms 


- Anonymous components 

    php artisan make:component forms.input --view
    
    * use --view to create an anonymous component.

    * Will create a blade file at 
             resources/views/components/forms/input.blade.php
             
    * Which can be rendered as a component via <x-forms.input/>




  
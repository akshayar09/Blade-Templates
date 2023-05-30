// To display a component ,use Blade component tag within one of your blade templates.

// Component tags start with x- 
  ex:--  <x-alert/>
         <x-user-profile/>

// If the component class is nested deeper within the
    app/view/Components directorey use "."
    to indicate directory nesting.

  ex:---
     // component is in 
     // app/view/Components/Input/Button.php
     <x-inputs.button/>
     
     
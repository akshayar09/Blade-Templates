// camelCase:--- Component constructor args should be specified using 
   
// kebab-case:--- Should be used when referencing the arg names in HTML atttributes.

   example:--- component constructor 
        
       {{-- 
          create the component instance 
          --}}
          public function __constructor(
            public string $alertType,
          ){}
    
    
 // And the $alertType arg may be provided to component like:--
         <x-alert-type="danger"/>         
       
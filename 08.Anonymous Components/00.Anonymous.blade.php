

- Similar to INLINE COMPONENTS.

- Anonymous components provides a method for managing a component via a SINGLE FILE.

- It uses a single VIEW FILE & have no ASSOCIATED CLASS.

- To define an anonymous component, place a blade template within 
       resources/views/components 

- example:--- 
       defined a component at resources/views/components/alert.blade.php 

        we can render it like 
              <x-alert/> 
- We can use the " . " character to indicate if a component is nested deeper inside the " components " directory.
  example:--- 
         component defined at resources/views/components/inputs/button.blade.php 
        
         we can render it like: 
               <x-inputs.buttons/>


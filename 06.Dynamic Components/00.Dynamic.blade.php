

// Sometimes we need to render a component but not know which component  should be 

   rendered until runtime. 

// So we can use Laravel's uilt-in " dynamic-component" component to render the component based on a RUNTIME VALUE. 

// EX:--- 
     // $componentName = " secondary-button ";
        <x-dynamic-component : component="$componentName" class="mt-4" />
        
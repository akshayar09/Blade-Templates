
// Blade components also allows to access component name, attributes & slot inside the class's render method.

// To access this datas , we should return a closure from your component's render method.

// This clodure will recieve a $data array as its only argument.

// This array will contain several elements that provide info about component.

// example:---- 
    <?php
    use Closure;

    /*     
      * Get the view/ contents that represent the component.
     */
    public function render(): Closure
    {
        return function (array $data)
        {
            // $data['componentName'];
            // $data['attributes'];
            // $data['slot'];

            return '<div>Components content</div>';
        };
    }    
    ?>

    // componentName => name used in the HTML tag after " x- " prefix.

    // So <x-alert/> 's componentName will be alert.

    // attributes element will contain all the attributes that were present on Html tag.

    // Slot element is an illuminate\Support\HtmlString instance with contents of component's slot.

    // Closure should return a string .

    // If the returned string corresponds to an existing view, that view will be rendered.

    // Otherwise, the returned string will be evaluated as an inline BLADE VIEW.

    

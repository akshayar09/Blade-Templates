  

// we can combine loops & includes into 1 line

// use @each 

@each('view.name', $collection, 'variable', 'view.empty')

where the view.name => view to render.

          $collection => array /  collection u wish to iterate.

          variable => variable name 

          view.empty => determines if the view is empty or not.



// Views renders from @each wont inherit the variables from parent view.

// If the child requires should use the @foreach & @include.

